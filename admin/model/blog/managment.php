<?php
class ModelBlogManagment extends Model {
    public function addCategory($data) {
        $this->db->query("INSERT INTO " . DB_PREFIX . "blog SET parent_id = '" . (int)$data['parent_id'] . "', `top` = '" . (isset($data['top']) ? (int)$data['top'] : 0) . "', `column` = '" . (int)$data['column'] . "', sort_order = '" . (int)$data['sort_order'] . "', status = '" . (int)$data['status'] . "', date_modified = NOW(), date_added = NOW()");

        $blog_id = $this->db->getLastId();

        if (isset($data['image'])) {
            $this->db->query("UPDATE " . DB_PREFIX . "blog SET image = '" . $this->db->escape($data['image']) . "' WHERE blog_id = '" . (int)$blog_id . "'");
        }

        foreach ($data['blog_description'] as $language_id => $value) {
            $this->db->query("INSERT INTO " . DB_PREFIX . "blog_description SET blog_id = '" . (int)$blog_id . "', language_id = '" . (int)$language_id . "', name = '" . $this->db->escape($value['name']) . "', description = '" . $this->db->escape($value['description']) . "', meta_title = '" . $this->db->escape($value['meta_title']) . "', meta_description = '" . $this->db->escape($value['meta_description']) . "', meta_keyword = '" . $this->db->escape($value['meta_keyword']) . "'");
        }

        // MySQL Hierarchical Data Closure Table Pattern
        $level = 0;

        $query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "blog_path` WHERE blog_id = '" . (int)$data['parent_id'] . "' ORDER BY `level` ASC");

        foreach ($query->rows as $result) {
            $this->db->query("INSERT INTO `" . DB_PREFIX . "blog_path` SET `blog_id` = '" . (int)$blog_id . "', `path_id` = '" . (int)$result['path_id'] . "', `level` = '" . (int)$level . "'");

            $level++;
        }

        $this->db->query("INSERT INTO `" . DB_PREFIX . "blog_path` SET `blog_id` = '" . (int)$blog_id . "', `path_id` = '" . (int)$blog_id . "', `level` = '" . (int)$level . "'");

        if (isset($data['blog_filter'])) {
            foreach ($data['blog_filter'] as $filter_id) {
                $this->db->query("INSERT INTO " . DB_PREFIX . "blog_filter SET blog_id = '" . (int)$blog_id . "', filter_id = '" . (int)$filter_id . "'");
            }
        }

        if (isset($data['blog_store'])) {
            foreach ($data['blog_store'] as $store_id) {
                $this->db->query("INSERT INTO " . DB_PREFIX . "blog_to_store SET blog_id = '" . (int)$blog_id . "', store_id = '" . (int)$store_id . "'");
            }
        }

        if (isset($data['blog_seo_url'])) {
            foreach ($data['blog_seo_url'] as $store_id => $language) {
                foreach ($language as $language_id => $keyword) {
                    if (!empty($keyword)) {
                        $this->db->query("INSERT INTO " . DB_PREFIX . "seo_url SET store_id = '" . (int)$store_id . "', language_id = '" . (int)$language_id . "', query = 'blog_id=" . (int)$blog_id . "', keyword = '" . $this->db->escape($keyword) . "'");
                    }
                }
            }
        }

        // Set which layout to use with this category
        if (isset($data['blog_layout'])) {
            foreach ($data['blog_layout'] as $store_id => $layout_id) {
                $this->db->query("INSERT INTO " . DB_PREFIX . "blog_to_layout SET blog_id = '" . (int)$blog_id . "', store_id = '" . (int)$store_id . "', layout_id = '" . (int)$layout_id . "'");
            }
        }

        $this->cache->delete('blog');

        return $blog_id;
    }

    public function editBlog($blog_id, $data) {
        $this->db->query("UPDATE " . DB_PREFIX . "blog SET parent_id = '" . (int)$data['parent_id'] . "', `top` = '" . (isset($data['top']) ? (int)$data['top'] : 0) . "', `column` = '" . (int)$data['column'] . "', sort_order = '" . (int)$data['sort_order'] . "', status = '" . (int)$data['status'] . "', date_modified = NOW() WHERE blog_id = '" . (int)$blog_id . "'");

        if (isset($data['image'])) {
            $this->db->query("UPDATE " . DB_PREFIX . "blog SET image = '" . $this->db->escape($data['image']) . "' WHERE blog_id = '" . (int)$blog_id . "'");
        }

        $this->db->query("DELETE FROM " . DB_PREFIX . "blog_description WHERE blog_id = '" . (int)$blog_id . "'");

        foreach ($data['blog_description'] as $language_id => $value) {
            $this->db->query("INSERT INTO " . DB_PREFIX . "blog_description SET blog_id = '" . (int)$blog_id . "', language_id = '" . (int)$language_id . "', name = '" . $this->db->escape($value['name']) . "', description = '" . $this->db->escape($value['description']) . "', meta_title = '" . $this->db->escape($value['meta_title']) . "', meta_description = '" . $this->db->escape($value['meta_description']) . "', meta_keyword = '" . $this->db->escape($value['meta_keyword']) . "'");
        }

        // MySQL Hierarchical Data Closure Table Pattern
        $query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "blog_path` WHERE blog_id = '" . (int)$blog_id . "' ORDER BY level ASC");

        if ($query->rows) {
            foreach ($query->rows as $blog_path) {
                // Delete the path below the current one
                $this->db->query("DELETE FROM `" . DB_PREFIX . "blog_path` WHERE blog_id = '" . (int)$blog_path['blog_id'] . "' AND level < '" . (int)$blog_path['level'] . "'");

                $path = array();

                // Get the nodes new parents
                $query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "blog_path` WHERE blog_id = '" . (int)$data['parent_id'] . "' ORDER BY level ASC");

                foreach ($query->rows as $result) {
                    $path[] = $result['path_id'];
                }

                // Get whats left of the nodes current path
                $query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "blog_path` WHERE blog_id = '" . (int)$blog_path['blog_id'] . "' ORDER BY level ASC");

                foreach ($query->rows as $result) {
                    $path[] = $result['path_id'];
                }

                // Combine the paths with a new level
                $level = 0;

                foreach ($path as $path_id) {
                    $this->db->query("REPLACE INTO `" . DB_PREFIX . "blog_path` SET blog_id = '" . (int)$blog_path['blog_id'] . "', `path_id` = '" . (int)$path_id . "', level = '" . (int)$level . "'");

                    $level++;
                }
            }
        } else {
            // Delete the path below the current one
            $this->db->query("DELETE FROM `" . DB_PREFIX . "blog_path` WHERE blog_id = '" . (int)$blog_id . "'");

            // Fix for records with no paths
            $level = 0;

            $query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "blog_path` WHERE blog_id = '" . (int)$data['parent_id'] . "' ORDER BY level ASC");

            foreach ($query->rows as $result) {
                $this->db->query("INSERT INTO `" . DB_PREFIX . "blog_path` SET blog_id = '" . (int)$blog_id . "', `path_id` = '" . (int)$result['path_id'] . "', level = '" . (int)$level . "'");

                $level++;
            }

            $this->db->query("REPLACE INTO `" . DB_PREFIX . "blog_path` SET blog_id = '" . (int)$blog_id . "', `path_id` = '" . (int)$blog_id . "', level = '" . (int)$level . "'");
        }

        $this->db->query("DELETE FROM " . DB_PREFIX . "blog_filter WHERE blog_id = '" . (int)$blog_id . "'");

        if (isset($data['blog_filter'])) {
            foreach ($data['blog_filter'] as $filter_id) {
                $this->db->query("INSERT INTO " . DB_PREFIX . "blog_filter SET blog_id = '" . (int)$blog_id . "', filter_id = '" . (int)$filter_id . "'");
            }
        }

        $this->db->query("DELETE FROM " . DB_PREFIX . "blog_to_store WHERE blog_id = '" . (int)$blog_id . "'");

        if (isset($data['blog_store'])) {
            foreach ($data['blog_store'] as $store_id) {
                $this->db->query("INSERT INTO " . DB_PREFIX . "blog_to_store SET blog_id = '" . (int)$blog_id . "', store_id = '" . (int)$store_id . "'");
            }
        }

        // SEO URL
        $this->db->query("DELETE FROM `" . DB_PREFIX . "seo_url` WHERE query = 'blog_id=" . (int)$blog_id . "'");

        if (isset($data['blog_seo_url'])) {
            foreach ($data['blog_seo_url'] as $store_id => $language) {
                foreach ($language as $language_id => $keyword) {
                    if (!empty($keyword)) {
                        $this->db->query("INSERT INTO " . DB_PREFIX . "seo_url SET store_id = '" . (int)$store_id . "', language_id = '" . (int)$language_id . "', query = 'blog_id=" . (int)$blog_id . "', keyword = '" . $this->db->escape($keyword) . "'");
                    }
                }
            }
        }

        $this->db->query("DELETE FROM " . DB_PREFIX . "blog_to_layout WHERE blog_id = '" . (int)$blog_id . "'");

        if (isset($data['blog_layout'])) {
            foreach ($data['blog_layout'] as $store_id => $layout_id) {
                $this->db->query("INSERT INTO " . DB_PREFIX . "blog_to_layout SET blog_id = '" . (int)$blog_id . "', store_id = '" . (int)$store_id . "', layout_id = '" . (int)$layout_id . "'");
            }
        }

        $this->cache->delete('blog');
    }

    public function deleteBlog($blog_id) {
        $this->db->query("DELETE FROM " . DB_PREFIX . "blog_path WHERE blog_id = '" . (int)$blog_id . "'");

        $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "blog_path WHERE path_id = '" . (int)$blog_id . "'");

        foreach ($query->rows as $result) {
            $this->deleteBlog($result['blog_id']);
        }

        $this->db->query("DELETE FROM " . DB_PREFIX . "blog WHERE blog_id = '" . (int)$blog_id . "'");
        $this->db->query("DELETE FROM " . DB_PREFIX . "blog_description WHERE blog_id = '" . (int)$blog_id . "'");
        $this->db->query("DELETE FROM " . DB_PREFIX . "blog_filter WHERE blog_id = '" . (int)$blog_id . "'");
        $this->db->query("DELETE FROM " . DB_PREFIX . "blog_to_store WHERE blog_id = '" . (int)$blog_id . "'");
        $this->db->query("DELETE FROM " . DB_PREFIX . "blog_to_layout WHERE blog_id = '" . (int)$blog_id . "'");
        $this->db->query("DELETE FROM " . DB_PREFIX . "product_to_blog WHERE blog_id = '" . (int)$blog_id . "'");
        $this->db->query("DELETE FROM " . DB_PREFIX . "seo_url WHERE query = 'blog_id=" . (int)$blog_id . "'");
        $this->db->query("DELETE FROM " . DB_PREFIX . "coupon_blog WHERE blog_id = '" . (int)$blog_id . "'");

        $this->cache->delete('blog');
    }

    public function repairBlog($parent_id = 0) {
        $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "blog WHERE parent_id = '" . (int)$parent_id . "'");

        foreach ($query->rows as $blog) {
            // Delete the path below the current one
            $this->db->query("DELETE FROM `" . DB_PREFIX . "blog_path` WHERE blog_id = '" . (int)$blog['blog_id'] . "'");

            // Fix for records with no paths
            $level = 0;

            $query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "blog_path` WHERE blog_id = '" . (int)$parent_id . "' ORDER BY level ASC");

            foreach ($query->rows as $result) {
                $this->db->query("INSERT INTO `" . DB_PREFIX . "blog_path` SET blog_id = '" . (int)$blog['blog_id'] . "', `path_id` = '" . (int)$result['path_id'] . "', level = '" . (int)$level . "'");

                $level++;
            }

            $this->db->query("REPLACE INTO `" . DB_PREFIX . "blog_path` SET blog_id = '" . (int)$blog['blog_id'] . "', `path_id` = '" . (int)$blog['blog_id'] . "', level = '" . (int)$level . "'");

            $this->repairBlogs($blog['blog_id']);
        }
    }

    public function getBlog($blog_id) {
        $query = $this->db->query("SELECT DISTINCT *, (SELECT GROUP_CONCAT(cd1.name ORDER BY level SEPARATOR '&nbsp;&nbsp;&gt;&nbsp;&nbsp;') FROM " . DB_PREFIX . "blog_path cp LEFT JOIN " . DB_PREFIX . "blog_description cd1 ON (cp.path_id = cd1.blog_id AND cp.blog_id != cp.path_id) WHERE cp.blog_id = c.blog_id AND cd1.language_id = '" . (int)$this->config->get('config_language_id') . "' GROUP BY cp.blog_id) AS path FROM " . DB_PREFIX . "blog c LEFT JOIN " . DB_PREFIX . "blog_description cd2 ON (c.blog_id = cd2.blog_id) WHERE c.blog_id = '" . (int)$blog_id . "' AND cd2.language_id = '" . (int)$this->config->get('config_language_id') . "'");

        return $query->row;
    }

    public function getBlogs($data = array()) {
        $sql = "SELECT cp.blog_id AS blog_id, cd1.name AS name, c1.parent_id, c1.sort_order FROM blog_path cp LEFT JOIN blog c1 ON (cp.blog_id = c1.blog_id) LEFT JOIN blog c2 ON (cp.path_id = c2.blog_id) LEFT JOIN blog_description cd1 ON (cp.path_id = cd1.blog_id) LEFT JOIN blog_description cd2 ON (cp.blog_id = cd2.blog_id) WHERE cd1.language_id = '" . (int)$this->config->get('config_language_id') . "' AND cd2.language_id = '" . (int)$this->config->get('config_language_id') . "'";

        if (!empty($data['filter_name'])) {
            $sql .= " AND cd2.name LIKE '%" . $this->db->escape($data['filter_name']) . "%'";
        }

        $sql .= " GROUP BY cp.blog_id";

        $sort_data = array(
            'name',
            'sort_order'
        );

        if (isset($data['sort']) && in_array($data['sort'], $sort_data)) {
            $sql .= " ORDER BY " . $data['sort'];
        } else {
            $sql .= " ORDER BY sort_order";
        }

        if (isset($data['order']) && ($data['order'] == 'DESC')) {
            $sql .= " DESC";
        } else {
            $sql .= " ASC";
        }

        if (isset($data['start']) || isset($data['limit'])) {
            if ($data['start'] < 0) {
                $data['start'] = 0;
            }

            if ($data['limit'] < 1) {
                $data['limit'] = 20;
            }

            $sql .= " LIMIT " . (int)$data['start'] . "," . (int)$data['limit'];
        }
        $query = $this->db->query($sql);

        return $query->rows;
    }

    public function getBlogDescriptions($blog_id) {
        $blog_description_data = array();

        $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "blog_description WHERE blog_id = '" . (int)$blog_id . "'");

        foreach ($query->rows as $result) {
            $blog_description_data[$result['language_id']] = array(
                'name'             => $result['name'],
                'meta_title'       => $result['meta_title'],
                'meta_description' => $result['meta_description'],
                'meta_keyword'     => $result['meta_keyword'],
                'description'      => $result['description']
            );
        }

        return $blog_description_data;
    }

    public function getBlogPath($blog_id) {
        $query = $this->db->query("SELECT blog_id, path_id, level FROM " . DB_PREFIX . "blog_path WHERE blog_id = '" . (int)$blog_id . "'");

        return $query->rows;
    }

    public function getBlogFilters($blog_id) {
        $blog_filter_data = array();

        $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "blog_filter WHERE blog_id = '" . (int)$blog_id . "'");

        foreach ($query->rows as $result) {
            $blog_filter_data[] = $result['filter_id'];
        }

        return $blog_filter_data;
    }

    public function getBlogStores($blog_id) {
        $blog_store_data = array();

        $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "blog_to_store WHERE blog_id = '" . (int)$blog_id . "'");

        foreach ($query->rows as $result) {
            $blog_store_data[] = $result['store_id'];
        }

        return $blog_store_data;
    }

    public function getBlogSeoUrls($blog_id) {
        $blog_seo_url_data = array();

        $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "seo_url WHERE query = 'blog_id=" . (int)$blog_id . "'");

        foreach ($query->rows as $result) {
            $blog_seo_url_data[$result['store_id']][$result['language_id']] = $result['keyword'];
        }

        return $blog_seo_url_data;
    }

    public function getBlogLayouts($blog_id) {
        $blog_layout_data = array();

        $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "blog_to_layout WHERE blog_id = '" . (int)$blog_id . "'");

        foreach ($query->rows as $result) {
            $blog_layout_data[$result['store_id']] = $result['layout_id'];
        }

        return $blog_layout_data;
    }

    public function getTotalBlogs() {
        $query = $this->db->query("SELECT COUNT(*) AS total FROM " . DB_PREFIX . "blog");

        return $query->row['total'];
    }

    public function getTotalBlogsByLayoutId($layout_id) {
        $query = $this->db->query("SELECT COUNT(*) AS total FROM " . DB_PREFIX . "blog_to_layout WHERE layout_id = '" . (int)$blog_id . "'");

        return $query->row['total'];
    }
}
