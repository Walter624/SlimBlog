<?php

use SlimBlog\View\Twig;

return [
    'view' => new Twig(new \Twig_Environment()),
    'templates.path' => PROJECT_ROOT . '/src/SlimBlog/Resources/views',
    'db.name' => 'slimblog',
    'db.user' => 'root',
    'db.password' => 'root',
    'db.host' => 'localhost',
    'db.port' => '3306',
    'db.driver' => 'mysql'
];