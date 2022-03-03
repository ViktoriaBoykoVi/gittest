<?php

namespace application\controllers;

use application\core\Controller;
use application\lib\Pagination;
use application\models\Admin;


class MainController extends Controller
{

    public function indexAction()
    {
        $pagination = new Pagination();
        $vars = [
            'pagination' => $pagination->getData(),
            'list' => $this->model->postsList($this->route)
        ];
        $this->view->render('Главная страница', $vars);
    }

    public function aboutAction()
    {
        $this->view->render('Обо мне');
    }

    public function portfolioAction()
    {
        $this->view->render('My portfolio');
    }

    public function contactAction()
    {
        if (!empty($_POST)) {
            if (!$this->model->contactValidate($_POST)) {
                $this->view->message('error', $this->model->error);
            }
            mail('viktoria2626boyko@outlook.com', 'Сообщение из блога', $_POST['name'] . '|' . $_POST['email'] . '|' . $_POST['text']);
            $this->view->message('success', 'Сообщение отправлено Администратору');
        }
        $this->view->render('Контакты');
    }

    public function postAction() {
        $adminModel = new Admin;
        if (!$adminModel->isPostExists($this->route['id'])) {
            //$this->view->errorCode(404);
        }
        $vars = [
            'data' => $adminModel->postData($this->route['id'])[0],
        ];
        $this->view->render('Пост', $vars);

    }
}
