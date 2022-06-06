<?php

namespace Project\Controllers;

use Core\Controller;

class AhuyenniyController extends Controller
{
    public function first()
    {
        $this->title = 'AhuyenniyController !!!!';
        $postVariables = $_POST;

//        if (empty($postVariables['title'])) {
            return $this->render('error/notFound');
//        }
    }
}