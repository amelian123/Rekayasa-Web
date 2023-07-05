<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Baju;

class BajuController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
    }
    public function showAll()
    {
        return response()->json(Baju::all());
    }

    public function showOne($id)
    {
        return response()->json(Baju::find($id));
    }

    public function create(Request $request)
    {
        $Baju = Baju::create($request->all());

        return response()->json($Baju, 201);
    }

    public function update($id, Request $request)
    {
        $Baju = Baju::findOrFail($id);
        $Baju->update($request->all());

        return response()->json($Baju, 200);
    }

    public function delete($id)
    {
        Baju::findOrFail($id)->delete();
        $json = array(
            'message'=>'Deleted Succesfully'
        );
        return response($json, 200);
    }

}
