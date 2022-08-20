<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use stdClass;

class HomeController extends Controller
{
    public function index()
    {
        $viewData = new stdClass();
        $viewData->title = "Home Page - Online Store";

        return view('index')->with('viewData', $viewData);
    }
    public function about()
    {
        $viewData = new stdClass();
        $viewData->title = "About us - Online Store";
        $viewData->subtitle = "About us";
        $viewData->description = "This is an about page ...";
        $viewData->author = "Developed by: Andrécio Bezerra";

        return view('about')->with("viewData", $viewData);
    }
}
