<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RemedioTratamento extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'remedios_tratamentos';

    protected $fillable = [
      'dose',
      'unidade_medida' ,
      'duracao',
      'intervalo',
      'periodicidade',
      'remedio_id',
      'tratamento_id',
    ];

    public function remedio()
    {
        $this->hasOne(Remedio::class, 'id', 'remedio_id');
    }

    public function tratamento()
    {
        $this->hasOne(Tratamento::class, 'id', 'tratamento_id');
    }
}
