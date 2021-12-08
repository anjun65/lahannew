<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    use HasFactory;

    protected $fillable = [
        'nomor',
        'tanggal',
        'judul',
        'awal_pelaksanaan',
        'akhir_pelaksanaan',
        'tanggal_tanam',
        'blok',
        'areal',
        'keterangan_areal',
        'peneliti',
        'komoditas',
        'varietas',
        'peralatan',
        'jumlah_peralatan',
        
        'jumlah_benih',
        'jumlah_petroganik',
        'jumlah_phonska',
        'jumlah_urea',
        'jumlah_za',
        'jumlah_zk',
        'jumlah_kci',
        'benih_lain',
        'jumlah_lain',

        'pestisida',
        'herbisida',
        'fungisida',
        'plastik_barrier',
        'jaring_burung',

        'sarana_lain',
        'blok_details',

        'rancangan',
        'tujuan',
        

        'catatan_staf_muda',
        'catatan_vp',
        'status',
    ];

    protected $hidden = [

    ];

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'peneliti');
    }

    // public function details()
    // {
    //     return $this->hasOne(RequestDetail::class, 'request_id', 'id');
    // }
}
