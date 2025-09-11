<?php

$formMinimal = [
    'form_id' => 'main_request_form',
    'themeStyle' => 'theme-minimal',
    'formAction' => 'https://google.com',
    'formTitle' => 'Request Form',
    'buttonName' => 'Submit Request',
    'fields' => [
        // hidden field
        [
            "fieldType" => "text",
            "fieldId" => "user_id",
            "fieldName" => "user_id",
            "fieldValue" => "12345",
            "hidden" => true // hidden
        ],
        // Text field
        [
            "fieldType" => "text",
            "fieldLabel" => "Full Name",
            "fieldId" => "full_name",
            "fieldName" => "full_name",
            "fieldValue" => "John Doe",
            "required" => true
        ],
        // Number field
        [
            "fieldType" => "number",
            "fieldLabel" => "Cell phone number",
            "fieldId" => "cell_phone_number",
            "fieldName" => "cell_phone_number",
            "fieldValue" => "(+57) 3212962876",
            "required" => true
        ],
        // Email field
        [
            "fieldType" => "email",
            "fieldLabel" => "Email Address",
            "fieldId" => "user_email",
            "fieldName" => "user_email",
            "fieldValue" => "",
            "required" => true
        ],
        // Password field
        [
            "fieldType" => "password",
            "fieldLabel" => "Password",
            "fieldId" => "user_pass",
            "fieldName" => "user_pass",
            "fieldValue" => "",
            "required" => true
        ],
        // Text area
        [
            "fieldType" => "textarea",
            "fieldLabel" => "Additional Comments",
            "fieldId" => "comments",
            "fieldName" => "comments",
            "fieldValue" => "Write your comments here.",
            "required" => false
        ],
        // Select field (dropdown)
        [
            "fieldType" => "select",
            "fieldLabel" => "Country",
            "fieldId" => "country",
            "fieldName" => "country",
            "options" => [
                ["value" => "co", "text" => "Colombia", "selected" => true],
                ["value" => "mx", "text" => "Mexico"],
                ["value" => "ar", "text" => "Argentina"]
            ],
            "required" => true
        ],
        // Checkbox field
        [
            "fieldType" => "checkbox",
            "fieldLabel" => "I accept terms",
            "fieldId" => "terms",
            "fieldName" => "terms",
            "checked" => true
        ],
        // Radio fields
        [
            "fieldType" => "radio",
            "fieldLabel" => "Gender",
            "fieldName" => "gender",
            "options" => [
                ["id" => "gen_m", "value" => "male", "label" => "Male"],
                ["id" => "gen_f", "value" => "female", "label" => "Female", "checked" => true],
                ["id" => "gen_o", "value" => "other", "label" => "Other"]
            ]
        ],
    ]
];

$formBlue = [
    'form_id' => 'main_request_form',
    'themeStyle' => 'theme-blue',
    'formAction' => 'https://recuplast.com.co/despliegue_bodegas_view_prov/public/guardar_serv_lav.php',
    'formTitle' => 'Request Form',
    'buttonName' => 'Submit Request',
    'fields' => [
        // hidden field
        [
            "fieldType" => "text",
            "fieldId" => "user_id",
            "fieldName" => "user_id",
            "fieldValue" => "12345",
            "hidden" => true // hidden
        ],
        // Text field
        [
            "fieldType" => "text",
            "fieldLabel" => "Full Name",
            "fieldId" => "full_name",
            "fieldName" => "full_name",
            "fieldValue" => "John Doe",
            "required" => true
        ],
        // Number field
        [
            "fieldType" => "number",
            "fieldLabel" => "Cell phone number",
            "fieldId" => "cell_phone_number",
            "fieldName" => "cell_phone_number",
            "fieldValue" => "(+57) 3212962876",
            "required" => true
        ],
        // Email field
        [
            "fieldType" => "email",
            "fieldLabel" => "Email Address",
            "fieldId" => "user_email",
            "fieldName" => "user_email",
            "fieldValue" => "",
            "required" => true
        ],
        // Password field
        [
            "fieldType" => "password",
            "fieldLabel" => "Password",
            "fieldId" => "user_pass",
            "fieldName" => "user_pass",
            "fieldValue" => "",
            "required" => true
        ],
        // Text area
        [
            "fieldType" => "textarea",
            "fieldLabel" => "Additional Comments",
            "fieldId" => "comments",
            "fieldName" => "comments",
            "fieldValue" => "Write your comments here.",
            "required" => false
        ],
        // Select field (dropdown)
        [
            "fieldType" => "select",
            "fieldLabel" => "Country",
            "fieldId" => "country",
            "fieldName" => "country",
            "options" => [
                ["value" => "co", "text" => "Colombia", "selected" => true],
                ["value" => "mx", "text" => "Mexico"],
                ["value" => "ar", "text" => "Argentina"]
            ],
            "required" => true
        ],
        // Checkbox field
        [
            "fieldType" => "checkbox",
            "fieldLabel" => "I accept terms",
            "fieldId" => "terms",
            "fieldName" => "terms",
            "checked" => true
        ],
        // Radio fields
        [
            "fieldType" => "radio",
            "fieldLabel" => "Gender",
            "fieldName" => "gender",
            "options" => [
                ["id" => "gen_m", "value" => "male", "label" => "Male"],
                ["id" => "gen_f", "value" => "female", "label" => "Female", "checked" => true],
                ["id" => "gen_o", "value" => "other", "label" => "Other"]
            ]
        ],
    ]
];

$formGreen = [
    'form_id' => 'main_request_form',
    'themeStyle' => 'theme-green',
    'formAction' => 'https://recuplast.com.co/despliegue_bodegas_view_prov/public/guardar_serv_lav.php',
    'formTitle' => 'Request Form',
    'buttonName' => 'Submit Request',
    'fields' => [
        // hidden field
        [
            "fieldType" => "text",
            "fieldId" => "user_id",
            "fieldName" => "user_id",
            "fieldValue" => "12345",
            "hidden" => true // hidden
        ],
        // Text field
        [
            "fieldType" => "text",
            "fieldLabel" => "Full Name",
            "fieldId" => "full_name",
            "fieldName" => "full_name",
            "fieldValue" => "John Doe",
            "required" => true
        ],
        // Number field
        [
            "fieldType" => "number",
            "fieldLabel" => "Cell phone number",
            "fieldId" => "cell_phone_number",
            "fieldName" => "cell_phone_number",
            "fieldValue" => "(+57) 3212962876",
            "required" => true
        ],
        // Email field
        [
            "fieldType" => "email",
            "fieldLabel" => "Email Address",
            "fieldId" => "user_email",
            "fieldName" => "user_email",
            "fieldValue" => "",
            "required" => true
        ],
        // Password field
        [
            "fieldType" => "password",
            "fieldLabel" => "Password",
            "fieldId" => "user_pass",
            "fieldName" => "user_pass",
            "fieldValue" => "",
            "required" => true
        ],
        // Text area
        [
            "fieldType" => "textarea",
            "fieldLabel" => "Additional Comments",
            "fieldId" => "comments",
            "fieldName" => "comments",
            "fieldValue" => "Write your comments here.",
            "required" => false
        ],
        // Select field (dropdown)
        [
            "fieldType" => "select",
            "fieldLabel" => "Country",
            "fieldId" => "country",
            "fieldName" => "country",
            "options" => [
                ["value" => "co", "text" => "Colombia", "selected" => true],
                ["value" => "mx", "text" => "Mexico"],
                ["value" => "ar", "text" => "Argentina"]
            ],
            "required" => true
        ],
        // Checkbox field
        [
            "fieldType" => "checkbox",
            "fieldLabel" => "I accept terms",
            "fieldId" => "terms",
            "fieldName" => "terms",
            "checked" => true
        ],
        // Radio fields
        [
            "fieldType" => "radio",
            "fieldLabel" => "Gender",
            "fieldName" => "gender",
            "options" => [
                ["id" => "gen_m", "value" => "male", "label" => "Male"],
                ["id" => "gen_f", "value" => "female", "label" => "Female", "checked" => true],
                ["id" => "gen_o", "value" => "other", "label" => "Other"]
            ]
        ],
    ]
];

$formDark = [
    'form_id' => 'main_request_form',
    'themeStyle' => 'theme-dark',
    'formAction' => 'https://recuplast.com.co/despliegue_bodegas_view_prov/public/guardar_serv_lav.php',
    'formTitle' => 'Request Form',
    'buttonName' => 'Submit Request',
    'fields' => [
        // hidden field
        [
            "fieldType" => "text",
            "fieldId" => "user_id",
            "fieldName" => "user_id",
            "fieldValue" => "12345",
            "hidden" => true // hidden
        ],
        // Text field
        [
            "fieldType" => "text",
            "fieldLabel" => "Full Name",
            "fieldId" => "full_name",
            "fieldName" => "full_name",
            "fieldValue" => "John Doe",
            "required" => true
        ],
        // Number field
        [
            "fieldType" => "number",
            "fieldLabel" => "Cell phone number",
            "fieldId" => "cell_phone_number",
            "fieldName" => "cell_phone_number",
            "fieldValue" => "(+57) 3212962876",
            "required" => true
        ],
        // Email field
        [
            "fieldType" => "email",
            "fieldLabel" => "Email Address",
            "fieldId" => "user_email",
            "fieldName" => "user_email",
            "fieldValue" => "",
            "required" => true
        ],
        // Password field
        [
            "fieldType" => "password",
            "fieldLabel" => "Password",
            "fieldId" => "user_pass",
            "fieldName" => "user_pass",
            "fieldValue" => "",
            "required" => true
        ],
        // Text area
        [
            "fieldType" => "textarea",
            "fieldLabel" => "Additional Comments",
            "fieldId" => "comments",
            "fieldName" => "comments",
            "fieldValue" => "Write your comments here.",
            "required" => false
        ],
        // Select field (dropdown)
        [
            "fieldType" => "select",
            "fieldLabel" => "Country",
            "fieldId" => "country",
            "fieldName" => "country",
            "options" => [
                ["value" => "co", "text" => "Colombia", "selected" => true],
                ["value" => "mx", "text" => "Mexico"],
                ["value" => "ar", "text" => "Argentina"]
            ],
            "required" => true
        ],
        // Checkbox field
        [
            "fieldType" => "checkbox",
            "fieldLabel" => "I accept terms",
            "fieldId" => "terms",
            "fieldName" => "terms",
            "checked" => true
        ],
        // Radio fields
        [
            "fieldType" => "radio",
            "fieldLabel" => "Gender",
            "fieldName" => "gender",
            "options" => [
                ["id" => "gen_m", "value" => "male", "label" => "Male"],
                ["id" => "gen_f", "value" => "female", "label" => "Female", "checked" => true],
                ["id" => "gen_o", "value" => "other", "label" => "Other"]
            ]
        ],
    ]
];

$data = [
    $formMinimal,
    $formBlue,
    $formGreen,
    $formDark
];
