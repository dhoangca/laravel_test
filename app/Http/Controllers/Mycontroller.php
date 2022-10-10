<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Mycontroller extends Controller
{
    public function hoangca()
    {
        return view('hello-world');
    }
    public function getData()
    {
        $data['user'] = ['hoang','minh','linh'];
        return view('hello-world',$data);
    }
    public function postForm(Request $request)
    {
        echo $request -> username;
        echo '<br>';
        echo $request -> password;
    }
    public function getForm()
    {
        return view('postForm');
    }
}
