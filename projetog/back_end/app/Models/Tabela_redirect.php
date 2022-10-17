<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tabela_redirect extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome_link',
        'link_hash',
        'total_max_click'
    ];
}
