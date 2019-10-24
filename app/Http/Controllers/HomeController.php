<?php

namespace App\Http\Controllers;

use App\Models\PostModel;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {

        $listPost = PostModel::all();

        dd($listPost);

    }
}
