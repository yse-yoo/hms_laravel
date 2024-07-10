<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;

use function Termwind\render;

class MenuController extends Controller
{
    public function index()
    {
        $data['menus'] = Menu::get();
        return view('menu.index', $data);
    }
}
