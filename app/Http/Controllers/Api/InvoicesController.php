<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Invoices;
use Illuminate\Http\Request;

class InvoicesController extends Controller
{
    /**
     * @return mixed
     */
    public function index()
    {
        $invoices = Invoices::get();
        return $this->ApiResponse($invoices,'Data retrieved successfully',200);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function show($id)
    {
        $invoice = Invoices::find($id);
        if ($invoice)
        {
            return $this->ApiResponse($invoice,'Data retrieved successfully',200);
        }
            return $this->ApiResponse(null,'Data not retrieved successfully',401);

    }

}
