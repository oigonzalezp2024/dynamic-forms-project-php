<?php
namespace App\Infrastructure;

use App\Domain\Infrastructure\CreateViewInterface;

class CreateView implements CreateViewInterface
{
    private $data;
    private $createForm;

    public function __construct(CreateForm $createForm, array $data)
    {
       $this->createForm = $createForm;
        $this->data = $data;
    }

    private function app()
    {
        $data = $this->data;
        $forms = $data;
        foreach ($forms as $form) {
            $this->createForm->run($form);
        }
    }

    public function view()
    {
?>
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
            <link rel="stylesheet" href="./css/style.css">
            <meta name="description" content="Dynamic forms project in php">
        </head>

        <body>
            <?php
            $this->app($this->data);
            ?>
        </body>

        </html>
<?php
    }
}
