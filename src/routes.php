<?php

Route::get('rbs', function () {
    echo "Hello From rbs report package";
});


Route::get('add/{a}/{b}', [RBS\Rbsreports\RbsreportsController::class, 'add']);
Route::get('substarct/{a}/{b}', [RBS\Rbsreports\RbsreportsController::class, 'substarct']);