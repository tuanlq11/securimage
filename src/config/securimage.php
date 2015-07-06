<?php

return [
    'length' => env('SECURIMAGE_LENGTH', 5),
    'width'  => env('SECURIMAGE_WIDTH', 150),
    'height'  => env('SECURIMAGE_HEIGHT', 50),
    'perturbation' => env('SECURIMAGE_PERTURBATION', .75),
    'case_sensitive' => env('SECURIMAGE_CASE_SENSITIVE', true),
    'num_lines' => env('SECURIMAGE_NUM_LINES', 0),
    'charset' => env('SECURIMAGE_CHARSET', 'ABCDEFGHIJKLMNOPQRSTUVWXYZqwertyuiopasdfghjklzxcvbnm!@#$%^&*()_+{}:"<>?')
];