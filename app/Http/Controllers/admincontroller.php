<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class admincontroller extends Controller
{
    
    public function index()
    {
        return view('admin.dasboard');
    }

    public function show_postingan()
    {
        return view('admin.postingan');
    }

    public function show_arsip()
    {
        return view('admin.arsip');
    }

    public function show_contactperson()
    {
        return view('admin.contactperson');
    }

    public function show_analytics()
    {
        return view('admin.analytics');
    }

    public function show_notification()
    {
        return view('admin.notification');
    }

    public function show_about()
    {
        return view('admin.about');
    }


    public function create()
    {
        
    }

    
    public function store(Request $request)
    {
        
    }

    
    public function show(string $id)
    {
        
    }

    
    public function edit(string $id)
    {
        
    }

   
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
