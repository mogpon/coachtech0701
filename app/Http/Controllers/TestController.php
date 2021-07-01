<?php

namespace App\Http\Controllers;

use App\Models\Test;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(Request $request)
    {
        return view ('test.index');
    }
    public function post(Request $request)
    {
        $this->validate($request, Test::$rules);
        $test = new Test;
        $form = $request->all();
        unset($form['_token_']);
        $test->timestamps = false;
        $test->fill($form)->save();
        return view ('test.thanks');
    }
}
