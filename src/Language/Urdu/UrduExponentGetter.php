<?php

namespace NumberToWords\Language\Urdu;

use NumberToWords\Language\ExponentGetter;

class UrduExponentGetter implements ExponentGetter
{
    private static array $exponent = [
        '',
        'ہزار',
        'ملین',
        'بلین',
        'ٹریلین',
        'کوآڈریلین',
        'کوئنٹیلین',
        'سکسٹیلین',
        'سپٹیلین',
        'اکٹیلین',
        'نونیلین',
        'دسیلین',
        'انڈیسیلین',
        'ڈیسیلین',
        'تریڈیسیلین',
        'کوآڈریسیلین',
        'کوینڈیسیلین',
        'سیکڈیسیلین',
        'سپتیڈیسیلین',
        'اکتیسیڈیسیلین',
        'نویڈیسیلین',
        'ویجنٹیلین',
    ];

    public function getExponent(int $power): string
    {
        return self::$exponent[$power];
    }
}
