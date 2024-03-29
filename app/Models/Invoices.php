<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoices extends Model
{
    use HasFactory;

    /**
     * @var string[]
     */
   protected $fillable = [
       'invoice_number',
       'invoice_Date',
       'Due_date',
       'product',
       'section_id',
       'Amount_collection',
       'Amount_Commission',
       'Discount',
       'Value_VAT',
       'Rate_VAT',
       'Total',
       'Status',
       'Value_Status',
       'note',
       'Payment_Date',
   ];
}
