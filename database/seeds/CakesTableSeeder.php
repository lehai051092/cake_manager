<?php

use App\Cake;
use Illuminate\Database\Seeder;

class CakesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cake = new Cake();
        $cake->nameCake = "Bánh Trung Thu";
        $cake->imageCake = " ";
        $cake->priceCake = 30000;
        $cake->save();

        $cake = new Cake();
        $cake->nameCake = "Bánh Sinh Nhật";
        $cake->imageCake = " ";
        $cake->priceCake = 250000;
        $cake->save();

        $cake = new Cake();
        $cake->nameCake = "Bánh Quy";
        $cake->imageCake = " ";
        $cake->priceCake = 25000;
        $cake->save();

    }
}
