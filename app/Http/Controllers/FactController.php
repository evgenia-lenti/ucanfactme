<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fact;

class FactController extends Controller
{
    public function index()
    {
        $facts = Fact::all();

        return view('facts.index', compact('facts'));
    }

    public function show($id)
    {
        $fact = Fact::findOrFail($id);

        return view('facts.show', compact('fact'));

    }
}

