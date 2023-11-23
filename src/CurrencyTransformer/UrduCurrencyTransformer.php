<?php

namespace NumberToWords\CurrencyTransformer;

use NumberToWords\CurrencyTransformer\CurrencyTransformer;
use NumberToWords\Exception\NumberToWordsException;
use NumberToWords\Language\English\UrduDictionary;
use NumberToWords\Language\English\UrduExponentGetter;
use NumberToWords\Language\English\UrduTripletTransformer;
use NumberToWords\NumberTransformer\NumberTransformerBuilder;
use NumberToWords\Service\NumberToTripletsConverter;
use NumberToWords\TransformerOptions\CurrencyTransformerOptions;

class UrduCurrencyTransformer implements CurrencyTransformer
{

    /**
     * @inheritDoc
     */
    public function toWords(int $amount, string $currency, ?CurrencyTransformerOptions $options = null): string
    {
        // TODO: Implement toWords() method.
    }
}