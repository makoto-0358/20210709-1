<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\HelloRequest;

class HelloController extends Controller
{
    public function food()
    {
        return view('hello.food');
    }
    public function id(Request $request)
    {
        $item =[
            'txt' => $request
        ];
            return view('hello.id',$item);
    }
    public function detail(Request $request)
    {
        $item =[
            'txt' => $request
        ];
            return view('hello.id',$item);
    }
}
