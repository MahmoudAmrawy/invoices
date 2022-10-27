<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class invoices extends Model
{
//    protected $fillable = [
//        'invoice_number',
//        'invoice_Date',
//        'Due_date',
//        'product',
//        'section_id',
//        'Amount_collection',
//        'Amount_Commission',
//        'Discount',
//        'value_vat',
//        'rate_vat',
//        'total',
//        'status',
//        'value_status',
//        'note'
//    ];

    protected $guarded = [];

    protected $dates = ['deleted_at'];

    public function section()
    {
        return $this->belongsTo(sections::class);
    }


    use HasFactory;
    use SoftDeletes;
}
