<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\GoogleSheetsService;


class dashboardController extends Controller
{
    protected $sheetsService;

    public function __construct(GoogleSheetsService $sheetsService)
    {
        $this->sheetsService = $sheetsService;
    }

    function view(){

        $data = $this->sheetsService->getSheetData();
        return view('dashboard.index', compact('data'));
    }
}
