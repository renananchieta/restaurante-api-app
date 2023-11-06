<?php

namespace App\Models\Entity;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Movimentacao extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'movimentacao';
    public $timestamps = true;
    protected $fillable = [
        'cliente_id',
        'valor',
        'tipo_movimentacao_id',
        'data',
        'observacao'
    ];

    public function tipoMovimentacao(): BelongsTo
    {
        return $this->belongsTo('App\Models\Entity\TipoMovimentacao', 'tipo_movimentacao_id');
    }

    public function cliente(): BelongsTo
    {
        return $this->belongsTo('App\Models\Entity\Cliente', 'cliente_id');
    }
}
