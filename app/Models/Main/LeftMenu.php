<?php

namespace App\Models\Main;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LeftMenu extends Model
{
    use HasFactory;
    protected $guardian = false;
    protected $table = 'left_menus';
}
