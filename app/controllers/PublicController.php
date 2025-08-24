<?php

namespace App\Controllers;

use App\Core\Controller;

class PublicController extends Controller
{
    /**
     * Show the home page.
     */
    public function home()
    {
        $this->render('public.index');
    }

    /**
     * Show the login page.
     */
    public function showLogin()
    {
        $this->render('public.login');
    }

    /**
     * Show the register page.
     */
    public function showRegister()
    {
        $this->render('public.register');
    }
}
