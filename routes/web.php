<?php

use App\Models\Entries;
use App\Models\Region;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $entries_model = new Entries();
    $entries = $entries_model->paginate(20);
    return view('index',compact("entries"));
});


Route::get("test", function(){
    $regions_Arr = [];
        $region_model = new Region();
        $regions = $region_model->select("region")->get();
        foreach ($regions as $region => $value) {
            array_push($regions_Arr,$value['region']);
        }
    dd($regions_Arr);
});
