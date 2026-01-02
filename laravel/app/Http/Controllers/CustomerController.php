<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;


class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $customers = Customer::all();
        return view('customers.index', compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('customers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      
     
        Customer::create([
            'name' => $request->post('name'),
            'surname' => $request->post('surname'),
            'gender' => $request->post('gender'),
            'birthYear' => $request->post('birthYear'),
        ]);

        
        return redirect()->route('customers.index');
       

    // Customer::create($request->post());
    }
    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $customer = \App\Models\Customer::findOrFail($id);
    return view('customers.show', compact('customer'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $customer = \App\Models\Customer::findOrFail($id);
        return view('customers.edit',compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
       $customer->update($request->post());
       return redirect()->route('customers.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $customer->delete();
        return redirect()->route('customers.index');
    }
    
    
}    
    

