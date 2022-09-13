<?php

namespace App\Http\Controllers\People;

use App\Http\Controllers\Controller;
use App\Models\Person;
use App\Models\Shoes;

class ShoesController extends Controller
{


    /**
     * Display single resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Shoes $shoes)
    {
        return view('single', [
            'shoes' => Shoes::all()->where('id', '===', $shoes->id),
        ]);
    }
}
