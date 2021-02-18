<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mentor extends Model {

	// Table name
	protected $table = 'mentors';

	// Primary key
	public $primaryKey = 'id';

	// timestamps
	public $timeStamps = true;
}
