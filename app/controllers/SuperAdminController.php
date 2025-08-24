<?php

namespace App\Controllers;

use App\Core\Controller;

class SuperAdminController extends Controller
{
    public function dashboard()
    {
        $this->render('superadmin.dashboard', ['title' => 'Super Admin Dashboard', 'role' => 'super_admin', 'active' => 'dashboard']);
    }

    public function users()
    {
        $this->render('superadmin.users', ['title' => 'User Management', 'role' => 'super_admin', 'active' => 'users']);
    }

    public function exams()
    {
        $this->render('superadmin.exams', ['title' => 'Exam Management', 'role' => 'super_admin', 'active' => 'exams']);
    }

    public function questions()
    {
        $this->render('superadmin.questions', ['title' => 'Exam Questions', 'role' => 'super_admin', 'active' => 'questions']);
    }

    public function results()
    {
        $this->render('superadmin.results', ['title' => 'Results Publishing', 'role' => 'super_admin', 'active' => 'results']);
    }

    public function financeLedger()
    {
        $this->render('superadmin.finance-ledger', ['title' => 'Finance Ledger', 'role' => 'super_admin', 'active' => 'finance']);
    }

    public function blog()
    {
        $this->render('superadmin.blog', ['title' => 'Blog Management', 'role' => 'super_admin', 'active' => 'blog']);
    }

    public function gallery()
    {
        $this->render('superadmin.gallery', ['title' => 'Gallery Management', 'role' => 'super_admin', 'active' => 'gallery']);
    }

    public function notifications()
    {
        $this->render('superadmin.notifications', ['title' => 'Notification Management', 'role' => 'super_admin', 'active' => 'notifications']);
    }

    public function settings()
    {
        $this->render('superadmin.settings', ['title' => 'System Settings', 'role' => 'super_admin', 'active' => 'settings']);
    }

    public function profile()
    {
        $this->render('superadmin.profile', ['title' => 'Profile Settings', 'role' => 'super_admin', 'active' => 'profile']);
    }
}
