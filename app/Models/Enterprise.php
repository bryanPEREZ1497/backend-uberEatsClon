<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Enterprise extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'app.enterprises';
    protected $fillable = [
        'adress',
        'calification',
        'country',
        'img_url',
        'name',
        'ranking',
        'time_close',
        'time_open',
    ];

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'app.category_enterprise', 'enterprise_id', 'category_id')
            ->withTimestamps();
    }
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
