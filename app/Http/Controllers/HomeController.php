<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Facade\ParserService;

class HomeController extends Controller
{
    public function index(){

        $parserData = ParserService::parser();
        return view('welcome', ['parserData' => $parserData,]);

    }
}
