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

        $this->mail = Mail::to(['241439344@qq.com','w2121801@gmail.com'])
                            ->from('wgz <postmaster@postmail.wuguozhang.top>')
                            ->title('this is title')
                            ->content('<h1>hello</h1>');
    }
}