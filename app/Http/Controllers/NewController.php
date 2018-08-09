<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;

class NewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $news = News::paginate(5);
        return view('backend.news.index', ['news' => $news]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $new = new News();
        $new->name = $request->name;
        $new->slug = str_slug($request->name);
        $new->description = $request->description;
        $new->content = $request->news_content;
        $new->status = $request->status ? true : false;

        $image = $request->file('image');
        if ($image) {
            $image_name = str_random(20);
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_path = 'news/';
            $image_url = $upload_path . $image_full_name;
            $success = $image->move($upload_path, $image_full_name);
            if ($success) {
                $new->image = $image_url;
            } else {
                $new->image = '';
            }
        }
        $new->save();

        return redirect()->route('news.index')->with('success', 'You successfully added the news');
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
        $new = News::find($id);

        return view('backend.news.edit', ['new' => $new]);
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
        $new = News::find($id);
        $new->name = $request->name;
        $new->slug = str_slug($request->name);
        $new->description = $request->description;
        $new->content = $request->news_content;

        $image = $request->file('image');
        if ($image) {
            $image_name = str_random(20);
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_path = 'news/';
            $image_url = $upload_path . $image_full_name;
            $success = $image->move($upload_path, $image_full_name);
            if ($success) {
                unlink($new->image);
                $new->image = $image_url;
            } else {
                $new->image = '';
            }
        }
        $new->save();

        return redirect()->route('news.index')->with('success', 'You successfully updated the news');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $new = News::find($id);
        unlink($new->image);
        $new->delete();

        return back()->with('success', 'You successfully deleted the news');
    }

    public function status($id)
    {
        $new = News::find($id);
        $new->status = !$new->status;
        $new->save();

        return back()->with('success', 'You successfully updated the status');
    }
}
