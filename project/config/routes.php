<?php
	use \Core\Route;
	
	return [
        new Route('/posts/', 'post', 'index'),
        new Route('/posts/store/', 'post', 'store'),
        new Route('/posts/create/', 'post', 'create'),
        new Route('/posts/delete/:id', 'post', 'delete'),
        new Route('/posts/edit/:id', 'post', 'edit'),
        new Route('/posts/update/', 'post', 'update'),
        new Route('/posts/:id', 'post', 'show'),

    ];

