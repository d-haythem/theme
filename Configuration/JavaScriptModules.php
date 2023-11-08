<?php

return [
    'dependencies' => [
        'backend',
    ],
    'tags' => [
        'backend.form',
    ],
    'imports' => [
        '@typo3/rte-ckeditor/ckeditor5.js' => 'EXT:theme/Resources/Public/JavaScript/ckeditor5/ckeditor5.js',
        '@ckeditor/ckeditor5-image' => 'EXT:theme/Resources/Public/Contrib/@ckeditor/ckeditor5-image.js',
    ],
];