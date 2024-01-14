<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;



class suppliers extends Model
{
    protected $primaryKey = 'SupplierID';
    protected $table = 'suppliers';
    protected $fillable = [
        'SupplierID', 'NamaPemasok', 'Alamat', 'Kontak'
    ];
}