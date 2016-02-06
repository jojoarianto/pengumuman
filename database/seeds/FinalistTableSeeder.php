<?php 

use Illuminate\Database\Seeder;
use App\Models\finalist;

class FinalistTableSeeder extends Seeder
{
	public function run()
	{
		DB::table('finalists');
        Finalist::create([
        	'name' => 'user 1',
                'no_induk' => '10-12-14-1550',
        	'school_name' => 'SMA 1 Denpasar'
        	]);
        Finalist::create([
        	'name' => 'user 2',
                'no_induk' => '10-12-14-1550',
        	'school_name' => 'SMA 5 Surabaya'
        	]);
        Finalist::create([
        	'name' => 'user 3',
                'no_induk' => '10-12-14-1550',
        	'school_name' => 'SMA Wachid Hasyim 2 Taman'
        	]);
        Finalist::create([
        	'name' => 'user 4',
                'no_induk' => '10-12-14-1550',
        	'school_name' => 'SMA YPM 2'
        	]);
        Finalist::create([
        	'name' => 'user 5',
                'no_induk' => '10-12-14-1550',
        	'school_name' => 'SMA 2 Surabaya'
        	]);
	}
}


