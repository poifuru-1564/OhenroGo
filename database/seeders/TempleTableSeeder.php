<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Query\IndexHint;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;


class TempleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = collect([
            'Ryozenji',
            'Gokurakuji',
            'Konsenji',
            'Dainichiji',
            'Jizoji',
            'Anrakuji',
            'Jurakuji',
            'Kumadanji',
            'Horinji',
            'Kirihataji',
            'Fujiidera',
            'Shosanji',
            'Dainichiji',
            'Jorakuji',
            'Awa-Kokubunji',
            'Kannonji',
            'Idoji',
            'Onzanji',
            'Tatsueji',
            'Kakurinji',
            'Tairyuji',
            'Byodoji',
            'Yakuoji',
            'Hotsumisakiji',
            'Shinshoji',
            'Kongochoji',
            'Konomineji',
            'Dainichiji',
            'Tosa Kokubunji',
            'Zenrakuji',
            'Chikurinji',
            'Zenjibuji',
            'Sekkeiji',
            'Tanemaji',
            'Kiyotakiji',
            'Shoryuji',
            'Iwamotoji',
            'Kongofukuji',
            'Enkoji',
            'Kanjizaiji',
            'Ryuukouji',
            'Butsumuokuji',
            'Meisekiji',
            'Daihoji',
            'Iwayaji',
            'Joruriji',
            'Yasakaji',
            'Sairinji',
            'Jodoji',
            'Hantaji',
            'Ishiteji',
            'Taisanji',
            'Enmyoji',
            'Enmeiji',
            'Nankobo',
            'Taisanji',
            'Eifukuji',
            'Senyuji',
            'Iyo Kokubunji',
            'Yokomineji',
            'Koonji',
            'Hojuji',
            'Kichijoji',
            'Maegamiji',
            'Sankakuji',
            'Unpenji',
            'Daikoji',
            'Jinnein',
            'Kannonji',
            'Motoyamaji',
            'Iyadaniji',
            'Mandaraji',
            'Shussakaji',
            'Koyamaji',
            'Zentsuji',
            'Konzoji',
            'Doryuji',
            'Goshoji',
            'Tennoji',
            'Sanuki Kokubunji',
            'Shiromineji',
            'Negoroji',
            'Ichinomiyaji',
            'Yashimaji',
            'Yakuriji',
            'Shidoji',
            'Nagaoji',
            'Okuboji'
        ]);

        DB::table('temples')->insert(
            collect($data)->map(function ($data, $index){

                $tokushima = DB::table('prefectures')->where('name', 'Tokushima')->value('id');
                $kochi = DB::table('prefectures')->where('name', 'Kochi')->value('id');
                $ehime = DB::table('prefectures')->where('name', 'Ehime')->value('id');
                $kagawa = DB::table('prefectures')->where('name', 'Kagawa')->value('id');

                if($index >= 1 && $index < 24)
                {
                    return['name' => 'No. ' . ($index + 1) . ' ' . $data . ' temple',
                        'prefecture_id' => $tokushima
                    ];
                }
                elseif ($index >= 24 && $index < 40)
                {
                    return['name' => 'No. ' . ($index + 1) . ' ' . $data . ' temple',
                        'prefecture_id' => $kochi
                    ];
                }
                elseif ($index >= 40 && $index < 66)
                {
                    return['name' => 'No. ' . ($index + 1) . ' ' . $data . ' temple',
                        'prefecture_id' => $ehime
                    ];
                }
                else
                {
                    return['name' => 'No. ' . ($index + 1) . ' ' . $data . ' temple',
                        'prefecture_id' => $kagawa
                    ];
                }
                
            })->toArray()
        );
        
    }
}
