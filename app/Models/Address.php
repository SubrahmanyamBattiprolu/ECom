<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use function Sodium\add;

class Address extends Model
{
    use HasFactory;
    protected $table = "address";
    protected $fillable = [];


    public function saveAddress($data)
    {
        $address = new self();
        $address->customer = $data['customer_id'];
        $address->address = $data['address'];
        $address->city = $data['city'];
        $address->state = $data['city'];
        $address->country = $data['country'];
        $address->save();
        return $address;
    }
}
