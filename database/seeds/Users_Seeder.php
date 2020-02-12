<?php

use Illuminate\Database\Seeder;

class Users_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        	['name'=>'Dat', 'subname'=>'Pham', 'address'=>'10 rue Ronceraie, Blois, France', 'phone'=>'07 76 72 97 86', 'user_id'=>'966451452','admin'=>true, 'email'=>'ba.pham@insa-cvl.fr','password'=>bcrypt('phamdat123'), 'created_at'=>'2019-12-12 00:00:00'],
            ['name'=>'TRAN', 'subname'=>'Anh Khoa', 'address'=>'17 Avenue du Maréchal Foch, Blois, France', 'phone'=>'07 67 17 15 24', 'user_id'=>'496641524','admin'=>0, 'email'=>'anh.tran@insa-cvl.fr','password'=>bcrypt('phamdat123'), 'created_at'=>'2019-12-12 00:00:00'],
            ['name'=>'BUI', 'subname'=>'Quoc Anh', 'address'=>'16 Avenue du Maréchal Foch, Blois, France', 'phone'=>'07 75 12 94 26', 'user_id'=>'12015248','admin'=>0, 'email'=>'anh.bui@insa-cvl.fr','password'=>bcrypt('phamdat123'), 'created_at'=>'2019-12-12 00:00:00']
        ]);
    }
}
