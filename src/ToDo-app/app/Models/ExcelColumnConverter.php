<?php
declare(strict_types=1);

namespace App\Models;
class ExcelColumnConverter
{
    // 数値で表された列の番号を元に、アルファベット表記の列名を返す
    public static function calcAlphabetColumnName(int $number): string
    {
        return chr(ord('A') + $number);
    }
    
    //アルファベット表記の列名を元に、数値で表された列の番号を返す
    public static function calNumberColumnName(string $alphabet): int
    {
        return ord($alphabet) - ord('A');
    }
}