<?php 

use Illuminate\Database\Seeder;
use App\Models\finalist;

class FinalistTableSeeder extends Seeder
{
	public function run()
	{
		DB::table('finalists');
        Finalist::create([
        	'name' => 'Joko Irianto',
        	'school_name' => 'SMA Wachid Hasyim 2 Taman'
        	]);
        Finalist::create([
        	'name' => 'Joko Irianto',
        	'school_name' => 'SMA Wachid Hasyim 2 Taman'
        	]);
        Finalist::create([
        	'name' => 'Joko Irianto',
        	'school_name' => 'SMA Wachid Hasyim 2 Taman'
        	]);
        Finalist::create([
        	'name' => 'Joko Irianto',
        	'school_name' => 'SMA Wachid Hasyim 2 Taman'
        	]);
        Finalist::create([
        	'name' => 'Joko Irianto',
        	'school_name' => 'SMA Wachid Hasyim 2 Taman'
        	]);
	}
}


