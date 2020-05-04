<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tag;


class TagController extends Controller
{
    public function index()
    {
        $tags = Tag::all();

        return view('tags.index', compact('tags'));
    }
}
