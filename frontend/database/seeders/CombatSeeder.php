<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CombatSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            [
                // #1
                'name' => 'Эймлесс',
                'image' => 'Aimless-bot.jpg',
                'image2' => null,
                'capability' => '<p>Каждые 5 секунд огненные диски плазмы причиняют <span class="cores-orange-color">n% от УВС бота</span> и <span class="cores-orange-color">рикошет</span> до <span class="cores-orange-color">4 раз по ближайшим врагам</span> (урон уменьшается на 20% после каждого рикошета). Дальность варируется в зависимости от класса оснащаемого бота.</p>',
                'fraction' => 'decepticon',
                'char_name' => '% урона',
            ],
            [
                // #2
                'name' => 'Эйразор',
                'image' => 'Airazor-bot.jpg',
                'image2' => null,
                'capability' => '<p>Эйразор обладает <span class="cores-orange-color">n</span> ед. здоровья и может причинять <span class="cores-orange-color">n</span> ед. урона в сек. Она парит в воздухе и наносит удары по врагам каждые 15 сек., <span class="cores-orange-color">замедляя их на 50%</span>в течении 3/6/9/12 сек.</p>',
                'fraction' => 'autobot',
                'char_name' => 'Здоровье/УВС',
            ],
            [
                // #3
                'name' => 'Блоупайп',
                'image' => 'Blowpipe-bot.jpg',
                'image2' => 'Blowpipe-alt.jpg',
                'capability' => '<p>Стреляет нестабильной плазмой, <span class="cores-orange-color">которая причиняет 8х урон по стенам</span> и регулярно извергает пламя, которое наносит урон по области (<span class="cores-orange-color"> процент от УВС Бота</span>). Общий урон бота увеличивается на <span class="cores-orange-color"></span>процент.</p>',
                'fraction' => 'decepticon',
                'char_name' => 'Увеличение урону',
            ],
        ];
        DB::table('combats')->insert($data);

        $data_stats = [
            [
                'combat_id' => 1,
                'level' => 1,
                's2' => '0/60%',
                's3' => '0/72%',
                's4' => '0/96%',
                's5' => '0/108%',
            ],
            [
                'combat_id' => 1,
                'level' => 2,
                's2' => '50/64%',
                's3' => '75/80%',
                's4' => '150/110%',
                's5' => '200/128%',
            ],
            [
                'combat_id' => 1,
                'level' => 3,
                's2' => '375/68%',
                's3' => '562.5/88%',
                's4' => '1125/124%',
                's5' => '1500/148%',
            ],
            [
                'combat_id' => 1,
                'level' => 4,
                's2' => '1250/72%',
                's3' => '1875/96%',
                's4' => '3750/138%',
                's5' => '5000/168%',
            ],
            [
                'combat_id' => 1,
                'level' => 5,
                's2' => '3750/76%',
                's3' => '5625/104%',
                's4' => '11250/152%',
                's5' => '15000/188%',
            ],
            [
                'combat_id' => 1,
                'level' => 6,
                's2' => '11250/80%',
                's3' => '16875/112%',
                's4' => '33750/166%',
                's5' => '45000/208%',
            ],
            [
                'combat_id' => 1,
                'level' => 7,
                's2' => '32500/84%',
                's3' => '48750/120%',
                's4' => '97500/180%',
                's5' => '130000/228%',
            ],
            [
                'combat_id' => 1,
                'level' => 8,
                's2' => '62500/88%',
                's3' => '93750/128%',
                's4' => '187500/194%',
                's5' => '250000/248%',
            ],
            [
                'combat_id' => 1,
                'level' => 9,
                's2' => '125000/92%',
                's3' => '187500/136%',
                's4' => '375000/208%',
                's5' => '500000/268%',
            ],
            [
                'combat_id' => 1,
                'level' => 10,
                's2' => '187500/96%',
                's3' => '281250/144%',
                's4' => '562500/222%',
                's5' => '750000/288%',
            ],
        ];
        DB::table('combats_stats')->insert($data_stats);
    }
}
