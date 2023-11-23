<?php

namespace NumberToWords\CurrencyTransformer;

class UrduCurrencyTransformerTest extends CurrencyTransformerTest
{
    protected function setUp(): void
    {
        $this->currencyTransformer = new EnglishCurrencyTransformer();
    }

    public function providerItConvertsMoneyAmountToWords(): array
    {
        return [
            [6474, 'PKR', 'پانچ ہزار ایک سو بیس'],
//            [6574, 'PKR', 'sixty-five dollars seventy-four cents'],
//            [8174, 'PKR', 'eighty-one dollars seventy-four cents'],
//            [8255, 'PKR', 'eighty-two dollars fifty-five cents'],
//            [72900, 'PKR', 'seven hundred twenty-nine dollars'],
//            [89400, 'PKR', 'eight hundred ninety-four dollars'],
//            [99900, 'PKR', 'nine hundred ninety-nine dollars'],
//            [100000, 'PKR', 'one thousand dollars'],
//            [100100, 'PKR', 'one thousand one dollars'],
//            [109725, 'PKR', 'one thousand ninety-seven dollars twenty-five cents'],
//            [110400, 'PKR', 'one thousand one hundred four dollars'],
//            [124380, 'PKR', 'one thousand two hundred forty-three euros eighty euro-cents'],
//            [238500, 'PKR', 'two thousand three hundred eighty-five dollars'],
//            [376600, 'PKR', 'three thousand seven hundred sixty-six dollars'],
//            [419645, 'PKR', 'four thousand one hundred ninety-six zlotys forty-five groszs'],
//            [584600, 'PKR', 'five thousand eight hundred forty-six dollars'],
//            [645900, 'PKR', 'six thousand four hundred fifty-nine dollars'],
//            [723200, 'PKR', 'seven thousand two hundred thirty-two dollars'],
//            [123456789, 'PKR', 'one million two hundred thirty-four thousand five hundred sixty-seven CFP francs eighty-nine centimes'],
//            [-72925, 'PKR', 'minus seven hundred twenty-nine dollars twenty-five cents'],
//            [-89425, 'PKR', 'minus eight hundred ninety-four dollars twenty-five cents'],
//            [-99925, 'PKR', 'minus nine hundred ninety-nine dollars twenty-five cents'],
        ];
    }
}
