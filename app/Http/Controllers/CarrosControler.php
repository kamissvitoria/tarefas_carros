<?php

namespace App\Http\Controllers;

use App\Service\CarroService;
use Illuminate\Http\Request;

class CarrosControler extends Controller
{
    protected $carroService;
    
    public function __construct(CarroService $CarroService)
    {
        $this->carroService =  $CarroService;
    }   

    public function store (request $request)
    {
        $dados = $this->carroService->create($request->all());
        return response()->json($dados);
    }
    

    public function getAll()
    {
        $dados = $this->carroService->getAll();
        return response()->json($dados);
    }

    public function update(Request $request){
        $dados = $this->carroService->update($request->all());
        return response()->json($dados);
    }
}
