<?php

namespace App\Twill\Capsules\Categories\Repositories;

use A17\Twill\Repositories\Behaviors\HandleMedias;
use A17\Twill\Repositories\Behaviors\HandleTranslations;
use A17\Twill\Repositories\Behaviors\HandleSlugs;
use App\Twill\Capsules\Base\ModuleRepository;
use App\Twill\Capsules\Categories\Models\Category;
use CwsDigital\TwillMetadata\Repositories\Behaviours\HandleMetadata;

class CategoryRepository extends ModuleRepository
{
    use HandleTranslations;
    use HandleSlugs;
    use HandleMedias;
    use HandleMetadata;

    public function __construct(Category $model)
    {
        $this->model = $model;
    }
}
