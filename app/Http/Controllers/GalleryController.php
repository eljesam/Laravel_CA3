<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DinoProfile;
use Cviebrock\EloquentSluggable\Services\SlugService;

class GalleryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }
    public function index()
    {
        return view('gallery.index')
            ->with('dinoProfiles', DinoProfile::orderBy('updated_at', 'DESC')->get());
    }
    public function create()
    {
        return view('gallery.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'species' => 'required',
            'era' => 'required',
            'diet' => 'required',
            'habitat' => 'required',
            'size' => 'required',
            'description' => 'required',
            'image' => 'required|mimes:jpg,png,jpeg|max:5048'
        ]);
        $newImageName = uniqid() . '-' . $request->name . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $newImageName);
        DinoProfile::create([
            'name' => $request->name,
            'slug' => SlugService::createSlug(DinoProfile::class, 'slug', $request->name),
            'species' => $request->species,
            'era' => $request->era,
            'diet' => $request->diet,
            'habitat' => $request->habitat,
            'size' => $request->size,
            'description' => $request->description,
            'image_path' => $newImageName
        ]);
        return redirect('/gallery')
            ->with('message', 'Your dino profile has been added!');
    }
    public function show($slug)
    {
        return view('gallery.show')
            ->with('dinoProfiles', DinoProfile::where('slug', $slug)->first());
    }
    public function edit($slug)
    {
        return view('gallery.edit')
            ->with('dinoProfiles', DinoProfile::where('slug', $slug)->first());
    }
    public function update(Request $request, $slug)
    {
        $request->validate([
            'name' => 'required',
            'species' => 'required',
            'era' => 'required',
            'diet' => 'required',
            'habitat' => 'required',
            'size' => 'required',
            'description' => 'required'
        ]);

        DinoProfile::where('slug', $slug)
            ->update([
                'name' => $request->input('name'),
                'slug' => SlugService::createSlug(DinoProfile::class, 'slug', $request->name),
                'species' => $request->input('species'),
                'era' => $request->input('era'),
                'diet' => $request->input('diet'),
                'habitat' => $request->input('habitat'),
                'size' => $request->input('size'),
                'description' => $request->input('description')
            ]);
        return redirect('/gallery')
            ->with('message', 'Your dino profile has been updated!');
    }
    public function destroy($slug)
    {
        $profile = DinoProfile::where('slug', $slug);
        $profile->delete();
        return redirect('/gallery')
            ->with('message', 'Your dino profile has been deleted!');
    }
}
