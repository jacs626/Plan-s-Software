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
                "price"=>2500,
                "image"=>"https://i.pinimg.com/originals/0c/af/a3/0cafa3c9d723e82c7038983fea5106f3.jpg",
                "visible"=>1,
                "created_at"=>new Datetime,
                "updated_at"=>new Datetime,
                "category_id"=>2
            ],
            [
                "name"=> "Playera 2",
                "slug"=> "playera-2",
                "description"=> "Lorem ipadipisicing elit. Similique assumenda quas magnam. Obcaecati consequatur, placeat, cum dolor consequuntur, veniam neque quidem nam possimus ab dolores ad alias! Porro, natus quia?",
                "extract"=> "astiae illum expedita debitis",
                "price"=>2100,
                "image"=>"https://i.pinimg.com/originals/7d/e8/c2/7de8c235e7d5eaf7ba9be064b88e0816.jpg",
                "visible"=>1,
                "created_at"=>new Datetime,
                "updated_at"=>new Datetime,
                "category_id"=>1
            ]       
        
        );
        Productos::insert($data);
    }
}