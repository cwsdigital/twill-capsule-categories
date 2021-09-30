<?php


namespace App\Twill\Capsules\Categories\Models\Behaviours;



use App\Twill\Capsules\Categories\Models\Category;

trait HasCategories {

    public function categories()
    {
        return $this->morphToMany(Category::class, 'categorizable', 'categorizations')
                    ->orderBy('categorizations.position', 'ASC');
    }

    public function getPrimaryCategoryAttribute() {
        if( $this->categories->isNotEmpty() ) {
            return $this->categories->first();
        } else {
            return new Category;
        }
    }
}
