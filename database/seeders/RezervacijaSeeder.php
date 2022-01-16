<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Rezervacija;
use App\Models\User;

class RezervacijaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::factory()->create();
        $array=explode(" ",$user->name);
        $prezime = $array[1];
        $ime = $array[0];
        Rezervacija::create([
            "ime"=>$ime,
            "prezime"=>$prezime,
            "email"=>$user->email,
            "destinacija"=>'Lisabon',
            "polazak"=>"2020-01-01",
            "povatak"=>"2020-01-07",
            "napomena"=>" ",
            "brPutnika"=>"6",
            "grad_id"=>'4',
            "user_id"=>$user->id,
        ]);
    }
}
