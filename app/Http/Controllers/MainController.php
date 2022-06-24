<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ExampleRequest;
use App\Models\Example;
use Illuminate\Support\Facades\Storage;

class MainController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function store(ExampleRequest $request)
    {
        $example = Example::create($request->validated());

        $example->image = optional('images/' . $request->image)->store('example', 'images');
        $example->save();

        return response()->json([
            "success" => $example->image == null ? 'Only text saved' : 'Image and text saved'
        ]);
    }
}
