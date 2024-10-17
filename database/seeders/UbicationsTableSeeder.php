<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use DB;

class UbicationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("ubications")->insert([
            [ 'name' => 'Parking Santa Catalina SABA', 'ubication' =>  '28.142261, -15.425630', 'price'=> "20" ],
            [ 'name' => 'Parking Nuevos Juzgados', 'ubication' =>  '28.097840, -15.414810', 'price'=> '35'],
            [ 'name' => 'Parking Edificios Múltiples SABA', 'ubication' =>  '28.122235, -15.431670', 'price'=> '28'],
            [ 'name' => 'Parking Secretario Padilla - Las Canteras', 'ubication' =>  '28.140389, -15.431111', 'price'=> '16'],
            [ 'name' => 'Parking Parque San Telmo', 'ubication' =>  '28.101599, -15.415839', 'price'=> '22'],
            [ 'name' => 'Parking El Muelle', 'ubication' =>  '28.143972, -15.426347', 'price'=> '56'],
            [ 'name' => 'Urbanización Parque Central', 'ubication' =>  '28.103318327072927, -15.446851680182547', 'price'=> '12'],
            [ 'name' => 'Aparcamiento Alcalde Alejandro Castro', 'ubication' =>  '27.99819547782211, -15.42112670515776', 'price'=> '6'],
            [ 'name' => 'Parking Area', 'ubication' =>  '28.007564380729416, -15.374603081570891', 'price'=> '4'],
            [ 'name' => 'Parking Mirador las Tirajanas', 'ubication' =>  '27.927099682025677, -15.572819710260804', 'price'=> '27'],
            [ 'name' => 'Aparcamiento Tejeda', 'ubication' =>  '27.934379616654038, -15.668606758300529', 'price'=> '10'],
            [ 'name' => 'Parking Faneroque', 'ubication' =>  '28.063535704960472, -15.728902817252214', 'price'=> '33'],
            [ 'name' => 'Parking Teror', 'ubication' =>  '28.0685585873079, -15.54502130089845', 'price'=> '29'],
            [ 'name' => 'Parking Intermodal El Rincón', 'ubication' =>  '28.129659681285, -15.451158148419736', 'price'=> '89'],
            [ 'name' => 'Aparcamiento 1º de Mayo', 'ubication' =>  '28.101710853008328, -15.419093092129257', 'price'=> '28'],
            [ 'name' => 'Acceso al Parking del Centro Comercial Mercadona', 'ubication' =>  '28.12585903270009, -15.43822969014893', 'price'=> '19'],
        ]);
    }
}
