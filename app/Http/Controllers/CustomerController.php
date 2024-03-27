<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use App\Models\Customer as CustomerModel;
use Illuminate\Validation\Rule;
use \Illuminate\Support\Facades\Validator;

class CustomerController extends Controller
{
    public function __construct(CustomerModel $customerModel)
    {
        $this->customerModel = $customerModel;
    }

    public function List()
    {
        $customers = $this->customerModel->getAllRecords();
    }

    public function CreateCustomer(Request $request)
    {
    }

    public function saveCustomer(Request $request)
    {
        $data      = $request->all();
        $rules     = [
            'name'  => 'required|max:255',
            'email' => 'email:rfc,dns',
            'phone' => 'integer|min:5|nullable',
        ];
        $validated = Validator::make($data, $rules);
        if ($validated->fails()) {
            return redirect()->back()->withErrors($validated)->withInput();
        }
        $customer = $this->customerModel->saveCustomer($data);
        return view('customer_address',['customerId' => $customer->id]);
    }
}
