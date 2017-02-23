<?php

Route::get('calculator', function() {
    echo 'Hello from the calculator package!';
});

Route::get('add/{a}/{b}', 'Ekosijabat\Oncomcalc\CalculatorController@add');
Route::get('subtract/{a}/{b}', 'Ekosijabat\Oncomcalc\CalculatorController@subtract');
