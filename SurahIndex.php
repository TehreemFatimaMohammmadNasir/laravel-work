<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SurahIndex extends Controller
{
    //
    function getContents()
    {

        //  echo "working ......";

        if (isset($_POST["snum"])) {

        $snumber = $_POST["snum"];

        $mydata = Http::get("https://api.alquran.cloud/v1/surah/$snumber/ar.abdurrahmaansudais");
       

        return View("surah", ["surahdata" => $mydata["data"]["ayahs"]]);
    }
}
}
