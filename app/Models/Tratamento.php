<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tratamento extends Model
{
    use HasFactory;

    protected $fillable = [
        'opiniao_id',
        'acompanhamento_id',
        'descricao'
    ];


    public function opiniao()
    {
        $this->hasOne(Opiniao::class, 'id', 'opiniao_id');
    }

    public function acompanhamento()
    {
        $this->hasOne(Tratamento::class, 'id', 'acompanhamento_id');
    }
}
