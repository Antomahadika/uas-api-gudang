<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;



class categories extends Model
{
    protected $primaryKey = 'KategoriID';
    protected $table = 'categories';
    protected $fillable = [
        'KategoriID', 'NamaKategori'
    ];
}