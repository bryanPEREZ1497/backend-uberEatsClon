<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'app.products';
    protected $fillable = [
        'name',
        'price',
        'description',
        'img_url',
        'like_counter',
    ];

    public function enterprise()
    {
        return $this->belongsTo(Enterprise::class);
    }
    public function orders()
    {
        return $this->belongsToMany(Order::class);
    }
    public function clients()
    {
        return $this->belongsToMany(Client::class);
    }
}
