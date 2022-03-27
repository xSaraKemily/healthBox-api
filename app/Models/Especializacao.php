<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Especializacao extends Model
{
    use HasFactory;

    protected $table = 'especializacoes';

    protected $fillable = [
        'nome',
    ];

    public function medico()
    {
        $this->belongsToMany('id', 'users', 'id');
    }
}
