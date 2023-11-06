<?php

namespace App\Models\Entity;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cliente extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'cliente';
    public $timestamps = true;
    protected $fillable = [
        'nome',
        'telefone',
        'identificacao',
        'saldo'
    ];
}
