<?php

use SlimBlog\Controller\BlogController;

$app->get('/', function () use ($app) {
    (new BlogController($app))->defaultAction();
});

$app->get('/posts/:id', function ($id) use ($app) {
    (new BlogController($app))->getBlogPostAction($id);
});
