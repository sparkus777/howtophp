<?php
	use \Core\Route;
	
	return [
		new Route('/hello/', 'hello', 'index'), // роут для приветственной страницы, можно удалить
        new Route('/ebat-kopat/', 'ahuyenniy', 'first'),
        new Route('/posts/', 'post', 'index'),
        new Route('/posts/store/', 'post', 'store'),
        new Route('/posts/create/', 'post', 'create'),
        new Route('/posts/delete/:id', 'post', 'delete'),
        new Route('/posts/:id', 'post', 'show'),

    ];

