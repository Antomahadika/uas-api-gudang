<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;



class items extends Model
{
    protected $primaryKey = 'ItemID';
    protected $table = 'items';
    protected $fillable = [
        'ItemID', 'NamaBarang', 'Deskripsi', 'Harga', 'JumlahStok', 'KategoriID'
    ];
}