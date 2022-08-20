<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\User;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// data primitif
Route::get('/', function () {
    return response()->json("Hello world!");
});

// array
Route::get('/array', function () {
    return response()->json([1, 2, 3, 4]);
});

// objek / array asosiatif
Route::get('/object', function () {
    return response()->json([
        "nama" => "Imron Fuadi",
        "angkatan" => 19
    ]);
});

// dari basis data

// create
Route::post('/users', function (Request $request) {
    $user = User::create($request->all());
    return response()->json($user);
});

// read all
Route::get('/users', function () {
    return response()->json(User::all());
});

// read by id
Route::get('/users/{id}', function ($id) {
    $user = User::find($id);
    return response()->json($user);
});

// update by id
Route::put('/users/{id}', function (Request $request, $id) {
    $user = User::find($id);
    $user->update($request->all());
    return response()->json($user);
});

// delete by id
Route::delete('/users/{id}', function ($id) {
    $user = User::find($id);
    $user->delete();
    return response()->json($user);
});