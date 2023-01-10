<?php

namespace Database\Seeders;

use App\Models\CipoHirdetes;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CipoHirdetesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CipoHirdetes::create([
            'gyarto' =>'Nipie',
            'nev'=>'RunnAir',
            'szin'=>'fekete',
            'nem'=>'u',
            'meret'=>42,
            'ar'=>15990,
            'lejarat'=>'2023-08-31',
            'aktiv'=>0
        ]);
        CipoHirdetes::create([
            'gyarto' =>'Nipie',
            'nev'=> 'RunnAir',
            'szin'=> 'piros',
            'nem'=> 'u',
            'meret'=> 39,
            'ar'=> 15990,
            'lejarat'=> '2023-01-10',
            'aktiv'=> 0
        ]);
        CipoHirdetes::create([
            'gyarto' => 'Para',
            'nev'=> 'Comfort',
            'szin'=> 'fekete',
            'nem'=> 'f',
            'meret'=> 44,
            'ar'=> 32990,
            'lejarat'=> '2023-08-31',
            'aktiv'=> 1
        ]);
        CipoHirdetes::create([
            'gyarto' => 'Para',
            'nev'=> 'High',
            'szin'=> 'piros',
            'nem'=> 'n',
            'meret'=> 36,
            'ar'=> 32990,
            'lejarat'=> '2023-01-01',
            'aktiv'=> 1
        ]);
        CipoHirdetes::create([
            'gyarto' => 'Matchers',
            'nev'=> 'Run',
            'szin'=> 'sötétkék',
            'nem'=> 'f',
            'meret'=> 46,
            'ar'=> 16800,
            'lejarat'=> '2023-09-10',
            'aktiv'=> 1
        ]);
        CipoHirdetes::create([
            'gyarto' => 'Matchers',
            'nev'=> 'Walk',
            'szin'=> 'fehér',
            'nem'=> 'u',
            'meret'=> 40,
            'ar'=> 18900,
            'lejarat'=> '2023-01-10',
            'aktiv'=> 0
        ]);
        CipoHirdetes::create([
            'gyarto' => 'Matchers',
            'nev'=> 'Flexy',
            'szin'=> 'Rózsaszín',
            'nem'=> 'n',
            'meret'=> 39,
            'ar'=> 20000,
            'lejarat'=> '2023-09-10',
            'aktiv'=> 1
        ]);
        CipoHirdetes::create([
            'gyarto' => 'Gabika',
            'nev'=> 'Balett',
            'szin'=> 'rózsaszín',
            'nem'=> 'n',
            'meret'=> 36,
            'ar'=> 29999,
            'lejarat'=> '2024-01-01',
            'aktiv'=> 1
        ]);
        CipoHirdetes::create([
            'gyarto' => 'Gabika',
            'nev'=> 'Balett',
            'szin'=> 'rózsaszín',
            'nem'=> 'n',
            'meret'=> 36,
            'ar'=> 29999,
            'lejarat'=> '2023-01-01',
            'aktiv'=> 1
        ]);
        CipoHirdetes::create([
            'gyarto' => 'Gabika',
            'nev'=> 'Balett',
            'szin'=> 'rózsaszín',
            'nem'=> 'n',
            'meret'=> 38,
            'ar'=> 29999,
            'lejarat'=> '2024-01-01',
            'aktiv'=> 1
        ]);
    }
}
