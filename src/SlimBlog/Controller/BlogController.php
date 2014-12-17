<?php

namespace SlimBlog\Controller;

use SlimBlog\Entity\Blog\PostManager;

class BlogController extends Controller
{
    public function defaultAction()
    {
        $postManager = new PostManager($this->app->container->get('db'));
        $this->app->render('default.html.twig', ['posts' => $postManager->fetchByLatest()]);
    }

    /**
     * @param in $id
     */
    public function getBlogPostAction($id)
    {
        $postManager = new PostManager($this->app->container->get('db'));
        $this->app->render('default.html.twig', ['posts' => $postManager->fetchById($id)]);
    }
}