<?php

namespace App\Twill\Capsules\Categories\Repositories\Behaviours;

trait HandleCategories {

    public function afterSaveHandleCategories($object, $fields) {
        // or, to save a belongToMany relationship used with the browser field
        $this->updateBrowser($object, $fields, 'categories');
    }

    public function getFormFields($object) {
        $fields = parent::getFormFields($object);
        // get fields for a browser
        $fields['browsers']['categories'] = $this->getFormFieldsForBrowser($object, 'categories');

        return $fields;
    }
}

