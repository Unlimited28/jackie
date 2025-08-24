<?php

namespace App\Controllers;

use App\Core\Controller;

class AmbassadorController extends Controller
{
    public function dashboard()
    {
        $this->render('ambassador.dashboard', [
            'title' => 'Ambassador Dashboard',
            'role' => 'ambassador',
            'active' => 'dashboard',
        ]);
    }

    public function exams()
    {
        $this->render('ambassador.exams', [
            'title' => 'My Exams',
            'role' => 'ambassador',
            'active' => 'my_exams',
        ]);
    }

    public function examTake()
    {
        $this->render('ambassador.exam-take', [
            'title' => 'Live Exam',
            'role' => 'ambassador',
            'active' => 'my_exams',
        ]);
    }

    public function results()
    {
        $this->render('ambassador.results', [
            'title' => 'My Results',
            'role' => 'ambassador',
            'active' => 'results',
        ]);
    }

    public function notifications()
    {
        $this->render('ambassador.notifications', [
            'title' => 'Notifications',
            'role' => 'ambassador',
            'active' => 'notifications',
        ]);
    }

    public function profile()
    {
        $this->render('ambassador.profile', [
            'title' => 'Profile Settings',
            'role' => 'ambassador',
            'active' => 'profile',
        ]);
    }

    public function support()
    {
        $this->render('ambassador.support', [
            'title' => 'Support',
            'role' => 'ambassador',
            'active' => 'support',
        ]);
    }
}
