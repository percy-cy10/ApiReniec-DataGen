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
            $url = "https://dniruc.apisperu.com/api/v1/ruc/".$dato."?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJlbWFpbCI6InBlY29uZG9yaXl1QGVzdC51bmFwLmVkdS5wZSJ9.yXCt9oouWEMiTosfoRd2jZlunmWKVyk37UDvu-N7psM";
        }else if($tipo == 'DNI'){
            $url = 'https://dniruc.apisperu.com/api/v1/dni/'.$dato.'?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJlbWFpbCI6InBlY29uZG9yaXl1QGVzdC51bmFwLmVkdS5wZSJ9.yXCt9oouWEMiTosfoRd2jZlunmWKVyk37UDvu-N7psM';

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
