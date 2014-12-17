<?php

namespace SlimBlog\Controller;

use \Slim\Slim;

abstract class Controller
{
    /**
     * @var \Slim\Slim
     */
    protected $app;

    /**
     * @param Slim $app
     */
    public function __construct(Slim $app)
    {
        $this->app = $app;
    }

    /**
     * Renders a template, if there is no .php extenstion it will be
     * @param string $name Template to render
     * @param array $data
     * @param null $status
     */
    protected function render($name, $data = [], $status = null)
    {
        $this->app->render($name, $data, $status);
    }
}