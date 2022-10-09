<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTagRequest;
use App\Http\Requests\UpdateTagRequest;
use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tags = Tag::all();
        return view('tag', ['tags' => $tags]);
    }
    public function create()
    {
        return view('addtag');
    }
    public function store(Request $req)
    {
        $data = [
            'name' => $req->name,
        ];
        Tag::Create($data);
        return redirect('tag');
    }
    public function edit($id)
    {
        $tag = Tag::find($id);
        return view('edittag', ['tag' => $tag]);
    }
    public function update($id, Request $req)
    {
        $data = [
            'name' => $req->tag,
        ];
        Tag::where('idtag', $id)->update($data);
        return redirect('tag');
    }
    public function delete($id)
    {
        $tag = Tag::find($id);
        $tag->delete();
        return redirect('tag');
    }
}
