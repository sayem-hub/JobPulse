<?php

namespace App\Http\Controllers\Jobs;

use App\Http\Controllers\Controller;
use App\Models\JobCategory;
use Illuminate\Http\Request;

class JobsCategoryController extends Controller
{
    public function jobsCategory()
    {
        $categories = JobCategory::all();
        return view('admin.job-category.index', compact('categories'));
    }

    public function createCategory()
    {
        return view('admin.job-category.create');
    }

    public function storeCategory(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:80',
            'description' => 'nullable|max:255',
        ]);

        JobCategory::create($validatedData);
        return redirect()->route('category.index')->with('success', 'Job category created successfully');

    }

    public function editCategory($id)
    {
        $category = JobCategory::findOrFail($id);
        return view('admin.job-category.edit', compact('category'));
    }

    public function updateCategory(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:80',
            'description' => 'nullable|max:255',
        ]);

        $category = JobCategory::findOrFail($id);
        $category->update($validatedData);
        return redirect()->route('category.index')->with('success', 'Job category updated successfully');
    }

    public function deleteCategory($id)
    {
        $category = JobCategory::findOrFail($id);
        $category->delete();
        return redirect()->route('category.index')->with('success', 'Job category deleted successfully');
    }
}
