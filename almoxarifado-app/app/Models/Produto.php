<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\movimento;

class Produto extends Model
{
    protected $fillable = [
        'nome', 'marca', 'estoque',
    ];

    public function movimentos()
    {
        return $this->hasMany(movimento::class);
    }
}
