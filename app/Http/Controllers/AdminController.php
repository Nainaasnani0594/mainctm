<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class AdminController extends Controller
{
    public function dashboard()
    {
        return Inertia::render('Admin/Dashboard');
    }

    public function projects()
    {
        return Inertia::render('Admin/Projects');
    }

    public function createProject()
    {
        return Inertia::render('Admin/CreateProject');
    }

    public function overview()
    {
        return Inertia::render('Admin/Overview');
    }
}
