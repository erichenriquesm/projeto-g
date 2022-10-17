<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tabela_link extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_redirect',
        'link',
        'click',
        'max_click'
    ];
}
