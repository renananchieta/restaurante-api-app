<?php

namespace App\Models\Entity;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Produto extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'produto';
    public $timestamps = true;
    protected $fillable = [
        'nome',
        'categoria_id'
    ];

    public function categoria(): BelongsTo
    {
        return $this->belongsTo('App\Models\Entity\Categoria', 'categoria_id');
    }
}
