<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function dashboard()
    {
        return view('guest.dashboard.index');
    }

    public function dashboardLocale($locale)
    {
        App::setLocale($locale);
        return view('guest.dashboard.index');
    }

    public function news()
    {
        return view('guest.news.index');
    }
    public function newsDetail()
    {
        return view('guest.news.show');
    }

    public function dashboardAdmin()
    {
        return view('admin.partials.main');
    }
}

