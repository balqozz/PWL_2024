<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class PageController extends Controller {
    //index
    public function index() {
        return 'Welcome';
    }

    //about
    public function about() {
        return 'Maulia Balqis Ansya Aulia <br> 2241720246';
    }

    //articles
    public function articles($id = null) {
        return 'Article Page with ID '.$id;
    }
}
