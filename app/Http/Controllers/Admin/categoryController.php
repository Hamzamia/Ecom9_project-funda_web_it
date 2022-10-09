<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class categoryController extends Controller
{
    //
    public function index()
    {
        return view('admin.category.index');
    }
    public function create(){
        return view('admin.category.addcategory');
    }
}