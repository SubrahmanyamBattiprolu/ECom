<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Customer extends Model
{

    use HasFactory;
    protected $table = "customers";
    protected $fillable = [];

    public function getAllRecords()
    {
        return self::all();
    }
    public function saveCustomer($data)
    {
        $customer = new Customer();
        $customer->name = $data['name'];
        $customer->email = $data['email'];
        $customer->phone = $data['phone'];
        $customer->save();
        return $customer;
    }
}
