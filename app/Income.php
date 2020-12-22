<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Income extends Model
{
      protected $fillable = [
            'name',
            'date',
            'quantity',
            'unit',
            'amount',
            'image',
            'report',
            'deleted',

  ];
}
