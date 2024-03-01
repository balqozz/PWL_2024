<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    //article
    public function index($id) {
        return 'Article Page with ID '.$id;
    }
}

