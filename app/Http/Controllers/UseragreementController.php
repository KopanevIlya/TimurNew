<?php

namespace App\Http\Controllers;
use Inertia\Inertia;
use Inertia\Response;
use App\Models\Useragreement;
use Illuminate\Http\Request;

class UseragreementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function useragreement(): Response
    {


        return Inertia::render('UserAgreement/Useragreement', [
            'useragreement' => Useragreement::with('user:id,name')->latest()->get(),
        ]);
    }


    /**
     * Show the form for creating a new resource
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
    public function show(Useragreement $useragreement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Useragreement $useragreement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Useragreement $useragreement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Useragreement $useragreement)
    {
        //
    }
}
