<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array (
            [
                'name' => 'Super heroes',
                'slug' => 'super-heroes',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam dignissimos inventore iure voluptatem temporibus numquam. Illum rem iure doloribus, a aperiam deserunt aliquam itaque ducimus porro cupiditate. Non, rem, voluptatem!',
                'color' => '#440022'
            ],
            [
                'name' => 'Geek',
                'slug' => 'geek',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et voluptatem ipsum, sit quibusdam mollitia recusandae repellendus distinctio nihil officia optio quasi, autem neque facilis odio quisquam pariatur accusantium eveniet molestias.',
                'color' => '#445500'
            ]
        );

        Category::insert($data);
    }
}