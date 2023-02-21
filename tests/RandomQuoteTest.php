<?php

use Natanfiuza\RandomQuotes\RandomQuote;

it('shoulf return a Stephen Hawking quote', function () {
    $fakeClient = getResponseClient();
    $quoteClass = new RandomQuote($fakeClient);
    $quote = $quoteClass->from('Stephen Hawking');
    expect($quote)->toBe('Be curious. by Stephen Hawking');    
});
