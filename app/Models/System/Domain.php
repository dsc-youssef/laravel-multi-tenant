<?php

namespace App\Models\System;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Domain extends Model
{
  use HasFactory;

  /**
   * @var array
   */
  protected $fillable = ['name', 'user_id'];
}
