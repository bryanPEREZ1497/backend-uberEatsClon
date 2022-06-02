<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Delivery extends Model
{
	use HasFactory;
	use SoftDeletes;

	protected $table = 'app.deliveries';
	protected $fillable = [
		'calification',
		'description',
		'placa',
		'vehicle',
	];

	public function orders()
	{
		return $this->belongsTo(Order::class);
	}
	public function user()
	{
		return $this->belongsTo(User::class);
	}
}
