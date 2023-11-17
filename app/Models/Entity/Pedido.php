<?php

namespace App\Models\Entity;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

use function PHPSTORM_META\map;

class Pedido extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'pedido';
    public $timestamps = true;
    protected $fillable = [
        'data',
        'mesa',
        'status',
        'identificacao_cliente',
    ];

    public function identificacaoCliente(): BelongsTo
    {
        return $this->belongsTo('App\Models\Entity\Cliente', 'identificacao_cliente', 'identificacao');
    }
}
