<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    protected $guarded = array('id', 'created_at', 'updated_at');
    // public static $rules = array(
    //     'title' => 'required'
    // );
}
