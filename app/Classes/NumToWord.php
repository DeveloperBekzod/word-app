<?php

namespace App\Classes;

class NumToWord
{

    public static function convertNumberToWord($num = false)
    {
        $num = str_replace([',', ' '], '', trim($num));
        if (!$num) {
            return false;
        }
        $num        = (int)$num;
        $words      = [];
        $list1      = [
            '',
            'бир',
            'икки',
            'уч',
            'тўрт',
            'беш',
            'олти',
            'етти',
            'саккиз',
            'тўққиз',
            'ун',
            'ўн бир',
            'ўн икки',
            'ўн уч',
            'ўн тўрт',
            'ўн беш',
            'ўн олти',
            'ўн етти',
            'ўн саккиз',
            'ўн тўққиз',
        ];
        $list2      = ['', 'ўн', 'йигирма', 'ўттиз', 'қирқ', 'эллик', 'олтмиш', 'етмиш', 'саксон', 'тўқсон', 'юз'];
        $list3      = [
            '',
            'минг',
            'миллион',
            'миллиард',
            'триллиард',
            'quadrillion',
            'quintillion',
            'sextillion',
            'septillion',
            'octillion',
            'nonillion',
            'decillion',
            'undecillion',
            'duodecillion',
            'tredecillion',
            'quattuordecillion',
            'quindecillion',
            'sexdecillion',
            'septendecillion',
            'octodecillion',
            'novemdecillion',
            'vigintillion',
        ];
        $num_length = strlen($num);
        $levels     = (int)(($num_length + 2) / 3);
        $max_length = $levels * 3;
        $num        = substr('00' . $num, -$max_length);
        $num_levels = str_split($num, 3);
        foreach ($num_levels as $iValue) {
            $levels--;
            $hundreds = (int)($iValue / 100);
            $hundreds = ($hundreds ? ' ' . $list1[$hundreds] . ' юз' . ' ' : '');
            $tens     = (int)($iValue % 100);
            $singles  = '';
            if ($tens < 20) {
                $tens = ($tens ? ' ' . $list1[$tens] . ' ' : '');
            } else {
                $tens    = (int)($tens / 10);
                $tens    = ' ' . $list2[$tens] . ' ';
                $singles = (int)($iValue % 10);
                $singles = ' ' . $list1[$singles] . ' ';
            }
            $words[] = $hundreds . $tens . $singles . (($levels && (int)($iValue)) ? ' ' . $list3[$levels] . ' ' : '');
        } //end for loop
        $commas = count($words);
        if ($commas > 1) {
            --$commas;
        }

        return self::mb_ucfirst(implode(' ', $words));
    }
    public static function mb_ucfirst($value)
    {
        return mb_strtoupper(mb_substr($value, 0, 1)) . mb_substr($value, 1);
    }
}
