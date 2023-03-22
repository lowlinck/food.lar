<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Main\LeftMenu;
use App\Models\Main\RightMenu;

class IndexController extends Controller
{
   public  function __invoke(){

      $leftMenu = LeftMenu::all();

      $rightMenu = RightMenu::all();
    
       

    return view('main.index', compare('menu'));

   }
}
