<?php

namespace App\Models\Entity;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class TipoMovimentacao extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'tipo_movimentacao';
    public $timestamps = true;
    protected $fillable = [
        'descricao',
    ];

    public function movimentacao(): HasMany
    {
        return $this->hasMany(Movimentacao::class);
    }
}
