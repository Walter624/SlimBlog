<?php

namespace SlimBlog\View;

use Slim\View;
use Twig_Environment;

class Twig extends View
{
    /**
     * @param Twig_Environment $twig
     */
    public function __construct(Twig_Environment $twig)
    {
        parent::__construct();
        $this->twig = $twig;
    }

    /**
     * @param string $template
     * @param array $data
     * @return string
     */
    public function render($template, $data = null)
    {
        if(!$this->isLoaded()) {
            $this->twig->setLoader(new \Twig_Loader_Filesystem($this->templatesDirectory));
        }

        return $this->twig->loadTemplate($template)->render($this->data->all());
    }

    /**
     * @return bool
     */
    private function isLoaded()
    {
        try {
            $this->twig->getLoader();
            return true;
        } catch (\LogicException $e) {
            return false;
        }
    }
}
