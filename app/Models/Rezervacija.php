<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Schema;

class Rezervacija extends Model
{
    use HasFactory;
    protected $fillable=[
        'ime',
        'prezime',
        'email',
        'destinacija',
        'polazak',
        'povatak',
'napomena',
'brPutnika',
'grad_id',
'user_id'
];
    //use HasFactory;
    public $timestamps = true;
    public function grad(){
        return $this->belongsTo(Grad::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
