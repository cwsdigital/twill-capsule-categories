<?php

namespace App\Twill\Capsules\Categories\Http\Controllers;


use App\Twill\Capsules\Base\ModuleController;

class CategoryController extends ModuleController
{
    protected $moduleName = 'categories';

    protected $permalinkBase = 'categories';

    // Blade view to be rendered for previews
    protected $previewView = 'site.categories.show';

    // set this to the prefix configured in twill-navigation if module is not running at top level.
    protected $routePrefix = '';

    protected $indexColumns = [
        'title' => [
            'title' => 'Title',
            'field' => 'title',
        ],
    ];

    protected $defaultIndexOptions = [
        'create' => true,
        'edit' => true,
        'publish' => false, //we treat categories as published by default, setting this to false disallows the us for changing publish status
        'bulkPublish' => false,
        'feature' => false,
        'bulkFeature' => false,
        'restore' => true,
        'bulkRestore' => true,
        'forceDelete' => true,
        'bulkForceDelete' => true,
        'delete' => true,
        'duplicate' => false,
        'bulkDelete' => true,
        'reorder' => false,
        'permalink' => true,
        'bulkEdit' => true,
        'editInModal' => false,
    ];


    protected function formData($request)
    {
        return [
            'metadata_card_type_options' => config('metadata.card_type_options'),
            'metadata_og_type_options' => config('metadata.opengraph_type_options'),
        ];
    }

}
