<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Blog\BlogController;
use Illuminate\Http\Request;
use App\Models\Blog\Artical;
use App\Models\Main\LeftMenu;
use App\Models\Main\RightMenu;

class ArticalController extends Controller
{

    protected $blogController;

    public function __construct(BlogController $blogController)
    {
        $this->blogController = $blogController;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $leftMenu = LeftMenu::all();
        $rightMenu = RightMenu::all();
        $articals = Artical::find(1);
        $created_at = $articals->created_at;
        $data = $created_at->format('d.m.Y');
        $firstPart = substr($articals->artical, 0, 1055);
        $flex_First = substr($articals->artical, 1056, 2195);
        $flex_therdPart = substr($articals->artical, 2195, 3818);
        $fourPart = substr($articals->artical, 3818, 4944);
        $lastPart = substr($articals->artical, 4944, 5621);
        $articals->firstPart=$firstPart;
        $articals->flex_First=$flex_First;
        $articals->flex_therdPart=$flex_therdPart;
        $articals->fourPart=$fourPart;
        $articals->lastPart=$lastPart;
        $articals->resizeimg1= $this->resizeAndEncodeImage(articals->image1,$request);
        $articals->resizeimg2= $this->resizeAndEncodeImage(articals->image2,$request);
        $articals->resizeimg3= $this->resizeAndEncodeImage(articals->image3,$request);
        
        return view('blogs.articals.artical', compact('articals','leftMenu','rightMenu','data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function resizeAndEncodeImage($imagePath,$request) {
        $screenWidth = $request->session()->get('screenWidth', null);
        $screen = intval(preg_replace('/[^0-9]/', "", $screenWidth));

        $image = Image::make($imagePath);

        if (isset($article->image1)) {
            if ($screenWidth < 768) {
                $imageSize = ['width' => 341, 'height' => 230];
            } elseif ($screenWidth < 1440) {
                $imageSize = ['width' => 700, 'height' => 291];
            } else {
                $imageSize = ['width' => 1180, 'height' => 490];
            }
        } elseif (isset($article->image2)) {
            if ($screenWidth < 768) {
                $imageSize = ['width' => 339, 'height' => 319];
            } elseif ($screenWidth < 1440) {
                $imageSize = ['width' => 313, 'height' => 525];
            } else {
                $imageSize = ['width' => 380, 'height' => 452];
            }
        } elseif (isset($article->image3)) {
            if ($screenWidth < 768) {
                $imageSize = ['width' => 340, 'height' => 337];
            } elseif ($screenWidth < 1440) {
                $imageSize = ['width' => 579, 'height' => 575];
            } else {
                $imageSize = ['width' => 579, 'height' => 575];
            }
        } else {
            // ни одно из трех свойств не установлено
        }

        

        $image->resize($imageSize['width'], $imageSize['height']);

        return $image->encode('data-url')->encoded;
    }

    // public function resizes(Request $request){

    //     $screenWidth = $request->input('screenWidth');
    //     session(['screenWidth' => $screenWidth]);

    // }
}
