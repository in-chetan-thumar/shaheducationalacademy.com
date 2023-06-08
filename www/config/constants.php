<?php
return [
    'APP_NAME' => env('APP_NAME', ''),
    'CC_EMAILS' => [],
    'TO_EMAIL' => 'customer.connect@kscheemagroup.com',
    'PER_PAGE' => 10,
    'SUPER_ADMIN' => 'Super Admin',
    // FILE UPLOAD PATH
    'USER_DOC_PATH' => 'public' . DIRECTORY_SEPARATOR,
    'USER_DOC_URL' => 'storage' . DIRECTORY_SEPARATOR,
    'ASSIGNMENT_DOC_PATH' => 'public' . DIRECTORY_SEPARATOR . 'assignment' . DIRECTORY_SEPARATOR,
    'ASSIGNMENT_DOC_URL' => 'storage' . DIRECTORY_SEPARATOR . 'assignment' . DIRECTORY_SEPARATOR,
    'SOLUTION_DOC_PATH' => 'public' . DIRECTORY_SEPARATOR . 'solution' . DIRECTORY_SEPARATOR,
    'SOLUTION_DOC_URL' => 'storage' . DIRECTORY_SEPARATOR . 'solution' . DIRECTORY_SEPARATOR,
    // APP VERSION
    'APP_VERSION' => env('APP_VERSION', '1.0'),
    'LOGO_FILE_NAME' => 'logo-dark.png',
    'DEVELOPED_BY' => 'Zero technology',
    'SUBJECT' => [
        'Student\'s query' => 'Student\'s query',
        'Parent\'s query' => 'Parent\'s query',
        'Franchise registration' => 'Franchise registration',
        'Register a complaint' => 'Register a complaint',
        'Feedback' => 'Feedback',
        'Work with SEA' => 'Work with SEA',
    ],
];
