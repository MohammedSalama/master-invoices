<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Sections;
use Illuminate\Http\Request;

class SectionsController extends Controller
{
    use ApiResponseTrait;

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\Response
     */
    public function index()
    {
        $sections = Sections::get();
        return $this->ApiResponse($sections,'Data retrieved successfully',200);
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\Response
     */
    public function show($id)
    {
        $section = Sections::find($id);
        if ($section)
        {
            return $this->ApiResponse($section,'Data retrieved successfully',200);
        }
        return $this->ApiResponse(null,'Data not retrieved successfully',401);

    }
}
