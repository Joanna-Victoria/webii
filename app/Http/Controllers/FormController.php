<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class FormController extends Controller
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Form::create($request->all());

        return redirect('form')->with('success', 'Form successfully created!');

        $validator = Validator::make($request->all(), [
            'nome' => 'required|unique:posts|max:255', 'starts_with:string',
            'sobrenome' => 'required',
            'usuario' => 'required', 'alpha_num',
            'email' => 'sometimes|required|email', 'alpha_dash',
            'logradouro' => 'required',
            'estado' => 'required',
            'pais' => 'required',
            'cep' => 'required', 'numeric|size:8',
            'metododepagamento' => 'required',
            'nomedocartao' => 'required',
            'numerodocartao' => 'required', 'numeric', 'size:16',
            'datadeexpiracao' => 'required|date|after:tomorrow',
            'cvv'  => 'required|numeric', 'size:3',
        ]);

        // The blog post is valid...

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Form  $form
     * @return \Illuminate\Http\Response
     */
    public function show(Form $form)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Form  $form
     * @return \Illuminate\Http\Response
     */
    public function edit(Form $form)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Form  $form
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Form $form)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Form  $form
     * @return \Illuminate\Http\Response
     */
    public function destroy(Form $form)
    {
        //
    }
}
