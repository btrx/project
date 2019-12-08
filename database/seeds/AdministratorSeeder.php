<?php

use Illuminate\Database\Seeder;

class AdministratorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("users")->truncate();

        $administrator = new \App\User;
        $administrator->username = "admin";
        $administrator->name = "administrator";
        $administrator->email = "admin@admin.com";
        $administrator->roles = json_encode(["ADMIN"]);
        $administrator->password = \Hash::make("admin");
        $administrator->status= "ACTIVE";

        $administrator->save();

        $this->command->info("User Admin berhasil diinsert");
    }
}
