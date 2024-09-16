<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/intro', function () {
    return view('introduction');
});

Route::get('/month', function () {
    return view('month');
});

use App\Http\Controllers\QuranIndex;
Route::get('/quran', [QuranIndex::class, "getContents"]);

use App\Http\Controllers\SurahIndex;
Route::get('/surah', [SurahIndex::class, "getContents"]);

Route::get('/info/{username}/{userid?}', function ($name, $id = null) {


    echo "Name " . $name . "<br>";
    echo "ID " . $id . "<br>";
});


Route::get('/information/{username}/{userid?}', function ($name, $id = null) {

    $student = "<em>Shaaf</em>";
    $data = compact('name', 'id', 'student');
    return view('info')->with($data);
});

Route::get('/marksheet/{username}/eng/{english}/urdu/{urdu}/isl/{islamiyat}/maths/{mathematics}/chem/{chemistry}/comp/{computer}/phy/{physics}/', function ($name, $english, $urdu, $islamiyat, $mathematics, $chemistry, $computer, $physics) {


    $data = compact('name', 'english', 'urdu', 'islamiyat', 'mathematics', 'chemistry', 'computer','physics');
    return view('marks')->with($data);
});


?>


