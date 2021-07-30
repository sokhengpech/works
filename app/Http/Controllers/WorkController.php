<?php

namespace App\Http\Controllers;

use App\Models\Work;
use Illuminate\Http\Request;

class WorkController extends Controller
{
    public function index()
    {
        $works = Work::all();
        return view('works.index', compact('works'));
    }

    public function create()
    {
        return view('works.create');
    }


    public function store(Request $request)
    {
        Work::create([
            'author' =>  $request->get('author'),
            'title' => $request->get('title'),
            'text' =>  $request->get('text')
        ]);

        return redirect('/works');
    }

    public function show()
    {
        return view('works.show');
    }
}