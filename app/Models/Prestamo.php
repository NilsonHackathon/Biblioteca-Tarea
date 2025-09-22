<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Prestamo extends Model
{
    protected $table = 'prestamos';
    protected $primaryKey = 'prestamo_id';
    public $timestamps = false; // Si tu tabla no tiene created_at/updated_at

    // ...otros atributos si necesitas...
}
