<?php

namespace Database\Seeders;

use App\Models\Provide_Help;
use App\Models\ProvideHelp;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProvideHelpSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::where('email', 'user1@gmail.com')->first();
        if ($user) {
            $provideHelp = Provide_Help::where('users_id', $user->id)->first();
            if (!$provideHelp) {
                $provideHelp = new Provide_Help();
                $provideHelp->provide_help_ammount = 1000;
                $provideHelp->get_help_ammount = 2000000;
                $provideHelp->ammount_Received = 0;
                $provideHelp->ammount_pendding = 2000000;
                $provideHelp->customer_id = time() . random_int(1000, 9999999999);
                $provideHelp->status = "1";
                $provideHelp->users_id = $user->id;
                $provideHelp->save();
            }
        }
    }
}
