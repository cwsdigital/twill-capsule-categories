<?php

namespace App\Twill\Capsules\Categories\Models;

use A17\Twill\Models\Behaviors\HasMedias;
use A17\Twill\Models\Behaviors\HasTranslation;
use A17\Twill\Models\Behaviors\HasSlug;
use A17\Twill\Models\Behaviors\HasPosition;
use A17\Twill\Models\Behaviors\Sortable;
use App\Twill\Capsules\Base\Crops;
use App\Twill\Capsules\Base\Model;
use CwsDigital\TwillMetadata\Models\Behaviours\HasMetadata;

class Category extends Model implements Sortable
{
    use HasTranslation;
    use HasSlug;
    use HasPosition;
    use HasMedias;
    use HasMetadata;

    protected $fillable = [
        'title',
        'description',
        'position',
    ];

    public $translatedAttributes = [
        'title',
        'description',
        'active',
    ];

    public $slugAttributes = [
        'title',
    ];

    public $mediasParams = Crops::ALL_CROPS;

    public $metadataFallbacks = [
        'title' => 'title',
    ];

    // Categories are considered published by default
    public function getPublishedAttribute() {
        return true;
    }

    // Published by default, so remove any possibility of controlling the publish status
    public function getCanPublishAttribute() {
        return false;
    }

    // Relations - add in your models that have categories here

    //public function articles() {
    //    return $this->morphedByMany(Article::class, 'categorizable', 'categorizations');
    //}

}
