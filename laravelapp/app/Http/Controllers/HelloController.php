<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\HelloRequest;
use Validator;
use Illuminate\Support\Facades\DB;
use App\Person;
use Illuminate\Support\Facades\Auth;

class HelloController extends Controller
{

    public function index(Request $request)
    {
        return view('hello.index');
    }

    public function show(Request $request)
    {
        return view('hello.show');
    }


    public function post(Request $request)
    {
        return view('hello.index', ['items' => $items]);
    }

    public function add(Request $request)
    {
        return view('hello.add');
    }
    public function create(Request $request)
    {
        return redirect('/hello');
    }

    public function edit(Request $request)
    {
        return view('hello.edit');
    }
    public function update(Request $request)
    {
        return redirect('/hello');
    }

    public function del(Request $request)
    {
        return view('hello.del');
    }
    public function remove(Request $request)
    {
        return redirect('/hello');
    }

    public function rest(Request $request)
    {
        return view('hello.rest');
    }

    public function ses_get(Request $request)
    {
        return view('hello.session');
    }
    public function ses_put(Request $request)
    {
        return redirect('hello/session');
    }

    public function getAuth(Request $request)
    {
        return view('hello.auth');
    }
    public function postAuth(Request $request)
    {
        return view('hello.auth');
    }
    
}
