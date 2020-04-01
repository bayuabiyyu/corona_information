<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\KawalCoronaAPIService;

class DashboardController extends Controller
{

    private $kawalCoronaAPI;

    /**
     * Init class
     *
     * @return void
     */
    public function __construct(KawalCoronaAPIService $kawalCoronaAPI)
    {
        $this->kawalCoronaAPI = $kawalCoronaAPI;
    }

    /**
     * Index page
     *
     * @return view
     */
    public function index()
    {
        $response = [
            'data_total_indonesia' =>  $this->kawalCoronaAPI->getAllIndonesia()->json(),
            'data_provinsi' =>  $this->kawalCoronaAPI->getAllProvinsiIndonesia()->json(),
        ];
        return view('home', compact('response'));
    }

    public function testingAPI()
    {
        $apiCorona = [
            'global' => $this->kawalCoronaAPI->getGlobalData()->json(),
            'indonesia' => $this->kawalCoronaAPI->getAllIndonesia()->json(),
            'indonesia_provinsi' => $this->kawalCoronaAPI->getAllProvinsiIndonesia()->json(),
        ];
        return $apiCorona;
    }


}
