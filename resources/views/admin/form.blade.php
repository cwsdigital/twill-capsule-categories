@extends('twill::layouts.form', [
    'additionalFieldsets' => [
        ['fieldset' => 'metadata', 'label' => 'SEO'],
    ]
])

@section('contentFields')
    @formField('input', [
        'name' => 'title',
        'label' => 'Title',
        'translated' => true,
        'maxlength' => 100
    ])

    @formField('input', [
        'name' => 'description',
        'label' => 'Description',
        'translated' => true,
    ])
@stop

@section('fieldsets')
    @metadataFields
@stop
