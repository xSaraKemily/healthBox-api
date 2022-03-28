<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuestaoQuestionarioResposta extends Model
{
    use HasFactory;

    protected $table = 'questoes_questionarios_respostas';

    protected $fillable = [
        'resposta_descritiva',
        'opcao_id' ,
        'questionario_questao_id',
    ];

    public function opcao()
    {
        $this->hasOne(OpcaoQuestao::class, 'id', 'opcao_id');
    }

    public function questionarioQuestao()
    {
        $this->hasOne(QuestaoQuestionario::class, 'id', 'questionario_questao_id');
    }
}