<?php 

namespace App\Http\Controllers;

use App\Http\Controllers\DB;
use App\Models\finalist;
use Illuminate\Http\Request;

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
			'peserta'	=> Finalist::orderBy('result', 'desc')->get()
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

	public function getRankByInduk (Request $request)
	{
		$induk = $request->input('no_induk');
		return Finalist::where('no_induk', $induk)->firstOrFail();
		// return $induk;
	}

	public function get ($induk)
	{
		// $induk = $request->input('no_induk');
		return Finalist::where('no_induk', '=', $induk)->firstOrFail();
		// return $induk;
	}

}
