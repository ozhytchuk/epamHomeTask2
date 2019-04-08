<?php

/*  Перетворити рядок 'var_test_text' в 'varTestText'.  */
function removeSlash($str)
{
    $newStr = '';
    for ($i = 0; $i < strlen($str); $i++) {
        if ($str[$i] == '_') {
            $newStr .= strtoupper($str[$i+1]);
            $i++;
            continue;
        }
        $newStr .= $str[$i];
    }
    return (!empty($newStr)) ? $newStr : $str;
}

/*
    Є рядок наступного вигляду: 4 літери, потім пробіл, потім ще 4 літери.
    Наприклад, такий рядок 'ФЫВА олдж'.
    Треба перетворити на наступний рядок 'АВЫФ ждло'. !!!! UTF-8
*/
function reverseString($str, $encoding='UTF-8')
{
    $newStr = explode(' ', $str);
    $reverseStr = '';
    for ($i = 0; $i < count($newStr); $i++) {
        $reverseStr .= mb_convert_encoding(strrev(mb_convert_encoding($newStr[$i], 'UTF-16BE', $encoding)),
                $encoding, 'UTF-16LE') . ' ';
    }

    return trim($reverseStr);
}

/*
    Є масив $a = [342, 55, 33, 123, 66, 63, 9];
    Потрібно вивести на екран тільки ті числа в яких є '3'
*/
function findNumInArray($array, $findNum)
{
    $arrayNums = [];
    $newArray = [];
    for ($i = 0; $i < count($array); $i++) {
        $splitNum = str_split($array[$i]);
        array_push($arrayNums, $splitNum);
        for ($j = 0; $j < count($arrayNums); $j++) {
            if ($arrayNums[$i][$j] == $findNum) {
                array_push($newArray, $array[$i]);
                break;
            }
        }
    }
    return (!empty($newArray)) ? $newArray : $findNum . ' is not found';
}

/*
    Є масив $a = [342, 55, 33, 123, 66, 63, 9];
    Треба порахувати – скільки всього трійок зустрічається в масиві
*/
function countNums($array, $findNum)
{
    $arrayNums = [];
    $count = 0;
    for ($i = 0; $i < count($array); $i++) {
        $splitNum = str_split($array[$i]);
        array_push($arrayNums, $splitNum);
        for ($j = 0; $j < count($array); $j++) {
            if ($arrayNums[$i][$j] == $findNum) {
                $count++;
            }
        }
    }
    return $count;
}

/*
    My friend wants a new band name for her band.
    She likes bands that use the formula: 'The' + a noun with first letter capitalized.
    However, when a noun STARTS and ENDS with the same letter, she likes to repeat
    the noun twice and connect them together with the first and last letter, combined into
    one word like so (WITHOUT a 'The' in front):

    dolphin -> The Dolphin
    alaska -> Alaskalaska
    europe -> Europeurope
*/
function bandName($nameGroup)
{
    $last = strlen($nameGroup) - 1;

    if ($nameGroup[0] == $nameGroup[$last]) {
        $short = substr($nameGroup, 1, $last);

        return ucfirst($nameGroup . '' . $short);
    }

    return 'The ' . ucfirst($nameGroup);
}

/*
    We have chars mapping: A => T, C => G.
    You need to create a converter for strings with the results:
    "ATTGC" -> returns "TAACG",
    "GTAT" -> returns "CATA"
*/
function charsMapping($str)
{
    $newStr = '';
    for ($i = 0; $i < strlen($str); $i++) {
        switch (!is_numeric($str[$i])) {
            case ($str[$i] == 'A'):
                $newStr .= 'T';
                break;
            case ($str[$i] == 'T'):
                $newStr .= 'A';
                break;
            case ($str[$i] == 'C'):
                $newStr .= 'G';
                break;
            case ($str[$i] == 'G'):
                $newStr .= 'C';
                break;
            default:
                $newStr .= $str[$i];
        }
    }
    return $newStr;
}