<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Rede;

class RedeController extends Controller
{
    public function index()
    {
        return Rede::all();
    }

    public function store(Request $request)
    {
        $dados = $request->validate([
            'nome' => ['required', 'string', 'max:100'],
            'cnpj' => ['nullable', 'string', 'max:18'],
            'ativo' => ['sometimes', 'boolean'],
        ]);

        return response()->json([
            'mensagem' => 'VALIDAÇÃO OK',
            'dados'    => $dados,
        ]);
    }

    public function storeTeste()
    {
        $rede = Rede::create([
            'nome' => 'Rede Combustível Brasil',
            'cnpj' => '98.765.432/0001-10',
            'ativo' => true,
        ]);

        return response()->json($rede, 201);
    }
}
