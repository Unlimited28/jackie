<?php

namespace App\Controllers;

use App\Core\Controller;

class PresidentController extends Controller
{
    public function dashboard()
    {
        $this->render('president.dashboard', [
            'title' => 'President Dashboard',
            'role' => 'president',
            'active' => 'dashboard',
        ]);
    }

    public function ambassadors()
    {
        $this->render('president.ambassadors', [
            'title' => 'Manage Ambassadors',
            'role' => 'president',
            'active' => 'ambassadors',
        ]);
    }

    public function examApprovals()
    {
        $this->render('president.exam-approvals', [
            'title' => 'Exam Approvals',
            'role' => 'president',
            'active' => 'exam_approvals',
        ]);
    }

    public function campRegistration()
    {
        $this->render('president.camp-registration', [
            'title' => 'Camp Registrations',
            'role' => 'president',
            'active' => 'camp_registration',
        ]);
    }

    public function finance()
    {
        $this->render('president.finance', [
            'title' => 'Upload Payments',
            'role' => 'president',
            'active' => 'finance',
        ]);
    }

    public function notifications()
    {
        $this->render('president.notifications', [
            'title' => 'Notifications',
            'role' => 'president',
            'active' => 'notifications',
        ]);
    }

    public function profile()
    {
        $this->render('president.profile', [
            'title' => 'Profile Settings',
            'role' => 'president',
            'active' => 'profile',
        ]);
    }
}
