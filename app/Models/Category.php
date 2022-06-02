<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'app.categories';
    protected $fillable = [
        'description',
        'name',
        'img_url',
    ];

    public function enterprises()
    {
        return $this->belongsToMany(Enterprise::class, 'app.category_enterprise', 'category_id', 'enterprise_id');
    }
}
