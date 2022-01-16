<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Grad;
use App\Models\Rezervacija;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(GradSeeder::class);
        User::truncate();
        Grad::truncate();
        Rezervacija::truncate();
        User::factory(7)->create();
        $user = User::factory()->create();
        $grad = Grad::create([
            "naziv"=>"Beograd",
            "drzava"=>"Srbija",
            "naseljenost"=>"80000",
            "opis"=>"Beograd je glavni i najnaseljeniji grad Republike Srbije i privredno, kulturno i obrazovno središte zemlje. Grad leži na ušću Save u Dunav, gde se Panonska nizija spaja sa Balkanskim poluostrvom. Beograd je upravno središte Grada Beograda, posebne teritorijalne jedinice sa svojom mesnom samoupravom. Po broju stanovnika četvrti je u jugoistočnoj Evropi posle Istanbula, Atine i Bukurešta.",
            "valuta"=>"dinar"
        ]);

        $array=explode(" ",$user->name);
        $prezime = $array[1];
        $ime = $array[0];
        Rezervacija::create([
            "ime"=>$ime,
            "prezime"=> $prezime,
            "email"=>$user->email,
            "destinacija"=>$grad->naziv,
            "polazak"=>"2020-01-01",
            "povatak"=>"2020-01-07",
            "napomena"=>"Nema napomene",
            "brPutnika"=>"4",
            "grad_id"=>$grad->id,
            "user_id"=>$user->id,
        ]);
    }
}
