<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product1  = new Product();
        $product1->title = "sir";
        $product1->img = "images/sir.jpg";
        $product1->description = "Podliveni mladi sir od punomasnog mleka. Krave su na ispaši u selu Sanad. Dostava je svake subote u Suboticu od 8 do 12h";
        $product1->category = "mlecni proizvodi";
        $product1->price = "400";
        $product1->save();

        $product2  = new Product();
        $product2->title = "pita sirnica";
        $product2->img = "images/pita.jpg";
        $product2->description = "Domaca, bosanska pita sirnica. Sastav: domaće razvijane kore, jaja od koka iz slobodnog uzgoja i domaći sitni sir domaćinstva 'Stanić'";
        $product2->category = "testa";
        $product2->price = "600";
        $product2->save();
    }
}
