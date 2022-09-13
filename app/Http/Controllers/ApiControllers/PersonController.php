<?php

namespace App\Http\Controllers\ApiControllers;


use App\Http\Controllers\Controller;
use App\Models\Person;

class PersonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return ['people' => Person::paginate(10)];

    }
}
