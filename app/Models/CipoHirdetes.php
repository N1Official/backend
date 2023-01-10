<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CipoHirdetes extends Model
{
    use HasFactory;
    protected $fillable = ["gyarto","nev","szin","nem","meret","ar","lejarat","aktiv"];
    protected $table = 'cipohirdetesek';
    protected $primaryKey = 'azon';
    public $timestamps = false;
    protected $casts = [
        'lejarat' => 'datetime',
        'aktiv' => 'boolean'
    ];
}
