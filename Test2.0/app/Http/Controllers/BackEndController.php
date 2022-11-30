<?php

namespace App\Http\Controllers;

use App\Models\BackEnd;
use Illuminate\Http\Request;

class BackEndController extends Controller
{
  
    public function index()
    {
        //READ (GET) 
           
        try {
            //SELECT * FROM BackEnd;
            $backEnd = BackEnd::all();
            return  response()->json($backEnd, 200);
        } catch (\Exception $error) {
            return response()->json($error->getMessage(), 500);
        }
    }

 
    
    public function store(Request $request)
    {
        //CREAT (PUT)
        try {
            // INSERT INTO BACKEND(NAME)VALUES('NAME')
            BackEnd::create($request->all());
            return response()->json('Requisição criada com Sucesso',201);
        } catch (\Exception $error) {
            return response()->json($error->getMessage(), 500);
        }
    }


    public function update(Request $request, int $id)
    {
        //UPDATE (PUT)
        try {
            // SELECT * FROM BACKEND WHERE ID = $ID
            $backEnd = BackEnd::find($id);
            // UPDATE BACKEND SET NAME = 'NAME' WHERE id = Sid
            $backEnd->update($request->all());
            return response()->json('Dados Atualizados com sucesso',201);
        } catch (\Exception $error) {
            return response()->json($error->getMessage(), 500);
        }
    }

   
    public function destroy($id)
    {
        //DELETE (DELETE)
        try {
            $backEnd = BackEnd::find($id);
            $backEnd->delete();
            return response()->json('Dados apagados, não se arrependa depois',201);
        } catch (\Exception $error) {
            return response()->json($error->getMessage(), 500);
        }
    }
}
