<?php

namespace App\Http\Controllers;

use App\Http\Requests\ExampleRequest;
use App\Models\Example;
use Exception;

class MainController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function store(ExampleRequest $request)
    {
        $example = Example::create($request->validated());

        try {
            $request->has('image') ? $example->image = 'images/' . $example->path->store('example', 'images') : null;
            $example->save();
        } catch (Exception $e) {
            $example->delete();
        }

        return response()->json([
            'success' => !isset($e) ? 'Data saved' : '',
            '$error' => $e ?? ''
        ]);
    }
}
