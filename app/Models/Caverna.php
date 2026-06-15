<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Caverna extends Model
{
    protected $table = 'caverna';
    protected $fillable = [
        'nome', 
        'altura', 
        'largura'
    ];

    public function dragoes() {
        return $this->hasMany(Dragao::class, "caverna_id", "id");
    }
}
