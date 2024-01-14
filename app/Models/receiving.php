<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;



class receiving extends Model
{
    protected $primaryKey = 'ReceiptID';
    protected $table = 'receiving';
    protected $fillable = [
        'ReceiptID', 'ItemID', 'TanggalPenerimaan', 'JumlahDiterima', 'PemasokID'
    ];
}