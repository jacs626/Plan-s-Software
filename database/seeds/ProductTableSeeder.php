<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Productos;

class ProductTableSeeder extends Seeder
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
                "name"=> "Playera 1",
                "slug"=> "playera-1",
                "description"=> "Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique assumenda quas magnam. Obcaecati consequatur, placeat, cum dolor consequuntur, veniam neque quidem nam possimus ab dolores ad alias! Porro, natus quia?",
                "extract"=> "pore libero. Deleniti quam ",
                "price"=>250.00,
                "image"=>"https://sheinsz.ltwebstatic.com/she_dist/images/bg-grey-ba96515e9b.png",
                "visible"=>1,
                "created_at"=>new Datetime,
                "updated_at"=>new Datetime,
                "category_id"=>2
            ],
            [
                "name"=> "Playera 1",
                "slug"=> "playera-1",
                "description"=> "Lorem ipadipisicing elit. Similique assumenda quas magnam. Obcaecati consequatur, placeat, cum dolor consequuntur, veniam neque quidem nam possimus ab dolores ad alias! Porro, natus quia?",
                "extract"=> "astiae illum expedita debitis",
                "price"=>210.00,
                "image"=>"https://sheinsz.ltwebstatic.com/she_dist/images/bg-grey-ba96515e9b.png",
                "visible"=>1,
                "created_at"=>new Datetime,
                "updated_at"=>new Datetime,
                "category_id"=>1
            ]       
        
        );
        Productos::insert($data);
    }
}