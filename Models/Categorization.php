<?php


namespace App\Twill\Capsules\Categories\Models;


use A17\Twill\Models\Model;

class Categorization extends Model
{
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
