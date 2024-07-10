<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Menu;

use function Termwind\render;

class MenuController extends Controller
{
    public function index()
    {
        // $data['menus'] = Menu::get();
        $data['categories'] = Category::with('menus')->get();
        return view('menu.index', $data);
    }

    public function show(Request $request, int $id)
    {
        $data['menu'] = Menu::find($id);
        // dd($data);
        return view('menu.show', $data);
    }
}
