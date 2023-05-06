<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// // Include the database configuration file
// $host = "localhost";
// $username = "root";
// $password = "";

// try {
//     $conn = new PDO("mysql:host=$host;dbname=mid_test", $username, $password);
//     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// } catch (PDOException $e) {
//     echo "Connection failed: " . $e->getMessage();
// }

// // Define a function to save the transaction data to the database
// function saveTransaction($data) {
//     global $mysqli;

//     // Get the coffee name and price from the $data array
//     $transaction_id = 'TR' . strval($data['user_id'] + 1);
//     $user_id= $data['user_id'];
//     $coffee_id = $data['coffee_id'];
//     $transactionDate = date('d-m-y h:i:s');

//     // Prepare the SQL query to insert the transaction into the database
//     $sql = "INSERT INTO transaction * VALUES ('$transaction_id', '$user_id', '$coffee_id', '$transactionDate')";

//     // Execute the query
//     if ($conn->query($sql) === TRUE) {
//         // Return a success message
//         return array('success' => true, 'message' => 'Transaction saved successfully');
//     } else {
//         // Return an error message
//         return array('success' => false, 'message' => 'Error: ' . $sql . '<br>' . $mysqli->error);
//     }
// }

// // Check if an AJAX request was made to this file
// if(isset($_POST['user_id']) && $_POST['user_id']!='' && isset($_POST['coffee_id']) && $_POST['coffee_id']!=='') {
//     // Call the saveTransaction function and return the result as JSON
//     echo json_encode(saveTransaction($_POST));
// }



