<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class ApiController extends Controller
{
    public function consultar(Request $request)
    {
        $tipo = $request->input('tipoConsulta');
        $dato = $request->input('datoConsulta');



        
        if($tipo == 'RUC'){
            $url = "https://dniruc.apisperu.com/api/v1/ruc/".$dato."?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJlbWFpbCI6Imp1bGl0b2hhbGxhc2lAZ21haWwuY29tIn0.gcGPetptPHXka8kz_HYAccVYDWF4i-B1_5WSORIyfR8";
       
        }else if($tipo == 'DNI'){
            $url = 'https://dniruc.apisperu.com/api/v1/dni/'.$dato.'?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJlbWFpbCI6Imp1bGl0b2hhbGxhc2lAZ21haWwuY29tIn0.gcGPetptPHXka8kz_HYAccVYDWF4i-B1_5WSORIyfR8';
        
        }
        
        $response = @file_get_contents($url);
        $data = json_decode($response, true);


        if($data){
            $vista = $tipo === 'DNI' ? 'dni' : 'ruc';
            return view($vista, ['mensaje' => "", 'data' => $data]);

        }else{
            return view('consultas', ['mensaje' => "No se encontraron datos :'( "]);
        }
    }

}
