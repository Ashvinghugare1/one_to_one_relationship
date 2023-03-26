<?php

namespace App\Http\Controllers;

use App\Models\Mobile;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function add_costomer()
    {
        $mobile = new Mobile();
        $mobile->model= 'LG100';

        $customer = new Customer();
        $customer->name = 'rahul';
        $customer->email ='rahul@gmail.com';
        $customer->save();

        $customer->mobile()->save(mobile);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
    public function show_mobile(Costomer $costomer)
    {
        $mobile = Mobile::find($id)->mobile();
        return $mobile;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Costomer $costomer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Costomer $costomer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Costomer $costomer)
    {
        //
    }
}
