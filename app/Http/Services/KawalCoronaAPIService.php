<?php

namespace App\Http\Services;

use Illuminate\Support\Facades\Http;

class KawalCoronaAPIService
{

    /**
     * Init class
     *
     * @return void
     */
    function __construct()
    {

    }

    public function getAllIndonesia()
    {
        $apiCorona = Http::get('https://api.kawalcorona.com/indonesia');
        return $apiCorona;
    }

    public function getAllProvinsiIndonesia()
    {
        $apiCorona = Http::get('https://api.kawalcorona.com/indonesia/provinsi');
        return $apiCorona;
    }

    public function getGlobalData()
    {
        $apiCorona = Http::get('https://api.kawalcorona.com/');
        return $apiCorona;
    }

    public function getGlobalDataPositif()
    {
        $apiCorona = Http::get('https://api.kawalcorona.com/positif');
        return $apiCorona;
    }

    public function getGlobalDataSembuh()
    {
        $apiCorona = Http::get('https://api.kawalcorona.com/sembuh');
        return $apiCorona;
    }

    public function getGlobalDataMeninggal()
    {
        $apiCorona = Http::get('https://api.kawalcorona.com/meninggal');
        return $apiCorona;
    }

}
