<?php

namespace App\Helpers;

class Helper
{
    public static function convertKeyNumberToAlphabet($index): string
    {
        $arrString = ['A', 'B', 'C', 'D', 'E', 'F'];
        return $arrString[$index] ?? 'A';
    }

    public static function handleCheckIsRightOption($options)
    {
        if (empty($options)) {
            return '';
        }

        foreach ($options as $option) {
            if ($option->is_right_option) {
                return $option->id;
            }
        }

        return '';
    }
}
