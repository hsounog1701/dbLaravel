<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coche extends Model
{
    use HasFactory;

    protected $table = 'coches';

    protected $fillable = [
        'marca',
        'modelo',
        'year',
        'precio',
    ];

    protected $casts = [
        'year' => 'integer',
        'precio' => 'float',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    public function scopeMarca($query, $marca)
    {
        return $query->where('marca', $marca);
    }
}
