<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WhatsappHistory extends Model
{
    use HasFactory;

    protected $connection = 'mongodb';

    protected $table = 'whatsappanalize';

    protected $fillable = ['messages'];
}
