<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;



class issuing extends Model
{
    protected $primaryKey = 'IssueID';
    protected $table = 'issuing';
    protected $fillable = [
        'IssueID', 'ItemID', 'TanggalPengeluaran', 'JumlahDikeluarkan', 'TujuanPengeluaran'
    ];
}