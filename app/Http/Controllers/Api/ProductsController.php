<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    use ApiResponseTrait;

    public function index()
    {
        $products = Products::get();
        return $this->ApiResponse($products,'Data retrieved successfully',200);

    }
}
