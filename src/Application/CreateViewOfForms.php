<?php

namespace App\Application;

use App\Domain\Application\CreateViewOfFormsInterface;
use App\Domain\Infrastructure\CreateFormInterface;
use App\Domain\Infrastructure\CreateViewInterface;
use App\Infrastructure\CreateForm;
use App\Infrastructure\CreateView;

class CreateViewOfForms implements CreateViewOfFormsInterface

{

    private $data;
    public function __construct(array $data)
    {
        $this->data = $data;
    }
    function run()
    {

        $data = $this->data;
        $createForm = new CreateForm();

        if (isset($data) && is_array($data)) {
            $createView = new CreateView($createForm, $data);
            $createView->view();
        }
    }
}
