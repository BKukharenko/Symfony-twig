<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{
    /**
     * @Route("/blog", name="blog")
     */
    public function index()
    {

      $posts_array[] = array(
        'id'=> 1,
        'title' => 'Title 1',
        'body' => 'Content of the post',
        'post_date' => date("m.d.y")
      );

      $posts_array[] = array(
        'id'=> 1,
        'title' => 'Title 2',
        'body' => 'Content of the post',
        'post_date' => date("m.d.y")
      );

      $posts_array[] = array(
        'id'=> 1,
        'title' => 'Title 3',
        'body' => 'Content of the post',
        'post_date' => date("m.d.y")
      );
        return $this->render('blog/blog.html.twig', [
          'pageTitle' => 'Blog Page',
          'pageMessage' => 'Welcome to',
          'copyrightText' => 'Blog Copyright, ',
          'authorName' => 'Bohdan Kukharenko',
          'ghText' => 'Advanced PHP GH',
          'posts' => $posts_array
        ]);
    }
}
