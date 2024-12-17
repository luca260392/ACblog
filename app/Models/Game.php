<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $fillable = ['title', 'producer', 'price', 'cover', 'description', 'user_id'];



    // un gioco può appartenere solo a un utente, per questo il nome della funzione sarà il nome del modello relazionale al singolare (user)
    public function user(){

        // questo gioco appartiene a un solo utente
        return $this->belongsTo(User::class);
    }




    //! un gioco appartiene a più consoles, per questo il nome del metodo sarà il nome del modello relazionato al plurale (quindi consoles)
    public function consoles(){
        //! questo gioco appartiene a tante consoles
        return $this->belongsToMany(Console::class);
    }
}
