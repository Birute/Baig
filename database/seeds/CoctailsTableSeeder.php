<?php

use Illuminate\Database\Seeder;

class CoctailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('coctails')->insert([
      [
        'title'=>'Adams Apple',
        'recipe'=>'<ul>
                      <li>Arbata 60 ml</li>
                      <li>Nefiltruotos obuolių sultys 90 ml</li>
                      <li>Medus 2 arbat. šaukštel.</li>
                      <li>Citrinų sultys 10 ml</li>
                      <li>Cinamono lazdelė1 vnt.</li>
                      <li>Obuolio grežinėlis 1 vnt.</li>
                    </ul>',
        'photo'=>'img/AdamsAppleLarge.png',
      ],
      [
        'title'=>'Adams Apple2',
        'recipe'=>'<ul>
                      <li>Arbata 60 ml</li>
                      <li>Nefiltruotos obuolių sultys 90 ml</li>
                      <li>Medus 2 arbat. šaukštel.</li>
                      <li>Citrinų sultys 10 ml</li>
                      <li>Cinamono lazdelė1 vnt.</li>
                      <li>Obuolio grežinėlis 1 vnt.</li>
                    </ul>',
        'photo'=>'img/AdamsAppleLarge.png',
      ]
    ]);
    }
}
