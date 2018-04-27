<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ListElement extends Model
{
   public $table = 'list';
   public $fillable = [
        'element',
       'type'
   ];
}
