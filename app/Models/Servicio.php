<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "servicios";

    public function profesional(){
        return $this->belongsTo(Profesional::class, 'profesional_id');
    }
}
