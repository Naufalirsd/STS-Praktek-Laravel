<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TentangKami extends Model
{
    use HasFactory;
}
Route::get('/', function () {
    // Contoh penggunaan data dari model
    $data = App\TentangKami::all();
    return view('index', ['data' => $data]);
});