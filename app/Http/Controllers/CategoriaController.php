<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function getCategory()
    {
        return response()->json(Categoria::all(), 200);
    }

    public function getCategoryById($id)
    {
        $categoria = Categoria::find($id);

        if (is_null($categoria)) {
            return response()->json(['mensage' => 'Registro no encontrado'], 404);
        }

        return response()->json($categoria::find($id), 200);
    }

    public function insertCategoria(Request $request)
    {
        $categoria = Categoria::create($request->all());

        return response($categoria, 200);
    }

    public function updateCategoria(Request $request, $id)
    {
        $categoria = Categoria::find($id);

        if (is_null($categoria)) {
            return response()->json(['mensaje' => 'Registro no encontrado'], 404);
        }

        $categoria->update($request->all());

        return response($categoria, 200);
    }

    public function deleteCategoria($id)
    {
        $categoria = Categoria::find($id);

        if (is_null($categoria)) {
            return response()->json(['mensaje' => 'Registro no encontrado'], 404);
        }

        $categoria->delete();

        return response()->json(['mensaje' => 'Se ha eliminado con exito el registro'], 200);
    }
}
