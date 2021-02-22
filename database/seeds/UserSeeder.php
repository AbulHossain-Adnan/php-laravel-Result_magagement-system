<?php



use Illuminate\Database\Seeder;

use App\User;



class AdminUserSeeder extends Seeder

{

    /**

     * Run the database seeds.

     *

     * @return void

     */

    public function run()

    {

        User::create([
            'name' => 'Dipu Chandra Dey',
            'email' => 'admin@rms.com',
            'password' => bcrypt('123456'),
        ]);

    }

}
