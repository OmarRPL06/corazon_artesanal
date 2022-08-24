<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\UbicacionController;

class UbicacionController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'estado'    => 'required', 'string', 'max:255',
            'colonia'   => 'required', 'string', 'max:255',
            'municipio' => 'required', 'string', 'max:255',
            'calle'     => 'required', 'string', 'max:255',
            'num_calle' => 'required',
            'c_postal'  => 'required'
        ],[
            'estado.required'   => 'Igresa el estado',
            'colonia.required'  => 'Igresa el nombre de la Colonia',
            'municipio.required'=> 'Igresa el municipio',
            'calle.required'    => 'Igresa el nombre de la Calle',
            'num_calle.required'=> 'Igresa el numero de la Calle',
            'c_postal.required' => 'Igresa el codigo postal de la ciudad'
        ]);

        $api_key = 'AIzaSyC1013AP-y0F2d8zZtwDRbsFVVr7aMbblU'; // API Key Google Maps
        $find = urlencode(trim(request('calle') . " #" . request('num_calle') . ", " . request('colonia') . ", Municipio de " . request('municipio') . ", " . request('estado') . ", CP " . request('c_postal')));
        $google_maps_url = 'https://maps.googleapis.com/maps/api/geocode/json?address=' . $find . '&key=' . $api_key;
        $google_maps_json = file_get_contents($google_maps_url);
        $google_maps_array = json_decode($google_maps_json, true);

        $latitude = $google_maps_array['results'][0]['geometry']['location']['lat'];
        $longitude = $google_maps_array['results'][0]['geometry']['location']['lng'];

        $respuesta = file_get_contents('https://maps.googleapis.com/maps/api/directions/json?key=AIzaSyC1013AP-y0F2d8zZtwDRbsFVVr7aMbblU&origin=16.8958594,-92.067273717&destination=' . $latitude . ',' . $longitude . '&mode=driving');
        $json = json_decode($respuesta);

        $distancia = $json->{"routes"}[0]->{"legs"}[0]->{"distance"}->{"text"};
        $duracion = $json->{"routes"}[0]->{"legs"}[0]->{"duration"}->{"text"};

        $estado    = $request->input('estado');
        $colonia   = $request->input('colonia');
        $municipio = $request->input('municipio');
        $calle     = $request->input('calle');
        $num_calle = $request->input('num_calle');
        $c_postal  = $request->input('c_postal');

        return view('Ubicacion.index', [
            'estado'    => $estado,
            'colonia'   => $colonia,
            'municipio' => $municipio,
            'calle'     => $calle,
            'num_calle' => $num_calle,
            'c_postal'  => $c_postal,
            'latitude'  => $latitude,
            'longitude' => $longitude,
        ]);

    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}


