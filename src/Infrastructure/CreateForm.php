<?php
namespace App\Infrastructure;

use App\Domain\Infrastructure\CreateFormInterface;

class CreateForm implements CreateFormInterface
{
    private string $theme;
    private string $formAction;
    private string $formTitle;
    private string $buttonName;

    public function __construct()
    {
    }

    private function getTheme() {
        return $this->theme;
    }
    private function getFormAction() {
        return $this->formAction;
    }
    private function getFormTitle() {
        return $this->formTitle;
    }
    private function getButtonName() {
        return $this->buttonName;
    }

    public function run($data)
    {
        $this->theme = $data['themeStyle'];
        $this->formAction = $data['formAction'];
        $this->formTitle = $data['formTitle'];
        $this->buttonName = $data['buttonName'];
        $fields = $data['fields'];
?>
        <form action="<?= htmlspecialchars($this->getFormAction() ?? '', ENT_QUOTES, 'UTF-8') ?>" method="post" class="<?= htmlspecialchars($this->getTheme() ?? '', ENT_QUOTES, 'UTF-8') ?>">
            <h2><?= htmlspecialchars($this->getFormTitle() ?? '', ENT_QUOTES, 'UTF-8') ?></h2>
            <input type="hidden" id="form_id" name="form_id" value="<?= htmlspecialchars($data['form_id'] ?? '', ENT_QUOTES, 'UTF-8') ?>">
            <?php

            foreach ($fields as $field) {
                switch ($field['fieldType']) {
                    case 'text':
                        $this->createFieldText($field);
                        break;
                    case 'email':
                        $this->createFieldEmail($field);
                        break;
                    case 'password':
                        $this->createFieldPassword($field);
                        break;
                    case 'textarea':
                        $this->createFieldTextarea($field);
                        break;
                    case 'select':
                        $this->createFieldSelect($field);
                        break;
                    case 'checkbox':
                        $this->createFieldCheckbox($field);
                        break;
                    case 'radio':
                        $this->createFieldRadio($field);
                        break;
                        // Agrega más tipos de campos aquí
                }
            }
            ?>
            <button type="submit" class="form-btn"><?= htmlspecialchars($this->getButtonName() ?? '', ENT_QUOTES, 'UTF-8') ?></button>
        </form>
    <?php
    }

    private function createFieldText($field)
    {
        $this->createInputField($field, 'text');
    }

    private function createFieldEmail($field)
    {
        $this->createInputField($field, 'email');
    }

    private function createFieldPassword($field)
    {
        $this->createInputField($field, 'password');
    }

    private function createInputField($field, $type)
    {
        $label = htmlspecialchars($field['fieldLabel'] ?? '', ENT_QUOTES, 'UTF-8');
        $id = htmlspecialchars($field['fieldId'] ?? '', ENT_QUOTES, 'UTF-8');
        $name = htmlspecialchars($field['fieldName'] ?? '', ENT_QUOTES, 'UTF-8');
        $value = htmlspecialchars($field['fieldValue'] ?? '', ENT_QUOTES, 'UTF-8');
        $required = isset($field['required']) && $field['required'] ? 'required' : '';
    ?>
        <div class="form-grup">
            <label for="<?= $id ?>"><?= $label ?>:</label>
            <input type="<?= $type ?>" id="<?= $id ?>" name="<?= $name ?>" value="<?= $value ?>" <?= $required ?>>
        </div>
    <?php
    }

    private function createFieldTextarea($field)
    {
        $label = htmlspecialchars($field['fieldLabel'] ?? '', ENT_QUOTES, 'UTF-8');
        $id = htmlspecialchars($field['fieldId'] ?? '', ENT_QUOTES, 'UTF-8');
        $name = htmlspecialchars($field['fieldName'] ?? '', ENT_QUOTES, 'UTF-8');
        $value = htmlspecialchars($field['fieldValue'] ?? '', ENT_QUOTES, 'UTF-8');
        $required = isset($field['required']) && $field['required'] ? 'required' : '';
    ?>
        <div class="form-grup">
            <label for="<?= $id ?>"><?= $label ?>:</label>
            <textarea id="<?= $id ?>" name="<?= $name ?>" <?= $required ?>><?= $value ?></textarea>
        </div>
    <?php
    }

    private function createFieldSelect($field)
    {
        $label = htmlspecialchars($field['fieldLabel'] ?? '', ENT_QUOTES, 'UTF-8');
        $id = htmlspecialchars($field['fieldId'] ?? '', ENT_QUOTES, 'UTF-8');
        $name = htmlspecialchars($field['fieldName'] ?? '', ENT_QUOTES, 'UTF-8');
        $options = $field['options'] ?? [];
        $required = isset($field['required']) && $field['required'] ? 'required' : '';
    ?>
        <div class="form-grup">
            <label for="<?= $id ?>"><?= $label ?>:</label>
            <select id="<?= $id ?>" name="<?= $name ?>" <?= $required ?>>
                <?php foreach ($options as $option) :
                    $value = htmlspecialchars($option['value'] ?? '', ENT_QUOTES, 'UTF-8');
                    $text = htmlspecialchars($option['text'] ?? '', ENT_QUOTES, 'UTF-8');
                    $selected = isset($option['selected']) && $option['selected'] ? 'selected' : '';
                ?>
                    <option value="<?= $value ?>" <?= $selected ?>><?= $text ?></option>
                <?php endforeach; ?>
            </select>
        </div>
    <?php
    }

    private function createFieldCheckbox($field)
    {
        $label = htmlspecialchars($field['fieldLabel'] ?? '', ENT_QUOTES, 'UTF-8');
        $id = htmlspecialchars($field['fieldId'] ?? '', ENT_QUOTES, 'UTF-8');
        $name = htmlspecialchars($field['fieldName'] ?? '', ENT_QUOTES, 'UTF-8');
        $checked = isset($field['checked']) && $field['checked'] ? 'checked' : '';
    ?>
        <div class="form-grup">
            <input type="checkbox" id="<?= $id ?>" name="<?= $name ?>" <?= $checked ?>>
            <label for="<?= $id ?>"><?= $label ?></label>
        </div>
    <?php
    }

    private function createFieldRadio($field)
    {
        $legend = htmlspecialchars($field['fieldLabel'] ?? '', ENT_QUOTES, 'UTF-8');
        $name = htmlspecialchars($field['fieldName'] ?? '', ENT_QUOTES, 'UTF-8');
        $options = $field['options'] ?? [];
    ?>
        <fieldset class="form-grup">
            <legend><?= $legend ?>:</legend>
            <?php foreach ($options as $option) :
                $id = htmlspecialchars($option['id'] ?? '', ENT_QUOTES, 'UTF-8');
                $value = htmlspecialchars($option['value'] ?? '', ENT_QUOTES, 'UTF-8');
                $label = htmlspecialchars($option['label'] ?? '', ENT_QUOTES, 'UTF-8');
                $checked = isset($option['checked']) && $option['checked'] ? 'checked' : '';
            ?>
                <div>
                    <input type="radio" id="<?= $id ?>" name="<?= $name ?>" value="<?= $value ?>" <?= $checked ?>>
                    <label for="<?= $id ?>"><?= $label ?></label>
                </div>
            <?php endforeach; ?>
        </fieldset>
<?php
    }
}
