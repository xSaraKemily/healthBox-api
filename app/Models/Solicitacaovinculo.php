<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Solicitacaovinculo extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'solicitacoes_vinculos';

    protected $fillable = [
        'medico_id',
        'paciente_id',
        'vinculado'
    ];

    protected $attribute = [
        'vinculado' => 0
    ];

    public function paciente()
    {
        $this->hasOne(User::class, 'id', 'paciente_id');
    }

    public function medico()
    {
        $this->hasOne(User::class, 'id', 'medico_id');
    }
}
