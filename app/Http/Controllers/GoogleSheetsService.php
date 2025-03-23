<?php

namespace App\Service;

use Google_Service_Sheets;
use Google_Client;

class GoogleSheetsService
{
    protected $client;
    protected $service;
    protected $spreadsheetId = '18Rk6y8mIcj0FCxtJ93IAEegaIXZDvds-i2pgP-LwNEI'; // Replace with your Google Sheet ID

    public function __construct()
    {
        $this->client = new Google_Client();
        $this->client->setAuthConfig(storage_path('credentials.json'));
        $this->client->addScope(Google_Service_Sheets::SPREADSHEETS_READONLY);
        
        $this->service = new Google_Service_Sheets($this->client);
    }

    public function getSheetData($range = 'Sheet1!A1:Z1000')
    {
        $response = $this->service->spreadsheets_values->get($this->spreadsheetId, $range);
        return $response->getValues();
    }
}
