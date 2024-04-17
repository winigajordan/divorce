<?php
 
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Demande extends Model
{
    use HasFactory ;

    protected $fillable = [
        'nom',
         'prenom', 
         'email',
          'telephone',
           'accord', 
           'enfant',
            'bien', 
            'ville', 
            'code',
            'produit_id'
        ];


    public function produit()
    {
        return $this->belongsTo(Produit::class);
    }

}
