<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    
    protected $table = 'tb_laporan';
    public $timestamps = false;
    protected $fillable = [
        'id_laporan', 'id_user', 'provinsi','kabupaten','kecamatan',
        'desa','lat','long','current_possition','tingkat_kerusakan','keterangan',
        'foto',
    ];


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    
}
