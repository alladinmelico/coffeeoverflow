<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class ContactNumberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        foreach(User::all() as $user) {
            $user->contact_number = "+63";
            for($i=0;$i<9;$i++)
            {
                $user->contact_number.=rand(0,9);
                $user->save();
            }
        }
    }
}
