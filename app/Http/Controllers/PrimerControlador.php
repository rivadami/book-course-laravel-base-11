<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrimerControlador extends Controller
{
    function index(){
        $posts = ['post1', 'post2'];
        //return view('contact', ['posts' => $posts]);
        return view('contact', compact('posts'));
    }

    function otro($post = 99, $otro = 99){
        echo $post;
        echo $otro;
    }
}
 