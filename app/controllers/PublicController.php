<?php

namespace App\Controllers;

use App\Core\Controller;

class PublicController extends Controller
{
    public function home()
    {
        $this->render('public.index');
    }

    public function about()
    {
        $this->render('public.about');
    }

    public function blog()
    {
        $this->render('public.blog');
    }

    public function blogPost()
    {
        $this->render('public.blog-post');
    }

    public function gallery()
    {
        $this->render('public.gallery');
    }

    public function contact()
    {
        $this->render('public.contact');
    }

    public function support()
    {
        $this->render('public.support');
    }

    public function showLogin()
    {
        $this->render('public.login');
    }

    public function showRegister()
    {
        $this->render('public.register');
    }
}
