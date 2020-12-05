<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\PasswordGroup;
use Illuminate\Http\Request;

class PasswordGroups extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function get()
    {
        $groups = PasswordGroup::all();

        return $groups;
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\passwordGroup  $passwordGroup
     * @return \Illuminate\Http\Response
     */
    public function show(passwordGroup $passwordGroup)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\passwordGroup  $passwordGroup
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, passwordGroup $passwordGroup)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\passwordGroup  $passwordGroup
     * @return \Illuminate\Http\Response
     */
    public function destroy(passwordGroup $passwordGroup)
    {
        //
    }
}
