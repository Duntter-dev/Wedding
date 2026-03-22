<?php
require 'vendor/autoload.php';

use Google\Client;
use Google\Service\Sheets;

// Configuration
// 1. Run: composer require google/apiclient
// 2. Place your downloaded Google Cloud Service Account JSON key as 'credentials.json' in this folder
// 3. Share the Google Sheet with the 'client_email' from credentials.json

function getGoogleSheetGuests($spreadsheetId) {
    // Initialize Google Client
    $client = new Client();
    $client->setApplicationName('Wedding Guest List');
    $client->setScopes([Sheets::SPREADSHEETS_READONLY]);
    $client->setAuthConfig(__DIR__ . '/credentials.json');
    $client->setAccessType('offline');

    $service = new Sheets($client);

    // Define Range (e.g., 'Sheet1!A2:C' to get columns A, B, C starting from row 2)
    $range = 'Sheet1!A2:C';
    
    try {
        $response = $service->spreadsheets_values->get($spreadsheetId, $range);
        return $response->getValues();
    } catch (Exception $e) {
        die("Error fetching Google Sheet: " . $e->getMessage());
    }
}

// Replace with your actual Spreadsheet ID (found in your Google Sheet URL)
$spreadsheetId = 'YOUR_SPREADSHEET_ID_HERE';

$guests = getGoogleSheetGuests($spreadsheetId);

if (empty($guests)) {
    echo "No guests found.";
} else {
    echo "<pre>" . print_r($guests, true) . "</pre>";
}
?>
