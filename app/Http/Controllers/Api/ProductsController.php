<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    use ApiResponseTrait;

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\Response
     */
    public function index()
    {
        $products = Products::get();
        return $this->ApiResponse($products,'Data retrieved successfully',200);
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Products::find($id);
        if ($product)
        {
            return $this->ApiResponse($product,'Data retrieved successfully',200);
        }
            return $this->ApiResponse(null,'Data not retrieved successfully',401);

    }
}
