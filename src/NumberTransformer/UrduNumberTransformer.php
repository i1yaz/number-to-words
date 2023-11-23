<?php

namespace NumberToWords\NumberTransformer;

use NumberToWords\Language\Urdu\UrduDictionary;
use NumberToWords\Language\Urdu\UrduExponentGetter;
use NumberToWords\Language\Urdu\UrduTripletTransformer;
use NumberToWords\Service\NumberToTripletsConverter;

class UrduNumberTransformer implements NumberTransformer
{
    public function toWords(int $number): string
    {
        $dictionary = new UrduDictionary();
        $numberToTripletsConverter = new NumberToTripletsConverter();
        $tripletTransformer = new UrduTripletTransformer($dictionary);
        $exponentInflector = new UrduExponentGetter();

        $numberTransformer = (new NumberTransformerBuilder())
            ->withDictionary($dictionary)
            ->withWordsSeparatedBy(' ')
            ->transformNumbersBySplittingIntoTriplets($numberToTripletsConverter, $tripletTransformer)
            ->useRegularExponents($exponentInflector)
            ->build();

        return $numberTransformer->toWords($number);
    }
}
