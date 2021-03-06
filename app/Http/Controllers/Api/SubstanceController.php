<?php

namespace App\Http\Controllers\Api;

//use App\Models\Substance;


//use App\Http\Controllers\Controller;
use Orion\Http\Controllers\Controller;
use Orion\Concerns\DisableAuthorization;

//use Illuminate\Http\Request;

class SubstanceController extends Controller
{
    use DisableAuthorization; // it doesn't give back 403 unautorized.

    //protected $model = Substance::class; //or "App\Models\Substance"

    protected $model = "App\Models\Substance";



    /**
    * The attributes that are used for filtering.
    *
    * @return array
    */

    protected function filterableBy() : array
    {
        return ['id', 'INN', 'mechanism'];
    }

    protected function searchableBy() : array
    {
        return ['INN', 'mechanism'];
        //return ['mechanism'];
    }

    /**
     * The attributes that are used for sorting.
     *
     * @return array
     */
    protected function sortableBy() : array
    {
        return ['id', 'INN'];
    }

    // public function __construct()
    // {
    //     $this->authorizeResource(Substance::class, 'substances');
    // }

    // /**
    //  * Display a listing of the resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function index()
    // {
    //     //
    // }

    // /**
    //  * Show the form for creating a new resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function create()
    // {
    //     //
    // }

    // /**
    //  * Store a newly created resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @return \Illuminate\Http\Response
    //  */
    // public function store(Request $request)
    // {
    //     //
    // }

    // /**
    //  * Display the specified resource.
    //  *
    //  * @param  \App\Models\Substance  $substance
    //  * @return \Illuminate\Http\Response
    //  */
    // public function show(Substance $substance)
    // {
    //     //
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  \App\Models\Substance  $substance
    //  * @return \Illuminate\Http\Response
    //  */
    // public function edit(Substance $substance)
    // {
    //     //
    // }

    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  \App\Models\Substance  $substance
    //  * @return \Illuminate\Http\Response
    //  */
    // public function update(Request $request, Substance $substance)
    // {
    //     //
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  \App\Models\Substance  $substance
    //  * @return \Illuminate\Http\Response
    //  */
    // public function destroy(Substance $substance)
    // {
    //     //
    // }
}
