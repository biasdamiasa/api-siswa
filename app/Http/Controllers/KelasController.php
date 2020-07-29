<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kelasmodel;
use Illuminate\Support\Facades\Validator;

class KelasController extends Controller
{

    public function show()
    {
        return Kelasmodel::all();
    }

    public function store(Request $request)
    {
        $validator=Validator::make($request->all(),
            [
                'nama_kelas' => 'required',
                'kelompok' => 'required'
            ]
        );

        if($validator->fails()) {
            return Response()->json($validator->errors());
        }

        $simpan = Kelasmodel::create([
            'nama_kelas' => $request->nama_kelas,
            'kelompok' => $request->kelompok
        ]);

        if($simpan) {
            return Response()->json(['status'=>'sukses']);
        }
        else {
            return Response()->json(['status'=>0]);
        }
    }
}
