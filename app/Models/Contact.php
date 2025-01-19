<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    // Specify the fillable fields
    protected $fillable = [
        'name',
        'email',
        'message',
        // You can add '_token' here if you want, but it's not necessary
        // '_token', // Not needed for mass assignment
    ];
}