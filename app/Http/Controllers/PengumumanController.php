<?php namespace App\Http\Controllers;

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
		return view('contents.pengumuman.index');
	}

}
