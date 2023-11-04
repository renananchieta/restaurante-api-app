<?php

namespace App\Models\Entity;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cardapio extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'cardapio';
    public $timestamps = false;
    protected $fillable = [
        'produto_id',
        'descricao',
        'valor'
    ];

    public function produto(): BelongsTo
    {
        return $this->belongsTo('App\Models\Entity\Produto', 'produto_id');
    }
}
