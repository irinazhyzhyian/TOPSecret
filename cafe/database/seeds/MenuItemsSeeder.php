<?php

use Illuminate\Database\Seeder;

class MenuItemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menuitems')->insert([
            'name' => 'Капучіно',
            'description' => 'Вкусно і недорого.',
            'photo' => 'https://i.obozrevatel.com/food/recipemain/2019/3/16/kapuchino.jpg?size=600x400',
            'price' => 69.88
         ]);
         DB::table('menuitems')->insert([
             'name' => 'Латте',
             'description' => 'лАтее чи латтЕ так ніхто і не розібрався, але пити можна',
             'photo' => 'https://lh3.googleusercontent.com/proxy/awJpU7AOBqtSD3sOHB_FLAonIX5PS8CvhfWTC45nWtb0hO0mwbdj-QIb-xwf82CuMD2EDCOltj2rWdIZDDpXlg',
             'price' => 73.00
         ]);
         DB::table('menuitems')->insert([
             'name' => 'Фільтр',
             'description' => 'Міцний як твій біцепс',
             'photo' => 'https://shop.tastycoffee.ru/files/shares/data/blog/za-chto-mi-lubim-filtr-kofe/02.jpg',
             'price' => 65.00
         ]);
    }
}
