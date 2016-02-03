<?php 

namespace App\Http\Controllers;

use App\Http\Controllers\DB;
use App\Models\finalist;

class PengumumanController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Pengumuman Controller
	|--------------------------------------------------------------------------
	|
	| Contoller untuk menampilkan data siapa saja yang lolos ke babak selanjutnya
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{

	}

	/**
	 * Show the pengumuman
	 *
	 * @return Response
	 */
	public function index()
	{
		$data = [
			'peserta'	=> Finalist::all()
		];
		return view('contents.pengumuman.index', $data);
	}

	public function getFinalist()
	{
		$data = [
			'peserta'	=> Finalist::all()
		];
		return view('contents.pengumuman.admin', $data);
	}

}
