<?php

return [
    'length' => env('SECURIMAGE_LENGTH', 5),
    'width'  => env('SECURIMAGE_WIDTH', 150),
    'height'  => env('SECURIMAGE_HEIGHT', 50),
    'perturbation' => env('SECURIMAGE_PERTURBATION', .75),
    'case_sensitive' => env('SECURIMAGE_CASE_SENSITIVE', true)
];