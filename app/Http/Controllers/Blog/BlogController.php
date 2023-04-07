<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;

use App\Models\Main\Blog;
use Illuminate\Http\Request;
use App\Models\Main\LeftMenu;
use App\Models\Main\RightMenu;
use App\Models\Blog\Undermenu;
use Intervention\Image\Facades\Image;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;


class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)

    {


        // var_dump($screenWidth);
        $leftMenu = LeftMenu::all();
        $rightMenu = RightMenu::all();
        $blogs = Blog::paginate(6);
        $undermenus = Undermenu::all();
        foreach ($blogs as $blog) {
            $blog->base64Image = $this->resizeAndEncodeImage($blog->imageMd,$request);
        }
     return view('blogs.index', compact('leftMenu','rightMenu','blogs','undermenus','request'));
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
        //
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


        if ($screenWidth < 768) {
            $imageSize = ['width' => 320, 'height' => 240];
        } elseif ($screenWidth < 1440) {
            $imageSize = ['width' => 212, 'height' => 212];
        } else {
            $imageSize = ['width' => 340, 'height' => 240];
        }

        $image->resize($imageSize['width'], $imageSize['height']);

        return $image->encode('data-url')->encoded;
    }

    public function resizes(Request $request){

        $screenWidth = $request->input('screenWidth');
        session(['screenWidth' => $screenWidth]);

    }

}
