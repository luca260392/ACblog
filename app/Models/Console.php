<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Console extends Model
{
    protected $fillable = [
        'name', 'brand', 'logo', 'description'
    ];



    //! una console appartiene a più giochi, per questo il nome del metodo sarà il nome del modello relazionato al plurale (quindi games)
    public function games(){
        //! questa console appartiene a più giochi
        return $this->belongsToMany(Game::class);
    }
}
