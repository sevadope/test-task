<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\UserBonus;

class UserBonusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UserBonus::insert([
            [
                'name' => 'Бесплатное обследование',
                'limited' => 't',
            ],
            [
                'name' => 'Скидка на поездку в санаторий',
                'limited' => 'f',
            ],
            [
                'name' => 'Кружка с логотипом “БиоДата”',
                'limited' => 't',
            ],
        ]);
    }
}
