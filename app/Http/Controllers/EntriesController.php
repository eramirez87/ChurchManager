<?php

namespace App\Http\Controllers;

use App\Models\Acc\Entries;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EntriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $auth = Auth::user();
        return view( 'AccEntries',compact('auth') );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Entries $entries)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Entries $entries)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Entries $entries)
    {
        //
    }
}
