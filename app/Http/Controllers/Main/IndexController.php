<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Main\LeftMenu;
use App\Models\Main\RightMenu;
use App\Models\Main\Neighbourhood;
use App\Models\Main\Cuisine;
use App\Models\Main\Numberofdiner;
use App\Models\Main\SliderOne;
use App\Models\Main\Location;
use App\Models\Main\CuisinePart;
use App\Models\Main\Blog;
use App\Models\Main\SearchPart;

class IndexController extends Controller
{
   public  function __invoke(){

      $leftMenu = LeftMenu::all();

      $neighbourhood = Neighbourhood::all();
      $rightMenu = RightMenu::all();
      $cuisine = Cuisine::all();
      $diners = Numberofdiner::all();
      $sliderone = SliderOne::all();
      $location = Location::all();
      $cuisinepart = CuisinePart::all();
      $blogs = Blog::paginate(4);
      $searches = SearchPart::all();



    return view('main.index', compact('leftMenu','rightMenu','neighbourhood','cuisine','diners','sliderone','location','cuisinepart','blogs','searches'));

   }
}
