<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;

class HomeController extends Controller
{
    public function index()
    {
        $data['menus'] = Menu::get();
        return view('index', $data);
    }
}
