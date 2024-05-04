<?php

use Bakhodirov\WeightConversions\Weight;

it('it converts to kilograms to pounds', function () {
    $pounds =  Weight::kilograms(100)->toPounds();
    expect($pounds)->toEqual(220.46);
});
