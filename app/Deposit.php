<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Deposit extends Model
{
    protected $fillable = [
      'amount',
      'user_id',
      'description',
  ];
}