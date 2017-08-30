<?php
/**
 * Home Controller
 */

class HomeController extends BaseController
{
    public function home()
    {
        $article = Article::first();
        $this->view = View::make('home')->with('article',$article);
    }
}