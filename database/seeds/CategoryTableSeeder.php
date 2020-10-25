<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Categorias;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=array(
            [
                "name"=> "Super Heroes",
                "slug"=> "Super Heroes",
                "description"=> "Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique assumenda quas magnam. Obcaecati consequatur, placeat, cum dolor consequuntur, veniam neque quidem nam possimus ab dolores ad alias! Porro, natus quia?",
                "color"=> "#440022"
            ],
            [
                "name"=> "geek",
                "slug"=> "Geek",
                "description"=> "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempora molestiae illum expedita debitis minima, placeat necessitatibus perferendis doloremque, fuga quisquam consequatur perspiciatis tempore libero. Deleniti quam similique at totam eligendi.",
                "color"=> "#445500"
            ]       
        
        );
        Categorias::insert($data);
    }
}