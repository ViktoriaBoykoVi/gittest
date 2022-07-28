<?php

/* blog/blog_form.twig */
class __TwigTemplate_4f3d9bb851d2222b30c5805b32d51ad33c8ec7bb8d61a6a620cd08da85b7e001 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo (isset($context["header"]) ? $context["header"] : null);
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
<div id=\"content\">
    <div class=\"page-header\">
        <div class=\"container-fluid\">
            <div class=\"pull-right\">
                <button type=\"submit\" form=\"form-category\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo (isset($context["button_save"]) ? $context["button_save"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
                <a href=\"";
        // line 7
        echo (isset($context["cancel"]) ? $context["cancel"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_cancel"]) ? $context["button_cancel"] : null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
            <h1>";
        // line 8
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
            <ul class=\"breadcrumb\">";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "                    <li><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "            </ul>
        </div>
    </div>
    <div class=\"container-fluid\">";
        // line 17
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 18
            echo "            <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i>";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
            </div>";
        }
        // line 22
        echo "        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
                <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i>";
        // line 24
        echo (isset($context["text_form"]) ? $context["text_form"] : null);
        echo "</h3>
            </div>
            <div class=\"panel-body\">
                <form action=\"";
        // line 27
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-category\" class=\"form-horizontal\">
                    <ul class=\"nav nav-tabs\">
                        <li class=\"active\"><a href=\"#tab-general\" data-toggle=\"tab\">";
        // line 29
        echo (isset($context["tab_general"]) ? $context["tab_general"] : null);
        echo "</a></li>
                        <li><a href=\"#tab-data\" data-toggle=\"tab\">";
        // line 30
        echo (isset($context["tab_data"]) ? $context["tab_data"] : null);
        echo "</a></li>
                        <li><a href=\"#tab-seo\" data-toggle=\"tab\">";
        // line 31
        echo (isset($context["tab_seo"]) ? $context["tab_seo"] : null);
        echo "</a></li>
                        <li><a href=\"#tab-design\" data-toggle=\"tab\">";
        // line 32
        echo (isset($context["tab_design"]) ? $context["tab_design"] : null);
        echo "</a></li>
                    </ul>
                    <div class=\"tab-content\">
                    <div class=\"tab-pane active\" id=\"tab-general\">
                        <ul class=\"nav nav-tabs\" id=\"language\">";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 38
            echo "                                <li><a href=\"#language";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\" data-toggle=\"tab\"><img src=\"language/";
            echo $this->getAttribute($context["language"], "code", array());
            echo "/";
            echo $this->getAttribute($context["language"], "code", array());
            echo ".png\" title=\"";
            echo $this->getAttribute($context["language"], "name", array());
            echo "\" />";
            echo $this->getAttribute($context["language"], "name", array());
            echo "</a></li>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "                        </ul>

                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-date-available\">";
        // line 43
        echo (isset($context["entry_date"]) ? $context["entry_date"] : null);
        echo "</label>
                                <div class=\"col-sm-3\">
                                    <div class=\"input-group date\">
                                        <input type=\"text\" name=\"date_available\" value=\"";
        // line 46
        echo (isset($context["date_available"]) ? $context["date_available"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_date"]) ? $context["entry_date"] : null);
        echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-date-available\" class=\"form-control\"/> <span class=\"input-group-btn\">
                    <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                    </span></div>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 52
        echo (isset($context["entry_status"]) ? $context["entry_status"] : null);
        echo "</label>
                                <div class=\"col-sm-10\">
                                    <select name=\"status\" id=\"input-status\" class=\"form-control\">";
        // line 55
        if ((isset($context["status"]) ? $context["status"] : null)) {
            // line 56
            echo "                                            <option value=\"1\" selected=\"selected\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                                            <option value=\"0\">";
            // line 57
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>";
        } else {
            // line 59
            echo "                                            <option value=\"1\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                                            <option value=\"0\" selected=\"selected\">";
            // line 60
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>";
        }
        // line 62
        echo "                                    </select>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-sort-order\">";
        // line 66
        echo (isset($context["entry_sort_order"]) ? $context["entry_sort_order"] : null);
        echo "</label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" name=\"sort_order\" value=\"";
        // line 68
        echo (isset($context["sort_order"]) ? $context["sort_order"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_sort_order"]) ? $context["entry_sort_order"] : null);
        echo "\" id=\"input-sort-order\" class=\"form-control\" />
                                </div>
                            </div>
                            <div class=\"tab-content\">";
        // line 72
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 73
            echo "                                    <div class=\"tab-pane\" id=\"language";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\">
                                        <div class=\"form-group required\">
                                            <label class=\"col-sm-2 control-label\" for=\"input-name";
            // line 75
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\">";
            echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
            echo "</label>
                                            <div class=\"col-sm-10\">
                                                <input type=\"text\" name=\"blog_description[";
            // line 77
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "][name]\" value=\"";
            echo (($this->getAttribute((isset($context["blog_description"]) ? $context["blog_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute((isset($context["blog_description"]) ? $context["blog_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "name", array())) : (""));
            echo "\" placeholder=\"";
            echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
            echo "\" id=\"input-name";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\" class=\"form-control\" />";
            // line 78
            if ($this->getAttribute((isset($context["error_name"]) ? $context["error_name"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) {
                // line 79
                echo "                                                    <div class=\"text-danger\">";
                echo $this->getAttribute((isset($context["error_name"]) ? $context["error_name"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array");
                echo "</div>";
            }
            // line 81
            echo "                                            </div>
                                        </div>
                                        <div class=\"form-group\">
                                            <label class=\"col-sm-2 control-label\" for=\"input-description";
            // line 84
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\">";
            echo (isset($context["entry_description"]) ? $context["entry_description"] : null);
            echo "</label>
                                            <div class=\"col-sm-10\">
                                                <textarea name=\"blog_description[";
            // line 86
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "][description]\" placeholder=\"";
            echo (isset($context["entry_description"]) ? $context["entry_description"] : null);
            echo "\" id=\"input-description";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\" data-toggle=\"summernote\" data-lang=\"";
            echo (isset($context["summernote"]) ? $context["summernote"] : null);
            echo "\" class=\"form-control\">";
            echo (($this->getAttribute((isset($context["blog_description"]) ? $context["blog_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute((isset($context["blog_description"]) ? $context["blog_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "description", array())) : (""));
            echo "</textarea>
                                            </div>
                                        </div>
                                        <div class=\"form-group\">
                                            <label class=\"col-sm-2 control-label\" for=\"input-description";
            // line 90
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\">";
            echo (isset($context["full_text"]) ? $context["full_text"] : null);
            echo "</label>
                                            <div class=\"col-sm-10\">
                                                <textarea name=\"blog_description[";
            // line 92
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "][full_text]\" placeholder=\"";
            echo (isset($context["full_text"]) ? $context["full_text"] : null);
            echo "\" id=\"input-description";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\" data-toggle=\"summernote\" data-lang=\"";
            echo (isset($context["summernote"]) ? $context["summernote"] : null);
            echo "\" class=\"form-control\">";
            echo (($this->getAttribute((isset($context["blog_description"]) ? $context["blog_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute((isset($context["blog_description"]) ? $context["blog_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "description", array())) : (""));
            echo "</textarea>
                                            </div>
                                        </div>
                                        <div class=\"form-group required\">
                                            <label class=\"col-sm-2 control-label\" for=\"input-meta-title";
            // line 96
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\">";
            echo (isset($context["entry_meta_title"]) ? $context["entry_meta_title"] : null);
            echo "</label>
                                            <div class=\"col-sm-10\">
                                                <input type=\"text\" name=\"category_description[";
            // line 98
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "][meta_title]\" value=\"";
            echo (($this->getAttribute((isset($context["blog_description"]) ? $context["blog_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute((isset($context["blog_description"]) ? $context["blog_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "meta_title", array())) : (""));
            echo "\" placeholder=\"";
            echo (isset($context["entry_meta_title"]) ? $context["entry_meta_title"] : null);
            echo "\" id=\"input-meta-title";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\" class=\"form-control\" />";
            // line 99
            if ($this->getAttribute((isset($context["error_meta_title"]) ? $context["error_meta_title"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) {
                // line 100
                echo "                                                    <div class=\"text-danger\">";
                echo $this->getAttribute((isset($context["error_meta_title"]) ? $context["error_meta_title"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array");
                echo "</div>";
            }
            // line 102
            echo "                                            </div>
                                        </div>
                                        <div class=\"form-group\">
                                            <label class=\"col-sm-2 control-label\" for=\"input-meta-description";
            // line 105
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\">";
            echo (isset($context["entry_meta_description"]) ? $context["entry_meta_description"] : null);
            echo "</label>
                                            <div class=\"col-sm-10\">
                                                <textarea name=\"blog_description[";
            // line 107
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "][meta_description]\" rows=\"5\" placeholder=\"";
            echo (isset($context["entry_meta_description"]) ? $context["entry_meta_description"] : null);
            echo "\" id=\"input-meta-description";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\" class=\"form-control\">";
            echo (($this->getAttribute((isset($context["blog_description"]) ? $context["blog_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute((isset($context["blog_description"]) ? $context["blog_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "meta_description", array())) : (""));
            echo "</textarea>
                                            </div>
                                        </div>
                                        <div class=\"form-group\">
                                            <label class=\"col-sm-2 control-label\" for=\"input-meta-keyword";
            // line 111
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\">";
            echo (isset($context["entry_meta_keyword"]) ? $context["entry_meta_keyword"] : null);
            echo "</label>
                                            <div class=\"col-sm-10\">
                                                <textarea name=\"blog_description[";
            // line 113
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "][meta_keyword]\" rows=\"5\" placeholder=\"";
            echo (isset($context["entry_meta_keyword"]) ? $context["entry_meta_keyword"] : null);
            echo "\" id=\"input-meta-keyword";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\" class=\"form-control\">";
            echo (($this->getAttribute((isset($context["blog_description"]) ? $context["blog_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute((isset($context["blog_description"]) ? $context["blog_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "meta_keyword", array())) : (""));
            echo "</textarea>
                                            </div>
                                        </div>
                                    </div>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 118
        echo "                            </div>
                        </div>
                        <div class=\"tab-pane\" id=\"tab-data\">
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-parent\">";
        // line 122
        echo (isset($context["entry_parent"]) ? $context["entry_parent"] : null);
        echo "</label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" name=\"path\" value=\"";
        // line 124
        echo (isset($context["path"]) ? $context["path"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_parent"]) ? $context["entry_parent"] : null);
        echo "\" id=\"input-parent\" class=\"form-control\" />
                                    <input type=\"hidden\" name=\"parent_id\" value=\"";
        // line 125
        echo (isset($context["parent_id"]) ? $context["parent_id"] : null);
        echo "\" />";
        // line 126
        if ((isset($context["error_parent"]) ? $context["error_parent"] : null)) {
            // line 127
            echo "                                        <div class=\"text-danger\">";
            echo (isset($context["error_parent"]) ? $context["error_parent"] : null);
            echo "</div>";
        }
        // line 129
        echo "                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-filter\"><span data-toggle=\"tooltip\" title=\"";
        // line 132
        echo (isset($context["help_filter"]) ? $context["help_filter"] : null);
        echo "\">";
        echo (isset($context["entry_filter"]) ? $context["entry_filter"] : null);
        echo "</span></label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" name=\"filter\" value=\"\" placeholder=\"";
        // line 134
        echo (isset($context["entry_filter"]) ? $context["entry_filter"] : null);
        echo "\" id=\"input-filter\" class=\"form-control\" />
                                    <div id=\"category-filter\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">";
        // line 136
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["blog_filters"]) ? $context["blog_filters"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["blog_filter"]) {
            // line 137
            echo "                                            <div id=\"blog-filter";
            echo $this->getAttribute($context["blog_filter"], "filter_id", array());
            echo "\"><i class=\"fa fa-minus-circle\"></i>";
            echo $this->getAttribute($context["blog_filter"], "name", array());
            echo "
                                                <input type=\"hidden\" name=\"blog_filter[]\" value=\"";
            // line 138
            echo $this->getAttribute($context["blog_filter"], "filter_id", array());
            echo "\" />
                                            </div>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blog_filter'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 141
        if (($this->getAttribute((isset($context["product_option"]) ? $context["product_option"] : null), "type", array()) == "date")) {
            // line 142
            echo "                                            <div class=\"form-group\">
                                                <label class=\"col-sm-2 control-label\" for=\"input-value";
            // line 143
            echo (isset($context["option_row"]) ? $context["option_row"] : null);
            echo "\">";
            echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
            echo "</label>
                                                <div class=\"col-sm-3\">
                                                    <div class=\"input-group date\">
                                                        <input type=\"text\" name=\"product_option[";
            // line 146
            echo (isset($context["option_row"]) ? $context["option_row"] : null);
            echo "][value]\" value=\"";
            echo $this->getAttribute((isset($context["product_option"]) ? $context["product_option"] : null), "value", array());
            echo "\" placeholder=\"";
            echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
            echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-value";
            echo (isset($context["option_row"]) ? $context["option_row"] : null);
            echo "\" class=\"form-control\"/> <span class=\"input-group-btn\">
                            <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                            </span></div>
                                                </div>
                                            </div>";
        }
        // line 152
        if (($this->getAttribute((isset($context["product_option"]) ? $context["product_option"] : null), "type", array()) == "time")) {
            // line 153
            echo "                                            <div class=\"form-group\">
                                                <label class=\"col-sm-2 control-label\" for=\"input-value";
            // line 154
            echo (isset($context["option_row"]) ? $context["option_row"] : null);
            echo "\">";
            echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
            echo "</label>
                                                <div class=\"col-sm-10\">
                                                    <div class=\"input-group time\">
                                                        <input type=\"text\" name=\"product_option[";
            // line 157
            echo (isset($context["option_row"]) ? $context["option_row"] : null);
            echo "][value]\" value=\"";
            echo $this->getAttribute((isset($context["product_option"]) ? $context["product_option"] : null), "value", array());
            echo "\" placeholder=\"";
            echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
            echo "\" data-date-format=\"HH:mm\" id=\"input-value";
            echo (isset($context["option_row"]) ? $context["option_row"] : null);
            echo "\" class=\"form-control\"/> <span class=\"input-group-btn\">
                            <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                            </span></div>
                                                </div>
                                            </div>";
        }
        // line 163
        if (($this->getAttribute((isset($context["product_option"]) ? $context["product_option"] : null), "type", array()) == "datetime")) {
            // line 164
            echo "                                            <div class=\"form-group\">
                                                <label class=\"col-sm-2 control-label\" for=\"input-value";
            // line 165
            echo (isset($context["option_row"]) ? $context["option_row"] : null);
            echo "\">";
            echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
            echo "</label>
                                                <div class=\"col-sm-10\">
                                                    <div class=\"input-group datetime\">
                                                        <input type=\"text\" name=\"product_option[";
            // line 168
            echo (isset($context["option_row"]) ? $context["option_row"] : null);
            echo "][value]\" value=\"";
            echo $this->getAttribute((isset($context["product_option"]) ? $context["product_option"] : null), "value", array());
            echo "\" placeholder=\"";
            echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
            echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-value";
            echo (isset($context["option_row"]) ? $context["option_row"] : null);
            echo "\" class=\"form-control\"/> <span class=\"input-group-btn\">
                            <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                            </span></div>
                                                </div>
                                            </div>";
        }
        // line 174
        echo "                                    </div>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\">";
        // line 178
        echo (isset($context["entry_store"]) ? $context["entry_store"] : null);
        echo "</label>
                                <div class=\"col-sm-10\">
                                    <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">";
        // line 181
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["stores"]) ? $context["stores"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 182
            echo "                                            <div class=\"checkbox\">
                                                <label>";
            // line 184
            if (twig_in_filter($this->getAttribute($context["store"], "store_id", array()), (isset($context["blog_store"]) ? $context["blog_store"] : null))) {
                // line 185
                echo "                                                        <input type=\"checkbox\" name=\"blog_store[]\" value=\"";
                echo $this->getAttribute($context["store"], "store_id", array());
                echo "\" checked=\"checked\" />";
                // line 186
                echo $this->getAttribute($context["store"], "name", array());
            } else {
                // line 188
                echo "                                                        <input type=\"checkbox\" name=\"blog_store[]\" value=\"";
                echo $this->getAttribute($context["store"], "store_id", array());
                echo "\" />";
                // line 189
                echo $this->getAttribute($context["store"], "name", array());
            }
            // line 191
            echo "                                                </label>
                                            </div>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 194
        echo "                                    </div>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\">";
        // line 198
        echo (isset($context["entry_image"]) ? $context["entry_image"] : null);
        echo "</label>
                                <div class=\"col-sm-10\"><a href=\"\" id=\"thumb-image\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 199
        echo (isset($context["thumb"]) ? $context["thumb"] : null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo (isset($context["placeholder"]) ? $context["placeholder"] : null);
        echo "\" /></a>
                                    <input type=\"hidden\" name=\"image\" value=\"";
        // line 200
        echo (isset($context["image"]) ? $context["image"] : null);
        echo "\" id=\"input-image\" />
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-top\"><span data-toggle=\"tooltip\" title=\"";
        // line 204
        echo (isset($context["help_top"]) ? $context["help_top"] : null);
        echo "\">";
        echo (isset($context["entry_top"]) ? $context["entry_top"] : null);
        echo "</span></label>
                                <div class=\"col-sm-10\">
                                    <div class=\"checkbox\">
                                        <label>";
        // line 208
        if ((isset($context["top"]) ? $context["top"] : null)) {
            // line 209
            echo "                                                <input type=\"checkbox\" name=\"top\" value=\"1\" checked=\"checked\" id=\"input-top\" />";
        } else {
            // line 211
            echo "                                                <input type=\"checkbox\" name=\"top\" value=\"1\" id=\"input-top\" />";
        }
        // line 213
        echo "                                            &nbsp; </label>
                                    </div>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-column\"><span data-toggle=\"tooltip\" title=\"";
        // line 218
        echo (isset($context["help_column"]) ? $context["help_column"] : null);
        echo "\">";
        echo (isset($context["entry_column"]) ? $context["entry_column"] : null);
        echo "</span></label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" name=\"column\" value=\"";
        // line 220
        echo (isset($context["column"]) ? $context["column"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_column"]) ? $context["entry_column"] : null);
        echo "\" id=\"input-column\" class=\"form-control\" />
                                </div>
                            </div>

                        </div>
                        <div class=\"tab-pane\" id=\"tab-seo\">
                            <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i>";
        // line 226
        echo (isset($context["text_keyword"]) ? $context["text_keyword"] : null);
        echo "</div>
                            <div class=\"table-responsive\">
                                <table class=\"table table-bordered table-hover\">
                                    <thead>
                                    <tr>
                                        <td class=\"text-left\">";
        // line 231
        echo (isset($context["entry_store"]) ? $context["entry_store"] : null);
        echo "</td>
                                        <td class=\"text-left\">";
        // line 232
        echo (isset($context["entry_keyword"]) ? $context["entry_keyword"] : null);
        echo "</td>
                                    </tr>
                                    </thead>
                                    <tbody>";
        // line 236
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["stores"]) ? $context["stores"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 237
            echo "                                        <tr>
                                            <td class=\"text-left\">";
            // line 238
            echo $this->getAttribute($context["store"], "name", array());
            echo "</td>
                                            <td class=\"text-left\">";
            // line 239
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 240
                echo "                                                    <div class=\"input-group\"><span class=\"input-group-addon\"><img src=\"language/";
                echo $this->getAttribute($context["language"], "code", array());
                echo "/";
                echo $this->getAttribute($context["language"], "code", array());
                echo ".png\" title=\"";
                echo $this->getAttribute($context["language"], "name", array());
                echo "\" /></span>
                                                        <input type=\"text\" name=\"blog_seo_url[";
                // line 241
                echo $this->getAttribute($context["store"], "store_id", array());
                echo "][";
                echo $this->getAttribute($context["language"], "language_id", array());
                echo "]\" value=\"";
                if ($this->getAttribute($this->getAttribute((isset($context["blog_seo_url"]) ? $context["blog_seo_url"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array"), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) {
                    echo $this->getAttribute($this->getAttribute((isset($context["blog_seo_url"]) ? $context["blog_seo_url"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array"), $this->getAttribute($context["language"], "language_id", array()), array(), "array");
                }
                echo "\" placeholder=\"";
                echo (isset($context["entry_keyword"]) ? $context["entry_keyword"] : null);
                echo "\" class=\"form-control\" />
                                                    </div>";
                // line 243
                if ($this->getAttribute($this->getAttribute((isset($context["error_keyword"]) ? $context["error_keyword"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array"), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) {
                    // line 244
                    echo "                                                        <div class=\"text-danger\">";
                    echo $this->getAttribute($this->getAttribute((isset($context["error_keyword"]) ? $context["error_keyword"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array"), $this->getAttribute($context["language"], "language_id", array()), array(), "array");
                    echo "</div>";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 246
            echo "</td>
                                        </tr>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 249
        echo "                                    </tbody>

                                </table>
                            </div>
                        </div>
                        <div class=\"tab-pane\" id=\"tab-design\">
                            <div class=\"table-responsive\">
                                <table class=\"table table-bordered table-hover\">
                                    <thead>
                                    <tr>
                                        <td class=\"text-left\">";
        // line 259
        echo (isset($context["entry_store"]) ? $context["entry_store"] : null);
        echo "</td>
                                        <td class=\"text-left\">";
        // line 260
        echo (isset($context["entry_layout"]) ? $context["entry_layout"] : null);
        echo "</td>
                                    </tr>
                                    </thead>
                                    <tbody>";
        // line 265
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["stores"]) ? $context["stores"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 266
            echo "                                        <tr>
                                            <td class=\"text-left\">";
            // line 267
            echo $this->getAttribute($context["store"], "name", array());
            echo "</td>
                                            <td class=\"text-left\"><select name=\"blog_layout[";
            // line 268
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "]\" class=\"form-control\">
                                                    <option value=\"\"></option>";
            // line 270
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["layouts"]) ? $context["layouts"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["layout"]) {
                // line 271
                if (($this->getAttribute((isset($context["blog_layout"]) ? $context["blog_layout"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array") && ($this->getAttribute((isset($context["blog_layout"]) ? $context["blog_layout"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array") == $this->getAttribute($context["layout"], "layout_id", array())))) {
                    // line 272
                    echo "                                                            <option value=\"";
                    echo $this->getAttribute($context["layout"], "layout_id", array());
                    echo "\" selected=\"selected\">";
                    echo $this->getAttribute($context["layout"], "name", array());
                    echo "</option>";
                } else {
                    // line 274
                    echo "                                                            <option value=\"";
                    echo $this->getAttribute($context["layout"], "layout_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["layout"], "name", array());
                    echo "</option>";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 277
            echo "                                                </select></td>
                                        </tr>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 280
        echo "                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <link href=\"view/javascript/codemirror/lib/codemirror.css\" rel=\"stylesheet\" />
    <link href=\"view/javascript/codemirror/theme/monokai.css\" rel=\"stylesheet\" />
    <script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/codemirror.js\"></script>
    <script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/xml.js\"></script>
    <script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/formatting.js\"></script>

    <script type=\"text/javascript\" src=\"view/javascript/summernote/summernote.js\"></script>
    <link href=\"view/javascript/summernote/summernote.css\" rel=\"stylesheet\" />
    <script type=\"text/javascript\" src=\"view/javascript/summernote/summernote-image-attributes.js\"></script>
    <script type=\"text/javascript\" src=\"view/javascript/summernote/opencart.js\"></script>

    <script type=\"text/javascript\"><!--
        \$('input[name=\\'path\\']').autocomplete({
            'source': function(request, response) {
                \$.ajax({
                    url: 'index.php?route=blog/managment/autocomplete&user_token=";
        // line 304
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&filter_name=' +  encodeURIComponent(request),
                    dataType: 'json',
                    success: function(json) {
                        json.unshift({
                            category_id: 0,
                            name: '";
        // line 309
        echo (isset($context["text_none"]) ? $context["text_none"] : null);
        echo "'
                        });

                        response(\$.map(json, function(item) {
                            return {
                                label: item['name'],
                                value: item['blog_id']
                            }
                        }));
                    }
                });
            },
            'select': function(item) {
                \$('input[name=\\'path\\']').val(item['label']);
                \$('input[name=\\'parent_id\\']').val(item['value']);
            }
        });
        //--></script>
    <script type=\"text/javascript\"><!--
        \$('input[name=\\'filter\\']').autocomplete({
            'source': function(request, response) {
                \$.ajax({
                    url: 'index.php?route=blog/filter/autocomplete&user_token=";
        // line 331
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&filter_name=' +  encodeURIComponent(request),
                    dataType: 'json',
                    success: function(json) {
                        response(\$.map(json, function(item) {
                            return {
                                label: item['name'],
                                value: item['filter_id']
                            }
                        }));
                    }
                });
            },
            'select': function(item) {
                \$('input[name=\\'filter\\']').val('');

                \$('#category-filter' + item['value']).remove();

                \$('#category-filter').append('<div id=\"category-filter' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"category_filter[]\" value=\"' + item['value'] + '\" /></div>');
            }
        });

        \$('#category-filter').delegate('.fa-minus-circle', 'click', function() {
            \$(this).parent().remove();
        });
        //--></script>
    <script type=\"text/javascript\"><!--
        \$('#language a:first').tab('show');
        //--></script></div>
'select': function(item) {
html = '<div class=\"tab-pane\" id=\"tab-option' + option_row + '\">';
    html += '\t<input type=\"hidden\" name=\"product_option[' + option_row + '][product_option_id]\" value=\"\" />';
    html += '\t<input type=\"hidden\" name=\"product_option[' + option_row + '][name]\" value=\"' + item['label'] + '\" />';
    html += '\t<input type=\"hidden\" name=\"product_option[' + option_row + '][option_id]\" value=\"' + item['value'] + '\" />';
    html += '\t<input type=\"hidden\" name=\"product_option[' + option_row + '][type]\" value=\"' + item['type'] + '\" />';



<script type=\"text/javascript\"><!--
    var option_value_row =";
        // line 369
        echo (isset($context["option_value_row"]) ? $context["option_value_row"] : null);
        echo ";

    function addOptionValue(option_row) {
        html = '<tr id=\"option-value-row' + option_value_row + '\">';
        html += '  <td class=\"text-left\"><select name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][option_value_id]\" class=\"form-control\">';
        html += \$('#option-values' + option_row).html();
        html += '  </select><input type=\"hidden\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][product_option_value_id]\" value=\"\" /></td>';
        html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][quantity]\" value=\"\" placeholder=\"";
        // line 376
        echo (isset($context["entry_quantity"]) ? $context["entry_quantity"] : null);
        echo "\" class=\"form-control\" /></td>';
        html += '  <td class=\"text-left\"><select name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][subtract]\" class=\"form-control\">';
        html += '    <option value=\"1\">";
        // line 378
        echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        echo "</option>';
        html += '    <option value=\"0\">";
        // line 379
        echo (isset($context["text_no"]) ? $context["text_no"] : null);
        echo "</option>';
        html += '  </select></td>';
        html += '  <td class=\"text-right\"><select name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][price_prefix]\" class=\"form-control\">';
        html += '    <option value=\"+\">+</option>';
        html += '    <option value=\"-\">-</option>';
        html += '  </select>';
        html += '  <input type=\"text\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][price]\" value=\"\" placeholder=\"";
        // line 385
        echo (isset($context["entry_price"]) ? $context["entry_price"] : null);
        echo "\" class=\"form-control\" /></td>';
        html += '  <td class=\"text-right\"><select name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][points_prefix]\" class=\"form-control\">';
        html += '    <option value=\"+\">+</option>';
        html += '    <option value=\"-\">-</option>';
        html += '  </select>';
        html += '  <input type=\"text\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][points]\" value=\"\" placeholder=\"";
        // line 390
        echo (isset($context["entry_points"]) ? $context["entry_points"] : null);
        echo "\" class=\"form-control\" /></td>';
        html += '  <td class=\"text-right\"><select name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][weight_prefix]\" class=\"form-control\">';
        html += '    <option value=\"+\">+</option>';
        html += '    <option value=\"-\">-</option>';
        html += '  </select>';
        html += '  <input type=\"text\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][weight]\" value=\"\" placeholder=\"";
        // line 395
        echo (isset($context["entry_weight"]) ? $context["entry_weight"] : null);
        echo "\" class=\"form-control\" /></td>';
        html += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(this).tooltip(\\'destroy\\');\$(\\'#option-value-row' + option_value_row + '\\').remove();\" data-toggle=\"tooltip\" rel=\"tooltip\" title=\"";
        // line 396
        echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
        html += '</tr>';

        \$('#option-value' + option_row + ' tbody').append(html);
        \$('[rel=tooltip]').tooltip();

        option_value_row++;
    }

    //--></script>
<script type=\"text/javascript\"><!--
    var discount_row =";
        // line 407
        echo (isset($context["discount_row"]) ? $context["discount_row"] : null);
        echo ";

    function addDiscount() {
        html = '<tr id=\"discount-row' + discount_row + '\">';
        html += '  <td class=\"text-left\"><select name=\"product_discount[' + discount_row + '][customer_group_id]\" class=\"form-control\">';";
        // line 412
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["customer_groups"]) ? $context["customer_groups"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 413
            echo "        html += '    <option value=\"";
            echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["customer_group"], "name", array()), "js");
            echo "</option>';";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 415
        echo "        html += '  </select></td>';
        html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_discount[' + discount_row + '][quantity]\" value=\"\" placeholder=\"";
        // line 416
        echo (isset($context["entry_quantity"]) ? $context["entry_quantity"] : null);
        echo "\" class=\"form-control\" /></td>';
        html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_discount[' + discount_row + '][priority]\" value=\"\" placeholder=\"";
        // line 417
        echo (isset($context["entry_priority"]) ? $context["entry_priority"] : null);
        echo "\" class=\"form-control\" /></td>';
        html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_discount[' + discount_row + '][price]\" value=\"\" placeholder=\"";
        // line 418
        echo (isset($context["entry_price"]) ? $context["entry_price"] : null);
        echo "\" class=\"form-control\" /></td>';
        html += '  <td class=\"text-left\" style=\"width: 20%;\"><div class=\"input-group date\"><input type=\"text\" name=\"product_discount[' + discount_row + '][date_start]\" value=\"\" placeholder=\"";
        // line 419
        echo (isset($context["entry_date_start"]) ? $context["entry_date_start"] : null);
        echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></td>';
        html += '  <td class=\"text-left\" style=\"width: 20%;\"><div class=\"input-group date\"><input type=\"text\" name=\"product_discount[' + discount_row + '][date_end]\" value=\"\" placeholder=\"";
        // line 420
        echo (isset($context["entry_date_end"]) ? $context["entry_date_end"] : null);
        echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></td>';
        html += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(\\'#discount-row' + discount_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 421
        echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
        html += '</tr>';

        \$('#discount tbody').append(html);

        \$('.date').datetimepicker({
            pickTime: false
        });

        discount_row++;
    }

    //--></script>
<script type=\"text/javascript\"><!--
    var special_row =";
        // line 435
        echo (isset($context["special_row"]) ? $context["special_row"] : null);
        echo ";

    function addSpecial() {
        html = '<tr id=\"special-row' + special_row + '\">';
        html += '  <td class=\"text-left\"><select name=\"product_special[' + special_row + '][customer_group_id]\" class=\"form-control\">';";
        // line 440
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["customer_groups"]) ? $context["customer_groups"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 441
            echo "        html += '      <option value=\"";
            echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["customer_group"], "name", array()), "js");
            echo "</option>';";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 443
        echo "        html += '  </select></td>';
        html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_special[' + special_row + '][priority]\" value=\"\" placeholder=\"";
        // line 444
        echo (isset($context["entry_priority"]) ? $context["entry_priority"] : null);
        echo "\" class=\"form-control\" /></td>';
        html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_special[' + special_row + '][price]\" value=\"\" placeholder=\"";
        // line 445
        echo (isset($context["entry_price"]) ? $context["entry_price"] : null);
        echo "\" class=\"form-control\" /></td>';
        html += '  <td class=\"text-left\" style=\"width: 20%;\"><div class=\"input-group date\"><input type=\"text\" name=\"product_special[' + special_row + '][date_start]\" value=\"\" placeholder=\"";
        // line 446
        echo (isset($context["entry_date_start"]) ? $context["entry_date_start"] : null);
        echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></td>';
        html += '  <td class=\"text-left\" style=\"width: 20%;\"><div class=\"input-group date\"><input type=\"text\" name=\"product_special[' + special_row + '][date_end]\" value=\"\" placeholder=\"";
        // line 447
        echo (isset($context["entry_date_end"]) ? $context["entry_date_end"] : null);
        echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></td>';
        html += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(\\'#special-row' + special_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 448
        echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
        html += '</tr>';

        \$('#special tbody').append(html);

        \$('.date').datetimepicker({
            language: '";
        // line 454
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
            pickTime: false
        });

        special_row++;
    }

    //--></script>
<script type=\"text/javascript\"><!--
    var image_row =";
        // line 463
        echo (isset($context["image_row"]) ? $context["image_row"] : null);
        echo ";

    function addImage() {
        html = '<tr id=\"image-row' + image_row + '\">';
        html += '  <td class=\"text-left\"><a href=\"\" id=\"thumb-image' + image_row + '\"data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 467
        echo (isset($context["placeholder"]) ? $context["placeholder"] : null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo (isset($context["placeholder"]) ? $context["placeholder"] : null);
        echo "\" /></a><input type=\"hidden\" name=\"product_image[' + image_row + '][image]\" value=\"\" id=\"input-image' + image_row + '\" /></td>';
        html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_image[' + image_row + '][sort_order]\" value=\"\" placeholder=\"";
        // line 468
        echo (isset($context["entry_sort_order"]) ? $context["entry_sort_order"] : null);
        echo "\" class=\"form-control\" /></td>';
        html += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(\\'#image-row' + image_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 469
        echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
        html += '</tr>';

        \$('#images tbody').append(html);

        image_row++;
    }

    //--></script>
<script type=\"text/javascript\"><!--
    var recurring_row =";
        // line 479
        echo (isset($context["recurring_row"]) ? $context["recurring_row"] : null);
        echo ";

    function addRecurring() {
        html = '<tr id=\"recurring-row' + recurring_row + '\">';
        html += '  <td class=\"left\">';
        html += '    <select name=\"product_recurring[' + recurring_row + '][recurring_id]\" class=\"form-control\">>';";
        // line 485
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["recurrings"]) ? $context["recurrings"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
            // line 486
            echo "        html += '      <option value=\"";
            echo $this->getAttribute($context["recurring"], "recurring_id", array());
            echo "\">";
            echo $this->getAttribute($context["recurring"], "name", array());
            echo "</option>';";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 488
        echo "        html += '    </select>';
        html += '  </td>';
        html += '  <td class=\"left\">';
        html += '    <select name=\"product_recurring[' + recurring_row + '][customer_group_id]\" class=\"form-control\">>';";
        // line 492
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["customer_groups"]) ? $context["customer_groups"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 493
            echo "        html += '      <option value=\"";
            echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
            echo "\">";
            echo $this->getAttribute($context["customer_group"], "name", array());
            echo "</option>';";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 495
        echo "        html += '    <select>';
        html += '  </td>';
        html += '  <td class=\"left\">';
        html += '    <a onclick=\"\$(\\'#recurring-row' + recurring_row + '\\').remove()\" data-toggle=\"tooltip\" title=\"";
        // line 498
        echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></a>';
        html += '  </td>';
        html += '</tr>';

        \$('#tab-recurring table tbody').append(html);

        recurring_row++;
    }

    //--></script>
<script type=\"text/javascript\"><!--
    \$('.date').datetimepicker({
        language: '";
        // line 510
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
        pickTime: false
    });

    \$('.time').datetimepicker({
        language: '";
        // line 515
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
        pickDate: false
    });

    \$('.datetime').datetimepicker({
        language: '";
        // line 520
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
        pickDate: true,
        pickTime: true
    });
    //--></script>
<script type=\"text/javascript\"><!--
    \$('#language a:first').tab('show');
    \$('#option a:first').tab('show');
    //--></script>
</div>";
        // line 530
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "blog/blog_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1134 => 530,  1122 => 520,  1114 => 515,  1106 => 510,  1091 => 498,  1086 => 495,  1076 => 493,  1072 => 492,  1067 => 488,  1057 => 486,  1053 => 485,  1045 => 479,  1032 => 469,  1028 => 468,  1022 => 467,  1015 => 463,  1003 => 454,  994 => 448,  990 => 447,  986 => 446,  982 => 445,  978 => 444,  975 => 443,  965 => 441,  961 => 440,  954 => 435,  937 => 421,  933 => 420,  929 => 419,  925 => 418,  921 => 417,  917 => 416,  914 => 415,  904 => 413,  900 => 412,  893 => 407,  879 => 396,  875 => 395,  867 => 390,  859 => 385,  850 => 379,  846 => 378,  841 => 376,  831 => 369,  790 => 331,  765 => 309,  757 => 304,  731 => 280,  724 => 277,  713 => 274,  706 => 272,  704 => 271,  700 => 270,  696 => 268,  692 => 267,  689 => 266,  685 => 265,  679 => 260,  675 => 259,  663 => 249,  656 => 246,  647 => 244,  645 => 243,  633 => 241,  624 => 240,  620 => 239,  616 => 238,  613 => 237,  609 => 236,  603 => 232,  599 => 231,  591 => 226,  580 => 220,  573 => 218,  566 => 213,  563 => 211,  560 => 209,  558 => 208,  550 => 204,  543 => 200,  537 => 199,  533 => 198,  527 => 194,  520 => 191,  517 => 189,  513 => 188,  510 => 186,  506 => 185,  504 => 184,  501 => 182,  497 => 181,  492 => 178,  486 => 174,  472 => 168,  464 => 165,  461 => 164,  459 => 163,  445 => 157,  437 => 154,  434 => 153,  432 => 152,  418 => 146,  410 => 143,  407 => 142,  405 => 141,  397 => 138,  390 => 137,  386 => 136,  382 => 134,  375 => 132,  370 => 129,  365 => 127,  363 => 126,  360 => 125,  354 => 124,  349 => 122,  343 => 118,  327 => 113,  320 => 111,  307 => 107,  300 => 105,  295 => 102,  290 => 100,  288 => 99,  279 => 98,  272 => 96,  257 => 92,  250 => 90,  235 => 86,  228 => 84,  223 => 81,  218 => 79,  216 => 78,  207 => 77,  200 => 75,  194 => 73,  190 => 72,  182 => 68,  177 => 66,  171 => 62,  167 => 60,  162 => 59,  158 => 57,  153 => 56,  151 => 55,  146 => 52,  135 => 46,  129 => 43,  124 => 40,  108 => 38,  104 => 37,  97 => 32,  93 => 31,  89 => 30,  85 => 29,  80 => 27,  74 => 24,  70 => 22,  63 => 18,  61 => 17,  56 => 13,  46 => 11,  42 => 10,  38 => 8,  32 => 7,  28 => 6,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*     <div class="page-header">*/
/*         <div class="container-fluid">*/
/*             <div class="pull-right">*/
/*                 <button type="submit" form="form-category" data-toggle="tooltip" title="{{ button_save }}" class="btn btn-primary"><i class="fa fa-save"></i></button>*/
/*                 <a href="{{ cancel }}" data-toggle="tooltip" title="{{ button_cancel }}" class="btn btn-default"><i class="fa fa-reply"></i></a></div>*/
/*             <h1>{{ heading_title }}</h1>*/
/*             <ul class="breadcrumb">*/
/*                 {% for breadcrumb in breadcrumbs %}*/
/*                     <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*                 {% endfor %}*/
/*             </ul>*/
/*         </div>*/
/*     </div>*/
/*     <div class="container-fluid">*/
/*         {% if error_warning %}*/
/*             <div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}*/
/*                 <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*             </div>*/
/*         {% endif %}*/
/*         <div class="panel panel-default">*/
/*             <div class="panel-heading">*/
/*                 <h3 class="panel-title"><i class="fa fa-pencil"></i> {{ text_form }}</h3>*/
/*             </div>*/
/*             <div class="panel-body">*/
/*                 <form action="{{ action }}" method="post" enctype="multipart/form-data" id="form-category" class="form-horizontal">*/
/*                     <ul class="nav nav-tabs">*/
/*                         <li class="active"><a href="#tab-general" data-toggle="tab">{{ tab_general }}</a></li>*/
/*                         <li><a href="#tab-data" data-toggle="tab">{{ tab_data }}</a></li>*/
/*                         <li><a href="#tab-seo" data-toggle="tab">{{ tab_seo }}</a></li>*/
/*                         <li><a href="#tab-design" data-toggle="tab">{{ tab_design }}</a></li>*/
/*                     </ul>*/
/*                     <div class="tab-content">*/
/*                     <div class="tab-pane active" id="tab-general">*/
/*                         <ul class="nav nav-tabs" id="language">*/
/*                             {% for language in languages %}*/
/*                                 <li><a href="#language{{ language.language_id }}" data-toggle="tab"><img src="language/{{ language.code }}/{{ language.code }}.png" title="{{ language.name }}" /> {{ language.name }}</a></li>*/
/*                             {% endfor %}*/
/*                         </ul>*/
/* */
/*                             <div class="form-group">*/
/*                                 <label class="col-sm-2 control-label" for="input-date-available">{{ entry_date }}</label>*/
/*                                 <div class="col-sm-3">*/
/*                                     <div class="input-group date">*/
/*                                         <input type="text" name="date_available" value="{{ date_available }}" placeholder="{{ entry_date }}" data-date-format="YYYY-MM-DD" id="input-date-available" class="form-control"/> <span class="input-group-btn">*/
/*                     <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>*/
/*                     </span></div>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="form-group">*/
/*                                 <label class="col-sm-2 control-label" for="input-status">{{ entry_status }}</label>*/
/*                                 <div class="col-sm-10">*/
/*                                     <select name="status" id="input-status" class="form-control">*/
/*                                         {% if status %}*/
/*                                             <option value="1" selected="selected">{{ text_enabled }}</option>*/
/*                                             <option value="0">{{ text_disabled }}</option>*/
/*                                         {% else %}*/
/*                                             <option value="1">{{ text_enabled }}</option>*/
/*                                             <option value="0" selected="selected">{{ text_disabled }}</option>*/
/*                                         {% endif %}*/
/*                                     </select>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="form-group">*/
/*                                 <label class="col-sm-2 control-label" for="input-sort-order">{{ entry_sort_order }}</label>*/
/*                                 <div class="col-sm-10">*/
/*                                     <input type="text" name="sort_order" value="{{ sort_order }}" placeholder="{{ entry_sort_order }}" id="input-sort-order" class="form-control" />*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="tab-content">*/
/*                                 {% for language in languages %}*/
/*                                     <div class="tab-pane" id="language{{ language.language_id }}">*/
/*                                         <div class="form-group required">*/
/*                                             <label class="col-sm-2 control-label" for="input-name{{ language.language_id }}">{{ entry_name }}</label>*/
/*                                             <div class="col-sm-10">*/
/*                                                 <input type="text" name="blog_description[{{ language.language_id }}][name]" value="{{ blog_description[language.language_id] ? blog_description[language.language_id].name }}" placeholder="{{ entry_name }}" id="input-name{{ language.language_id }}" class="form-control" />*/
/*                                                 {% if error_name[language.language_id] %}*/
/*                                                     <div class="text-danger">{{ error_name[language.language_id] }}</div>*/
/*                                                 {% endif %}*/
/*                                             </div>*/
/*                                         </div>*/
/*                                         <div class="form-group">*/
/*                                             <label class="col-sm-2 control-label" for="input-description{{ language.language_id }}">{{ entry_description }}</label>*/
/*                                             <div class="col-sm-10">*/
/*                                                 <textarea name="blog_description[{{ language.language_id }}][description]" placeholder="{{ entry_description }}" id="input-description{{ language.language_id }}" data-toggle="summernote" data-lang="{{ summernote }}" class="form-control">{{ blog_description[language.language_id] ? blog_description[language.language_id].description }}</textarea>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                         <div class="form-group">*/
/*                                             <label class="col-sm-2 control-label" for="input-description{{ language.language_id }}">{{ full_text }}</label>*/
/*                                             <div class="col-sm-10">*/
/*                                                 <textarea name="blog_description[{{ language.language_id }}][full_text]" placeholder="{{ full_text }}" id="input-description{{ language.language_id }}" data-toggle="summernote" data-lang="{{ summernote }}" class="form-control">{{ blog_description[language.language_id] ? blog_description[language.language_id].description }}</textarea>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                         <div class="form-group required">*/
/*                                             <label class="col-sm-2 control-label" for="input-meta-title{{ language.language_id }}">{{ entry_meta_title }}</label>*/
/*                                             <div class="col-sm-10">*/
/*                                                 <input type="text" name="category_description[{{ language.language_id }}][meta_title]" value="{{ blog_description[language.language_id] ? blog_description[language.language_id].meta_title }}" placeholder="{{ entry_meta_title }}" id="input-meta-title{{ language.language_id }}" class="form-control" />*/
/*                                                 {% if error_meta_title[language.language_id] %}*/
/*                                                     <div class="text-danger">{{ error_meta_title[language.language_id] }}</div>*/
/*                                                 {% endif %}*/
/*                                             </div>*/
/*                                         </div>*/
/*                                         <div class="form-group">*/
/*                                             <label class="col-sm-2 control-label" for="input-meta-description{{ language.language_id }}">{{ entry_meta_description }}</label>*/
/*                                             <div class="col-sm-10">*/
/*                                                 <textarea name="blog_description[{{ language.language_id }}][meta_description]" rows="5" placeholder="{{ entry_meta_description }}" id="input-meta-description{{ language.language_id }}" class="form-control">{{ blog_description[language.language_id] ? blog_description[language.language_id].meta_description }}</textarea>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                         <div class="form-group">*/
/*                                             <label class="col-sm-2 control-label" for="input-meta-keyword{{ language.language_id }}">{{ entry_meta_keyword }}</label>*/
/*                                             <div class="col-sm-10">*/
/*                                                 <textarea name="blog_description[{{ language.language_id }}][meta_keyword]" rows="5" placeholder="{{ entry_meta_keyword }}" id="input-meta-keyword{{ language.language_id }}" class="form-control">{{ blog_description[language.language_id] ? blog_description[language.language_id].meta_keyword }}</textarea>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 {% endfor %}*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="tab-pane" id="tab-data">*/
/*                             <div class="form-group">*/
/*                                 <label class="col-sm-2 control-label" for="input-parent">{{ entry_parent }}</label>*/
/*                                 <div class="col-sm-10">*/
/*                                     <input type="text" name="path" value="{{ path }}" placeholder="{{ entry_parent }}" id="input-parent" class="form-control" />*/
/*                                     <input type="hidden" name="parent_id" value="{{ parent_id }}" />*/
/*                                     {% if error_parent %}*/
/*                                         <div class="text-danger">{{ error_parent }}</div>*/
/*                                     {% endif %}*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="form-group">*/
/*                                 <label class="col-sm-2 control-label" for="input-filter"><span data-toggle="tooltip" title="{{ help_filter }}">{{ entry_filter }}</span></label>*/
/*                                 <div class="col-sm-10">*/
/*                                     <input type="text" name="filter" value="" placeholder="{{ entry_filter }}" id="input-filter" class="form-control" />*/
/*                                     <div id="category-filter" class="well well-sm" style="height: 150px; overflow: auto;">*/
/*                                         {% for blog_filter in blog_filters %}*/
/*                                             <div id="blog-filter{{ blog_filter.filter_id }}"><i class="fa fa-minus-circle"></i> {{ blog_filter.name }}*/
/*                                                 <input type="hidden" name="blog_filter[]" value="{{ blog_filter.filter_id }}" />*/
/*                                             </div>*/
/*                                         {% endfor %}*/
/*                                         {% if product_option.type == 'date' %}*/
/*                                             <div class="form-group">*/
/*                                                 <label class="col-sm-2 control-label" for="input-value{{ option_row }}">{{ entry_option_value }}</label>*/
/*                                                 <div class="col-sm-3">*/
/*                                                     <div class="input-group date">*/
/*                                                         <input type="text" name="product_option[{{ option_row }}][value]" value="{{ product_option.value }}" placeholder="{{ entry_option_value }}" data-date-format="YYYY-MM-DD" id="input-value{{ option_row }}" class="form-control"/> <span class="input-group-btn">*/
/*                             <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>*/
/*                             </span></div>*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                         {% endif %}*/
/*                                         {% if product_option.type == 'time' %}*/
/*                                             <div class="form-group">*/
/*                                                 <label class="col-sm-2 control-label" for="input-value{{ option_row }}">{{ entry_option_value }}</label>*/
/*                                                 <div class="col-sm-10">*/
/*                                                     <div class="input-group time">*/
/*                                                         <input type="text" name="product_option[{{ option_row }}][value]" value="{{ product_option.value }}" placeholder="{{ entry_option_value }}" data-date-format="HH:mm" id="input-value{{ option_row }}" class="form-control"/> <span class="input-group-btn">*/
/*                             <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*                             </span></div>*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                         {% endif %}*/
/*                                         {% if product_option.type == 'datetime' %}*/
/*                                             <div class="form-group">*/
/*                                                 <label class="col-sm-2 control-label" for="input-value{{ option_row }}">{{ entry_option_value }}</label>*/
/*                                                 <div class="col-sm-10">*/
/*                                                     <div class="input-group datetime">*/
/*                                                         <input type="text" name="product_option[{{ option_row }}][value]" value="{{ product_option.value }}" placeholder="{{ entry_option_value }}" data-date-format="YYYY-MM-DD HH:mm" id="input-value{{ option_row }}" class="form-control"/> <span class="input-group-btn">*/
/*                             <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*                             </span></div>*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                         {% endif %}*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="form-group">*/
/*                                 <label class="col-sm-2 control-label">{{ entry_store }}</label>*/
/*                                 <div class="col-sm-10">*/
/*                                     <div class="well well-sm" style="height: 150px; overflow: auto;">*/
/*                                         {% for store in stores %}*/
/*                                             <div class="checkbox">*/
/*                                                 <label>*/
/*                                                     {% if store.store_id in blog_store %}*/
/*                                                         <input type="checkbox" name="blog_store[]" value="{{ store.store_id }}" checked="checked" />*/
/*                                                         {{ store.name }}*/
/*                                                     {% else %}*/
/*                                                         <input type="checkbox" name="blog_store[]" value="{{ store.store_id }}" />*/
/*                                                         {{ store.name }}*/
/*                                                     {% endif %}*/
/*                                                 </label>*/
/*                                             </div>*/
/*                                         {% endfor %}*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="form-group">*/
/*                                 <label class="col-sm-2 control-label">{{ entry_image }}</label>*/
/*                                 <div class="col-sm-10"><a href="" id="thumb-image" data-toggle="image" class="img-thumbnail"><img src="{{ thumb }}" alt="" title="" data-placeholder="{{ placeholder }}" /></a>*/
/*                                     <input type="hidden" name="image" value="{{ image }}" id="input-image" />*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="form-group">*/
/*                                 <label class="col-sm-2 control-label" for="input-top"><span data-toggle="tooltip" title="{{ help_top }}">{{ entry_top }}</span></label>*/
/*                                 <div class="col-sm-10">*/
/*                                     <div class="checkbox">*/
/*                                         <label>*/
/*                                             {% if top %}*/
/*                                                 <input type="checkbox" name="top" value="1" checked="checked" id="input-top" />*/
/*                                             {% else %}*/
/*                                                 <input type="checkbox" name="top" value="1" id="input-top" />*/
/*                                             {% endif %}*/
/*                                             &nbsp; </label>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="form-group">*/
/*                                 <label class="col-sm-2 control-label" for="input-column"><span data-toggle="tooltip" title="{{ help_column }}">{{ entry_column }}</span></label>*/
/*                                 <div class="col-sm-10">*/
/*                                     <input type="text" name="column" value="{{ column }}" placeholder="{{ entry_column }}" id="input-column" class="form-control" />*/
/*                                 </div>*/
/*                             </div>*/
/* */
/*                         </div>*/
/*                         <div class="tab-pane" id="tab-seo">*/
/*                             <div class="alert alert-info"><i class="fa fa-info-circle"></i> {{ text_keyword }}</div>*/
/*                             <div class="table-responsive">*/
/*                                 <table class="table table-bordered table-hover">*/
/*                                     <thead>*/
/*                                     <tr>*/
/*                                         <td class="text-left">{{ entry_store }}</td>*/
/*                                         <td class="text-left">{{ entry_keyword }}</td>*/
/*                                     </tr>*/
/*                                     </thead>*/
/*                                     <tbody>*/
/*                                     {% for store in stores %}*/
/*                                         <tr>*/
/*                                             <td class="text-left">{{ store.name }}</td>*/
/*                                             <td class="text-left">{% for language in languages %}*/
/*                                                     <div class="input-group"><span class="input-group-addon"><img src="language/{{ language.code }}/{{ language.code }}.png" title="{{ language.name }}" /></span>*/
/*                                                         <input type="text" name="blog_seo_url[{{ store.store_id }}][{{ language.language_id }}]" value="{% if blog_seo_url[store.store_id][language.language_id] %}{{ blog_seo_url[store.store_id][language.language_id] }}{% endif %}" placeholder="{{ entry_keyword }}" class="form-control" />*/
/*                                                     </div>*/
/*                                                     {% if error_keyword[store.store_id][language.language_id] %}*/
/*                                                         <div class="text-danger">{{ error_keyword[store.store_id][language.language_id] }}</div>*/
/*                                                     {% endif %}*/
/*                                                 {% endfor %}</td>*/
/*                                         </tr>*/
/*                                     {% endfor %}*/
/*                                     </tbody>*/
/* */
/*                                 </table>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="tab-pane" id="tab-design">*/
/*                             <div class="table-responsive">*/
/*                                 <table class="table table-bordered table-hover">*/
/*                                     <thead>*/
/*                                     <tr>*/
/*                                         <td class="text-left">{{ entry_store }}</td>*/
/*                                         <td class="text-left">{{ entry_layout }}</td>*/
/*                                     </tr>*/
/*                                     </thead>*/
/*                                     <tbody>*/
/* */
/*                                     {% for store in stores %}*/
/*                                         <tr>*/
/*                                             <td class="text-left">{{ store.name }}</td>*/
/*                                             <td class="text-left"><select name="blog_layout[{{ store.store_id }}]" class="form-control">*/
/*                                                     <option value=""></option>*/
/*                                                     {% for layout in layouts %}*/
/*                                                         {% if blog_layout[store.store_id] and blog_layout[store.store_id] == layout.layout_id %}*/
/*                                                             <option value="{{ layout.layout_id }}" selected="selected">{{ layout.name }}</option>*/
/*                                                         {% else %}*/
/*                                                             <option value="{{ layout.layout_id }}">{{ layout.name }}</option>*/
/*                                                         {% endif %}*/
/*                                                     {% endfor %}*/
/*                                                 </select></td>*/
/*                                         </tr>*/
/*                                     {% endfor %}*/
/*                                     </tbody>*/
/*                                 </table>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </form>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <link href="view/javascript/codemirror/lib/codemirror.css" rel="stylesheet" />*/
/*     <link href="view/javascript/codemirror/theme/monokai.css" rel="stylesheet" />*/
/*     <script type="text/javascript" src="view/javascript/codemirror/lib/codemirror.js"></script>*/
/*     <script type="text/javascript" src="view/javascript/codemirror/lib/xml.js"></script>*/
/*     <script type="text/javascript" src="view/javascript/codemirror/lib/formatting.js"></script>*/
/* */
/*     <script type="text/javascript" src="view/javascript/summernote/summernote.js"></script>*/
/*     <link href="view/javascript/summernote/summernote.css" rel="stylesheet" />*/
/*     <script type="text/javascript" src="view/javascript/summernote/summernote-image-attributes.js"></script>*/
/*     <script type="text/javascript" src="view/javascript/summernote/opencart.js"></script>*/
/* */
/*     <script type="text/javascript"><!--*/
/*         $('input[name=\'path\']').autocomplete({*/
/*             'source': function(request, response) {*/
/*                 $.ajax({*/
/*                     url: 'index.php?route=blog/managment/autocomplete&user_token={{ user_token }}&filter_name=' +  encodeURIComponent(request),*/
/*                     dataType: 'json',*/
/*                     success: function(json) {*/
/*                         json.unshift({*/
/*                             category_id: 0,*/
/*                             name: '{{ text_none }}'*/
/*                         });*/
/* */
/*                         response($.map(json, function(item) {*/
/*                             return {*/
/*                                 label: item['name'],*/
/*                                 value: item['blog_id']*/
/*                             }*/
/*                         }));*/
/*                     }*/
/*                 });*/
/*             },*/
/*             'select': function(item) {*/
/*                 $('input[name=\'path\']').val(item['label']);*/
/*                 $('input[name=\'parent_id\']').val(item['value']);*/
/*             }*/
/*         });*/
/*         //--></script>*/
/*     <script type="text/javascript"><!--*/
/*         $('input[name=\'filter\']').autocomplete({*/
/*             'source': function(request, response) {*/
/*                 $.ajax({*/
/*                     url: 'index.php?route=blog/filter/autocomplete&user_token={{ user_token }}&filter_name=' +  encodeURIComponent(request),*/
/*                     dataType: 'json',*/
/*                     success: function(json) {*/
/*                         response($.map(json, function(item) {*/
/*                             return {*/
/*                                 label: item['name'],*/
/*                                 value: item['filter_id']*/
/*                             }*/
/*                         }));*/
/*                     }*/
/*                 });*/
/*             },*/
/*             'select': function(item) {*/
/*                 $('input[name=\'filter\']').val('');*/
/* */
/*                 $('#category-filter' + item['value']).remove();*/
/* */
/*                 $('#category-filter').append('<div id="category-filter' + item['value'] + '"><i class="fa fa-minus-circle"></i> ' + item['label'] + '<input type="hidden" name="category_filter[]" value="' + item['value'] + '" /></div>');*/
/*             }*/
/*         });*/
/* */
/*         $('#category-filter').delegate('.fa-minus-circle', 'click', function() {*/
/*             $(this).parent().remove();*/
/*         });*/
/*         //--></script>*/
/*     <script type="text/javascript"><!--*/
/*         $('#language a:first').tab('show');*/
/*         //--></script></div>*/
/* 'select': function(item) {*/
/* html = '<div class="tab-pane" id="tab-option' + option_row + '">';*/
/*     html += '	<input type="hidden" name="product_option[' + option_row + '][product_option_id]" value="" />';*/
/*     html += '	<input type="hidden" name="product_option[' + option_row + '][name]" value="' + item['label'] + '" />';*/
/*     html += '	<input type="hidden" name="product_option[' + option_row + '][option_id]" value="' + item['value'] + '" />';*/
/*     html += '	<input type="hidden" name="product_option[' + option_row + '][type]" value="' + item['type'] + '" />';*/
/* */
/* */
/* */
/* <script type="text/javascript"><!--*/
/*     var option_value_row = {{ option_value_row }};*/
/* */
/*     function addOptionValue(option_row) {*/
/*         html = '<tr id="option-value-row' + option_value_row + '">';*/
/*         html += '  <td class="text-left"><select name="product_option[' + option_row + '][product_option_value][' + option_value_row + '][option_value_id]" class="form-control">';*/
/*         html += $('#option-values' + option_row).html();*/
/*         html += '  </select><input type="hidden" name="product_option[' + option_row + '][product_option_value][' + option_value_row + '][product_option_value_id]" value="" /></td>';*/
/*         html += '  <td class="text-right"><input type="text" name="product_option[' + option_row + '][product_option_value][' + option_value_row + '][quantity]" value="" placeholder="{{ entry_quantity }}" class="form-control" /></td>';*/
/*         html += '  <td class="text-left"><select name="product_option[' + option_row + '][product_option_value][' + option_value_row + '][subtract]" class="form-control">';*/
/*         html += '    <option value="1">{{ text_yes }}</option>';*/
/*         html += '    <option value="0">{{ text_no }}</option>';*/
/*         html += '  </select></td>';*/
/*         html += '  <td class="text-right"><select name="product_option[' + option_row + '][product_option_value][' + option_value_row + '][price_prefix]" class="form-control">';*/
/*         html += '    <option value="+">+</option>';*/
/*         html += '    <option value="-">-</option>';*/
/*         html += '  </select>';*/
/*         html += '  <input type="text" name="product_option[' + option_row + '][product_option_value][' + option_value_row + '][price]" value="" placeholder="{{ entry_price }}" class="form-control" /></td>';*/
/*         html += '  <td class="text-right"><select name="product_option[' + option_row + '][product_option_value][' + option_value_row + '][points_prefix]" class="form-control">';*/
/*         html += '    <option value="+">+</option>';*/
/*         html += '    <option value="-">-</option>';*/
/*         html += '  </select>';*/
/*         html += '  <input type="text" name="product_option[' + option_row + '][product_option_value][' + option_value_row + '][points]" value="" placeholder="{{ entry_points }}" class="form-control" /></td>';*/
/*         html += '  <td class="text-right"><select name="product_option[' + option_row + '][product_option_value][' + option_value_row + '][weight_prefix]" class="form-control">';*/
/*         html += '    <option value="+">+</option>';*/
/*         html += '    <option value="-">-</option>';*/
/*         html += '  </select>';*/
/*         html += '  <input type="text" name="product_option[' + option_row + '][product_option_value][' + option_value_row + '][weight]" value="" placeholder="{{ entry_weight }}" class="form-control" /></td>';*/
/*         html += '  <td class="text-left"><button type="button" onclick="$(this).tooltip(\'destroy\');$(\'#option-value-row' + option_value_row + '\').remove();" data-toggle="tooltip" rel="tooltip" title="{{ button_remove }}" class="btn btn-danger"><i class="fa fa-minus-circle"></i></button></td>';*/
/*         html += '</tr>';*/
/* */
/*         $('#option-value' + option_row + ' tbody').append(html);*/
/*         $('[rel=tooltip]').tooltip();*/
/* */
/*         option_value_row++;*/
/*     }*/
/* */
/*     //--></script>*/
/* <script type="text/javascript"><!--*/
/*     var discount_row = {{ discount_row }};*/
/* */
/*     function addDiscount() {*/
/*         html = '<tr id="discount-row' + discount_row + '">';*/
/*         html += '  <td class="text-left"><select name="product_discount[' + discount_row + '][customer_group_id]" class="form-control">';*/
/*         {% for customer_group in customer_groups %}*/
/*         html += '    <option value="{{ customer_group.customer_group_id }}">{{ customer_group.name|escape('js') }}</option>';*/
/*         {% endfor %}*/
/*         html += '  </select></td>';*/
/*         html += '  <td class="text-right"><input type="text" name="product_discount[' + discount_row + '][quantity]" value="" placeholder="{{ entry_quantity }}" class="form-control" /></td>';*/
/*         html += '  <td class="text-right"><input type="text" name="product_discount[' + discount_row + '][priority]" value="" placeholder="{{ entry_priority }}" class="form-control" /></td>';*/
/*         html += '  <td class="text-right"><input type="text" name="product_discount[' + discount_row + '][price]" value="" placeholder="{{ entry_price }}" class="form-control" /></td>';*/
/*         html += '  <td class="text-left" style="width: 20%;"><div class="input-group date"><input type="text" name="product_discount[' + discount_row + '][date_start]" value="" placeholder="{{ entry_date_start }}" data-date-format="YYYY-MM-DD" class="form-control" /><span class="input-group-btn"><button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button></span></div></td>';*/
/*         html += '  <td class="text-left" style="width: 20%;"><div class="input-group date"><input type="text" name="product_discount[' + discount_row + '][date_end]" value="" placeholder="{{ entry_date_end }}" data-date-format="YYYY-MM-DD" class="form-control" /><span class="input-group-btn"><button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button></span></div></td>';*/
/*         html += '  <td class="text-left"><button type="button" onclick="$(\'#discount-row' + discount_row + '\').remove();" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger"><i class="fa fa-minus-circle"></i></button></td>';*/
/*         html += '</tr>';*/
/* */
/*         $('#discount tbody').append(html);*/
/* */
/*         $('.date').datetimepicker({*/
/*             pickTime: false*/
/*         });*/
/* */
/*         discount_row++;*/
/*     }*/
/* */
/*     //--></script>*/
/* <script type="text/javascript"><!--*/
/*     var special_row = {{ special_row }};*/
/* */
/*     function addSpecial() {*/
/*         html = '<tr id="special-row' + special_row + '">';*/
/*         html += '  <td class="text-left"><select name="product_special[' + special_row + '][customer_group_id]" class="form-control">';*/
/*         {% for customer_group in customer_groups %}*/
/*         html += '      <option value="{{ customer_group.customer_group_id }}">{{ customer_group.name|escape('js') }}</option>';*/
/*         {% endfor %}*/
/*         html += '  </select></td>';*/
/*         html += '  <td class="text-right"><input type="text" name="product_special[' + special_row + '][priority]" value="" placeholder="{{ entry_priority }}" class="form-control" /></td>';*/
/*         html += '  <td class="text-right"><input type="text" name="product_special[' + special_row + '][price]" value="" placeholder="{{ entry_price }}" class="form-control" /></td>';*/
/*         html += '  <td class="text-left" style="width: 20%;"><div class="input-group date"><input type="text" name="product_special[' + special_row + '][date_start]" value="" placeholder="{{ entry_date_start }}" data-date-format="YYYY-MM-DD" class="form-control" /><span class="input-group-btn"><button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button></span></div></td>';*/
/*         html += '  <td class="text-left" style="width: 20%;"><div class="input-group date"><input type="text" name="product_special[' + special_row + '][date_end]" value="" placeholder="{{ entry_date_end }}" data-date-format="YYYY-MM-DD" class="form-control" /><span class="input-group-btn"><button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button></span></div></td>';*/
/*         html += '  <td class="text-left"><button type="button" onclick="$(\'#special-row' + special_row + '\').remove();" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger"><i class="fa fa-minus-circle"></i></button></td>';*/
/*         html += '</tr>';*/
/* */
/*         $('#special tbody').append(html);*/
/* */
/*         $('.date').datetimepicker({*/
/*             language: '{{ datepicker }}',*/
/*             pickTime: false*/
/*         });*/
/* */
/*         special_row++;*/
/*     }*/
/* */
/*     //--></script>*/
/* <script type="text/javascript"><!--*/
/*     var image_row = {{ image_row }};*/
/* */
/*     function addImage() {*/
/*         html = '<tr id="image-row' + image_row + '">';*/
/*         html += '  <td class="text-left"><a href="" id="thumb-image' + image_row + '"data-toggle="image" class="img-thumbnail"><img src="{{ placeholder }}" alt="" title="" data-placeholder="{{ placeholder }}" /></a><input type="hidden" name="product_image[' + image_row + '][image]" value="" id="input-image' + image_row + '" /></td>';*/
/*         html += '  <td class="text-right"><input type="text" name="product_image[' + image_row + '][sort_order]" value="" placeholder="{{ entry_sort_order }}" class="form-control" /></td>';*/
/*         html += '  <td class="text-left"><button type="button" onclick="$(\'#image-row' + image_row + '\').remove();" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger"><i class="fa fa-minus-circle"></i></button></td>';*/
/*         html += '</tr>';*/
/* */
/*         $('#images tbody').append(html);*/
/* */
/*         image_row++;*/
/*     }*/
/* */
/*     //--></script>*/
/* <script type="text/javascript"><!--*/
/*     var recurring_row = {{ recurring_row }};*/
/* */
/*     function addRecurring() {*/
/*         html = '<tr id="recurring-row' + recurring_row + '">';*/
/*         html += '  <td class="left">';*/
/*         html += '    <select name="product_recurring[' + recurring_row + '][recurring_id]" class="form-control">>';*/
/*         {% for recurring in recurrings %}*/
/*         html += '      <option value="{{ recurring.recurring_id }}">{{ recurring.name }}</option>';*/
/*         {% endfor %}*/
/*         html += '    </select>';*/
/*         html += '  </td>';*/
/*         html += '  <td class="left">';*/
/*         html += '    <select name="product_recurring[' + recurring_row + '][customer_group_id]" class="form-control">>';*/
/*         {% for customer_group in customer_groups %}*/
/*         html += '      <option value="{{ customer_group.customer_group_id }}">{{ customer_group.name }}</option>';*/
/*         {% endfor %}*/
/*         html += '    <select>';*/
/*         html += '  </td>';*/
/*         html += '  <td class="left">';*/
/*         html += '    <a onclick="$(\'#recurring-row' + recurring_row + '\').remove()" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger"><i class="fa fa-minus-circle"></i></a>';*/
/*         html += '  </td>';*/
/*         html += '</tr>';*/
/* */
/*         $('#tab-recurring table tbody').append(html);*/
/* */
/*         recurring_row++;*/
/*     }*/
/* */
/*     //--></script>*/
/* <script type="text/javascript"><!--*/
/*     $('.date').datetimepicker({*/
/*         language: '{{ datepicker }}',*/
/*         pickTime: false*/
/*     });*/
/* */
/*     $('.time').datetimepicker({*/
/*         language: '{{ datepicker }}',*/
/*         pickDate: false*/
/*     });*/
/* */
/*     $('.datetime').datetimepicker({*/
/*         language: '{{ datepicker }}',*/
/*         pickDate: true,*/
/*         pickTime: true*/
/*     });*/
/*     //--></script>*/
/* <script type="text/javascript"><!--*/
/*     $('#language a:first').tab('show');*/
/*     $('#option a:first').tab('show');*/
/*     //--></script>*/
/* </div>*/
/* {{ footer }}*/
/* */
