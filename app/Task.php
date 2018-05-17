<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    /**
     * 1文での複数登録
     */
    protected $fillable = ['content'];
}
