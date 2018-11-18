<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    
    protected $table = 'tb_laporan';
   
    protected $fillable = [
        'id_laporan', 'id_user', 'provinsi','kabupaten','kecamatan',
        'desa','lat','long','current_possition','tingkat_kerusakan','keterangan',
        'foto',
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    
}
