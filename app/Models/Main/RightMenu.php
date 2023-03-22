<?php

namespace App\Models\Main;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RightMenu extends Model
{
    use HasFactory;
    protected $guardian = false;
    protected $table = 'right_menus';
}
