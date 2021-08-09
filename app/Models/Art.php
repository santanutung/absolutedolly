<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Art extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function catagorys()
    {
        return $this->belongsToMany(Category::class)->withTimestamps();
    }

    public function extraImages()
    {
        return $this->belongsToMany(ExtraImages::class);
    }

    


}
