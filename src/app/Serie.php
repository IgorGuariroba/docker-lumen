<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Serie extends Model
{
    protected $fillable = ['nome'];

    public function epsodios()
    {
        return $this->hasMany(Episodio::class);
    }
}
