<?php

use Illuminate\Database\Seeder;
use App\Category;
use App\Subcategory;
use App\product;
use App\User;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        Category::create(['name'=>'laptop','slug'=>'laptop','description'=>'laptop category','image'=>'file/lap.jpg']);
        Category::create(['name'=>'mobile phone','slug'=>'mobile-phone','description'=>'mobile phone category','image'=>'file/lap.jpg']);
        Category::create(['name'=>'camera','slug'=>'cameras','description'=>'mobile phone category','image'=>'file/lap.jpg']);

        Subcategory::create(['name'=>'dell','category_id'=>1]);
        Subcategory::create(['name'=>'HP','category_id'=>1]);
        Subcategory::create(['name'=>'acer','category_id'=>1]);

        product::create([
            'name'=>'HP LAPTOPS WORLDWIDE',
            'image'=>'product/V00qDWSrCgiPGt9CZzDp2YkIfI7lO9A3q0SjDKXN.jpeg',
            'price'=>rand(700,1000),
            'description'=>'This is HP laptops',
            'additional_info'=>'this is additional_info',
            'category_id'=>rand(1,3),
            'Subcategory_id'=>1

        ]);

            product::create([
                'name'=>'DELL LAPTOPS WORLDWIDE',
                'image'=>'product/V00qDWSrCgiPGt9CZzDp2YkIfI7lO9A3q0SjDKXN.jpeg',
                'price'=>rand(700,1000),
                'description'=>'This is HP laptops',
                'additional_info'=>'this is additional_info',
                'category_id'=>rand(1,3),
                'Subcategory_id'=>1

                ]);

                product::create([
                    'name'=>'ACER LAPTOPS WORLDWIDE',
                    'image'=>'product/V00qDWSrCgiPGt9CZzDp2YkIfI7lO9A3q0SjDKXN.jpeg',
                    'price'=>rand(700,1000),
                    'description'=>'This is HP laptops',
                    'additional_info'=>'this is additional_info',
                    'category_id'=>rand(1,3),
                    'Subcategory_id'=>2
        ]);

        User::create([
            'name'=>'Najbudin',
            'email'=>'admin@gmail.com',
            'password'=>bcrypt('Password'),
            'email_verified_at'=>NOW(),
            'phone_number'=>'9808110921',
            'is_admin'=>1

        ]);

    }
}

