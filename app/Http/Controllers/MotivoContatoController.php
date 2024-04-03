<?php

namespace App\Http\Controllers;

use App\Models\MotivosContatos;
use Illuminate\Http\Request;

class MotivoContatoController extends Controller
{
    protected $motivo;

    public function __construct(MotivosContatos $motivo)
    {
        $this->motivo = $motivo;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $motivos = $this->motivo->get();

        return response()->json($motivos,200);
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
