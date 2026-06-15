<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dragao extends Model
{
    protected $table = 'dragao';
    protected $fillable = [
        'nome', 
        'idade', 
        'comprimento', 
        'largura', 
        'cor',
        'caverna_id'
    ];
    
    public function caverna() {
        return $this->belongsTo(Caverna::class, "caverna_id", "id");
    }
}
