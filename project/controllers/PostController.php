<?php

namespace Project\Controllers;

use \Core\Controller;
use Project\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $this->title = 'Все посты';
        $postModel = new Post;
        $posts = $postModel->getAll();
        return $this->render('posts/index', [
            'posts' => $posts
        ]);
    }

    public function show($params)
    {
        $this->title = 'Один пост';
        $postModel = new Post;
        $post = $postModel->getById($params['id']);
        return $this->render('posts/view', [
            'post' => $post
        ]);
    }

    public function create()
    {
        $this->title = 'Создать пост';
        // невъебацца логика
        // 1. Отправить создателю блога сообщение на телефон во все мессенджеры

        return $this->render('posts/create');
    }

    public function store()
    {
        $this->title = 'insert';
        $postModel = new Post;
        $posts = $postModel->insert();
        header('Location: http://test.od/posts/');
    }

    public function delete()
    {
        $this->title = 'delete';
        $postModel = new Post;
        $posts = $postModel->delete();
        header('Location: http://test.od/posts/');
    }

    public function edit($params)
        {
    $this->title = 'Один пост';
    $postModel = new Post;
    $post = $postModel->getById($params['id']);
    return $this->render('posts/edit', [
        'post' => $post
    ]);
        }

    public function update()
    {
        $this->title = 'update';
        $postModel = new Post;
        $posts = $postModel->update();
        header('Location: http://test.od/posts/');
    }

}