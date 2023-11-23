<?php

namespace NumberToWords\Language\Urdu;

use NumberToWords\Language\Dictionary;

class UrduDictionary implements Dictionary
{
    public const LOCALE = 'ur';
    public const LANGUAGE_NAME = 'Urdu';
    public const LANGUAGE_NAME_NATIVE = 'اردو';

    private static array $units = [
        '',
        'ایک',
        'دو',
        'تین',
        'چار',
        'پانچ',
        'چھ',
        'سات',
        'آٹھ',
        'نو'
    ];

    private static array $teens = [
        'دس',
        'گیارہ',
        'بارہ',
        'تیرہ',
        'چودہ',
        'پندرہ',
        'سولہ',
        'سترہ',
        'اٹھارہ',
        'انیس'
    ];

    private static array $tens = [
        '',
        'دس',
        'بیس',
        'تیس',
        'چالیس',
        'پچاس',
        'ساٹھ',
        'ستر',
        'اسی',
        'نوے'
    ];

    private static string $hundred = 'سو';

    public static array $currencyNames = [
        'AED' => [['درہم'], ['فلس']],
        'EUR' => [['یورو'], ['یورو سینٹ']],
        'GBP' => [['پاؤنڈ', 'پاؤنڈز'], ['پینی', 'پینی']],
        'USD' => [['ڈالر'], ['سینٹ']],
        'PKR' => [['روپیہ'], ['پیسہ']],
    ];

    public function getZero(): string
    {
        return 'صفر';
    }

    public function getMinus(): string
    {
        return 'منفی';
    }

    public function getCorrespondingUnit(int $unit): string
    {
        return self::$units[$unit];
    }

    public function getCorrespondingTen(int $ten): string
    {
        return self::$tens[$ten];
    }

    public function getCorrespondingTeen(int $teen): string
    {
        return self::$teens[$teen];
    }

    public function getCorrespondingHundred(int $hundred): string
    {
        return self::$units[$hundred] . ' ' . self::$hundred;
    }
}
