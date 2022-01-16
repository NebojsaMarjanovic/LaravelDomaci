<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Grad;

class GradSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

         Grad::create([
            "naziv"=>"Lisabon",
            "drzava"=>"Portugal",
            "naseljenost"=>"10000000",
            "opis"=>"Lisabon je glavni grad Portugalije. Ujedno to je i najveći grad u državi i središte portugalske politike, privrede i kulture. Lisabon leži na brežuljcima koji okružuju ušće reke Težo u Atlantski okean.Grad obiluje lepim građevinama svih stilova, uglavnom nastalih nakon zemljotresa iz 1755. godine. Mnogo je spomenika koji podsećaju da je bio prestonica nekada moćne pomorske sile: kula Belem, manastir Svetog Žeronima, velelepni trgovi Komersio i Restasturadores, mnogobrojne crkve i palate bogatih trgovaca i veleposednika. Najveći broj hotela različitih kategorija može da se pronađe u okolini trga (ujedno i kružnog toka) Markes Pombal.",
            "valuta"=>"evro"
        ]);

        Grad::create([
            "naziv"=>"Madrid",
            "drzava"=>"Spanija",
            "naseljenost"=>"13000000",
            "opis"=>"Prestonica Španije Madrid, nalazi se u srcu Iberijskog poluostrva, na pola puta između Atlantika na severu i Sredozemnog mora na jugu,Portugala na zapadu i provincije Katalonije na istoku. Grad Madrid bez predgrađa ima oko 3,1 milion stanovnika. Posle Berlina i Londona, Madrid je treći najveći grad u Evropskoj Uniji. Političko , ekonomsko i kulturno središte države obiluje velelepnim građevinama (Kraljevska palata, Edificio España, Metropolis i Telefonica, Palacio de Cristal), širokim avenijama (Alcala, Gran Via) i grandioznim trgovima (Plaza Mayor, Puerta del Sol, Cibeles, Neptuno, Colon), ali i prelepim parkovima (od kojih je najveći i najpopularniji Retiro), bogatim muzejima (Prado, Reina Sofia, Thyssen-Bornemisza).",
            "valuta"=>"evro"
        ]);
    }
}
