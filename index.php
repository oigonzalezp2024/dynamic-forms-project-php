<?php
require __DIR__ . '/vendor/autoload.php';
require_once "./config.php";

use App\Domain\Infrastructure\CreateFormInterface;
use App\Domain\Infrastructure\CreateViewInterface;
use App\Infrastructure\CreateForm;
use App\Infrastructure\CreateView;
use App\Application\CreateViewOfForms;

$createViewOfForms = new CreateViewOfForms($data);
$createViewOfForms->run();
