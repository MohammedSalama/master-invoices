<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Sections;
use Illuminate\Http\Request;

class SectionsController extends Controller
{
    use ApiResponseTrait;

    public function index()
    {
        $sections = Sections::get();
        return $this->ApiResponse($sections,'Data retrieved successfully',200);
    }
}
