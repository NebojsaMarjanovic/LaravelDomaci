<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grad extends Model
{
    use HasFactory;
    public $timestamps = true;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'naziv', 'drzava', 'brStanovnika','opis','valuta','naseljenost'
    ];
    public function rezervacijas(){

        return $this->hasMany(Rezervacija::class);
    }
}
