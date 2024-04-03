<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\FeedbackUsuario;
use Illuminate\Http\Request;

class FaleConoscoController extends Controller
{
    protected $feedbackuser;

    public function __construct(FeedbackUsuario $feedbackuser)
    {
        $this->feedbackuser = $feedbackuser;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $feedbackuser= $this->feedbackuser->with('motivos')->get();;
        

        return response()->json($feedbackuser,200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate($this->feedbackuser->rules(),$this->feedbackuser->feedback());   

        $feedbackuser = $this->feedbackuser->create([
            'user_id' => $request->user_id,
            'email_contato'=> $request->email_contato,
            'telefone'=>$request->telefone,
            'mensagem' =>$request->mensagem,
            'motivo_contato' => $request->motivo_contato
        ]);

        
        // return response()->json($carro,201);
        $msg = 'O Chamado foi cadastrado com sucesso!';

        return response()->json(['message' => $msg, 'data' => $feedbackuser], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
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
