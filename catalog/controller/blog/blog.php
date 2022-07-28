<?php
class ControllerBlogBlog extends Controller {
    private $error = array();

    public function index() {
        $this->load->language('blog/blog');

        $this->document->setTitle($this->language->get('heading_title'));

        if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
            $this->load->model('blog/blog');
            $data['subject'] = sprintf('New guestbook entry submitted by %s', $this->request->post['guest_name']);
            $data['message'] = $this->request->post['guest_message'];
            $this->model_guestbook_guestbook->processGuestbookEntry($data);
            $this->session->data['success'] = $this->language->get('text_success');
            $this->response->redirect($this->url->link('blog/blog', '', true));
        }

        $data['success'] = '';
        if (isset($this->session->data['success'])) {
            $data['success'] = $this->session->data['success'];
            unset($this->session->data['success']);
        }

        $data['breadcrumbs'] = array();

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('text_home'),
            'href' => $this->url->link('common/home')
        );

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('heading_title'),
            'href' => $this->url->link('blog/blog', '', true)
        );

        $data['heading_title'] = $this->language->get('heading_title');
        $data['entry_guest_name'] = $this->language->get('entry_guest_name');
        $data['entry_guest_message'] = $this->language->get('entry_guest_message');
        $data['entry_submit'] = $this->language->get('entry_submit');

        if (isset($this->error['guest_name'])) {
            $data['error_guest_name'] = $this->error['guest_name'];
        } else {
            $data['error_guest_name'] = '';
        }

        if (isset($this->error['guest_message'])) {
            $data['error_guest_message'] = $this->error['guest_message'];
        } else {
            $data['error_guest_message'] = '';
        }

        $data['action'] = $this->url->link('blog/blog', '', true);

        if (isset($this->request->post['guest_name'])) {
            $data['guest_name'] = $this->request->post['guest_name'];
        } else {
            $data['guest_name'] = '';
        }

        if (isset($this->request->post['guest_message'])) {
            $data['guest_message'] = $this->request->post['guest_message'];
        } else {
            $data['guest_message'] = '';
        }

        $data['column_left'] = $this->load->controller('common/column_left');
        $data['column_right'] = $this->load->controller('common/column_right');
        $data['content_top'] = $this->load->controller('common/content_top');
        $data['content_bottom'] = $this->load->controller('common/content_bottom');
        $data['footer'] = $this->load->controller('common/footer');
        $data['header'] = $this->load->controller('common/header');

        $this->response->setOutput($this->load->view('blog/blog', $data));
    }

    protected function validate() {
        if (utf8_strlen(trim($this->request->post['guest_name'])) < 1) {
            $this->error['guest_name'] = $this->language->get('error_guest_name');
        }

        if (utf8_strlen(trim($this->request->post['guest_message'])) < 1) {
            $this->error['guest_message'] = $this->language->get('error_guest_message');
        }

        return !$this->error;
    }
}
