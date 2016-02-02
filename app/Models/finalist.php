<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class finalist extends Model {

	protected $table = 'finalists';

	protected $fillable = ['name', 'school_name'];

}
