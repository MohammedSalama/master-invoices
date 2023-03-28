<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Sections;
use Illuminate\Http\Request;

class SectionsController extends Controller
{
    public function index()
    {
        $sections = Sections::get();
        $msg = ["OK"];
        return response($sections,200,$msg);
    }
}
