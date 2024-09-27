<?php

namespace App\Service;

use App\Models\Carros;

class CarroService
{
    public function create(array $dados)
    {
        $campo = Carros::create([
            'placa' => $dados['placa'],
            'ano' => $dados['ano'],
            'tipo' => $dados['tipo'],
            'marca' => $dados['marca'],
            'modelo' => $dados['modelo'],
            'valor' => $dados['valor']
        ]);

        return $campo;
    }

    public function getAll()
    {
        $campo = Carros::all();

        return [
            'status' => true,
            'message' => 'Pesquisa realizada com sucesso',
            'data' => $campo
        ];
    }

    public function update(array $dados)
    {
        $campo = Carros::find($dados['id']);

        if ($campo == null) {
            return [
                'status' => false,
                'message' => 'campo não encontrado'
            ];
        }

        if (isset($dados['placa'])) {
            $campo->placa = $dados['placa'];
        }

        if (isset($dados['ano'])) {
            $campo->ano = $dados['ano'];
        }

        if (isset($dados['tipo'])) {
            $campo->tipo = $dados['tipo'];
        }

        if (isset($dados['marca'])) {
            $campo->marca = $dados['marca'];
        }

        if (isset($dados['modelo'])) {
            $campo->modelo= $dados['modelo'];
        }

        if (isset($dados['valor'])) {
            $campo->valor = $dados['valor'];
        }
        $campo->update();

        return [
            'status' => true,
            'message' => 'Atualizado com sucesso'
        ];
    }

    public function delete ($id)
    {
      $campo = Carros::find($id);
      if ($campo == null) {
        return [
            'status' => false,
            'message' => 'Campo não encontrado'
        ];

      }

     $campo->delete();
     return [ 
      'status' => true,
      'message' => 'Seu campo foi apagado com sucesso!'

     ]


    }
}
