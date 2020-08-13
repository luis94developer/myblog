<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

/**
 * Created by PhpStorm.
 * User: vuongluis
 * Date: 8/13/2020
 * Time: 2:34 PM
 */
class Verification extends Model
{
    protected $table = "verifications";

    protected $fillable = ['id', 'user_id', 'token', 'created_at', 'updated_at'];

    protected $hidden = [];
}