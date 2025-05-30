<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use App\Models\Service;
use App\Models\ServiceCategory;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::where('published', true)->latest()->paginate(5);
        return view('admin.blog.index', compact('blogs'));
    }

    public function show(Blog $slug)
    {
        $blog = Blog::where('slug', $slug)->firstOrFail();
        return view('blog.show', compact('blog'));
    }


    public function create()
    {
        $data['services'] = ServiceCategory::query()->get();
        return view('admin.blog.create')->with($data);
    }



    public function edit($id)
    {
        $services = ServiceCategory::query()->get();
        $blog = Blog::where('id', $id)->firstOrFail();
        return view('admin.blog.create', compact('blog','services'));
    }

    public function store(Request $request)
{
    $request->validate([
        'title' => 'required',
        'content' => 'required',
        'image' => 'nullable|image',
    ]);

    try {
        DB::beginTransaction();
        $data = $request->all();
        $data['published'] = $request->published ? 1 : 0;
        $data['slug'] = Str::slug($request->title);
        if ($request->hasFile('image')) {
            $data['image'] = $this->uploadImage($request->image,'blog/');
        }
        Blog::query()->create($data);
        DB::commit();
        return redirect()->route('blogs.index')->with('success', 'Blog created!');
    } catch (\Exception $e) {
        DB::rollBack();
        dd($e);
        Log::error('Blog create error: ' . $e->getMessage());

        return redirect()->back()
            ->withInput()
            ->with('error', 'Something went wrong while creating the blog.');
    }
}

public function update(Request $request, Blog $blog){
     $request->validate([
        'title' => 'required',
        'content' => 'required',
        'image' => 'nullable|image',
    ]);


    try {
        DB::beginTransaction();
        $data = $request->all();
        $data['published'] = $request->published ? 1 : 0;
        if ($request->hasFile('image')) {
            $data['image'] = $this->uploadImage($request->image,'blog/');
        }
       $blog->update($data);
        DB::commit();
        return redirect()->route('blogs.index')->with('success', 'Blog created!');
    } catch (\Exception $e) {
        DB::rollBack();
        dd($e);
        Log::error('Blog create error: ' . $e->getMessage());

        return redirect()->back()
            ->withInput()
            ->with('error', 'Something went wrong while creating the blog.');
    }
}

 public function destroy(Blog $blog)
    {
        if ($blog->image && Storage::disk('public')->exists($blog->image)) {
            Storage::delete($blog->image);
        }

        $blog->delete();
        return redirect()->route('blogs.index')->with('success', 'Blog deleted successfully.');
    }

}
