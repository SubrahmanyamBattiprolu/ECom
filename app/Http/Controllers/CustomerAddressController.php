<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Address;

class CustomerAddressController extends Controller
{
    public function __construct(Address $addressModel)
    {
        $this->addressModel = $addressModel;
    }
    public function saveAddress(Request $request)
    {
        $address = $this->addressModel->saveAddress($request->all());
        return "Successfully created Customer";
    }
}
