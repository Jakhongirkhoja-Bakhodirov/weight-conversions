<?php

use Bakhodirov\WeightConversions\Weight;

it('it converts to kilograms to pounds', function () {
    $pounds = Weight::kilograms(100)->toPounds();
    expect($pounds)->toEqual(220.46);
});

it('it converts to kilograms to stones', function () {
    $stones = Weight::kilograms(100)->toStones();
    expect($stones)->toEqual(15.747300000000001);
});
