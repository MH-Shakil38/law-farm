<?php

namespace App\Http\Controllers;

use App\Models\ServiceCategory;
use Illuminate\Http\Request;

class ServiceCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['categories'] = ServiceCategory::query()->latest()->get();
        return view('admin.service.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'status' => 'nullable',
            'parent_id' => 'nullable',
            'details' => 'nullable',
            ]);
            if ($request->hasFile('image')) {
                $image = self::uploadImage($request->file('image'), 'service/category/image/');
                $data['image'] =  url($image);
            }
            ServiceCategory::query()->create($data);
            return redirect()->route('service-categories.index')->with('success', 'Category created successfully');

    }


    public function edit(ServiceCategory $serviceCategory)
    {
        $data['category'] = $serviceCategory;
        $data['categories'] = ServiceCategory::query()->latest()->get();
        return view('admin.service.index')->with($data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ServiceCategory $serviceCategory)
    {
        $data = $request->except('image','_token');
            if ($request->hasFile('image')) {
                $image = self::uploadImage($request->file('image'), 'service/category/image/');
                $data['image'] =  url($image);
            }
            $serviceCategory->update($data);
            return redirect()->route('service-categories.index')->with('success', 'Service Update successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ServiceCategory $serviceCategory)
    {
        $serviceCategory->delete();
        return redirect()->back()->with('success','Service category Deleted successfully');
    }
}
