<?php

use Illuminate\Database\Seeder;

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
        // $this->call(UsersTableSeeder::class);
        
        //添加lora 分配节点给用户测试
   
        $user = User::where('id',1)->first();
        $user->loraSets()->create([
            "name" => "test",
            "indicator_r" => 0,
            "indicator_g" => 255,
            "indicator_b" => 0,
            "dim" => 0.3,
            "description" => "test rola",
        ]);

   
    }
}
