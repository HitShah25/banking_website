<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BankRequest extends Model
{
    use HasFactory;
    protected $fillable = ['bank_name', 'email', 'contact_number', 'message', 'status', 'rejection_reason'];

}
