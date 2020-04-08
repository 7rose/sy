<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * 首页
     *
     */
    public function index()
    {
        return view('home');
    }

    /**
     * 新闻
     *
     */
    public function news()
    {
        return view('news');
    }

    /**
     * 新闻
     *
     */
    public function cash()
    {
        return view('cash');
    }

    /**
     * 新闻
     *
     */
    public function income()
    {
        return view('income');
    }

}
