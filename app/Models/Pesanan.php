<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Pesanan extends Model
{
    //
    protected $guarded = [
        'id',
        'created_at',
        'updated_at',
    ];

    protected static function generateInvoiceNumber()
    {
        return 'INV-' . now()->format('Ymd') . '-' . Str::upper(Str::random(6));
    }
}
