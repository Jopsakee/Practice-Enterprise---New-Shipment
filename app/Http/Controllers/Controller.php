<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    public function insertform() {
        return view('createNewShipment');
     }
      
     public function insert(Request $request) {
        $orderID = $request->input('orderID');
        $destID = $request->input('destID');
        $shippingDate = $request->input('shippingDate');
        DB::insert('insert into shipment values(?,?, ?, ?)',[null,$orderID, $destID, $shippingDate]);
        echo "Record inserted successfully.<br/>";
        echo '<a href = "/insert">Click Here</a> to go back.';
     }
}
