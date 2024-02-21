<?php

namespace App\Http\Controllers\Jobs;

use App\Models\Degree;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DegreeController extends Controller
{
    public function degreeIndex()
    {
        $degrees = Degree::all();
        return view('admin.degree.index', compact('degrees'));
    }

    public function createDegree()
    {
        return view('admin.degree.create');
    }

    public function storeDegree(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'description' => 'nullable',
        ]);

        Degree::create($validatedData);
        return redirect()->route('degree.index')->with('success', 'Degree created successfully!');
    }

    public function editDegree($id)
    {
        $degree = Degree::findOrFail($id);
        return view('admin.degree.edit', compact('degree'));
    }

    public function updateDegree(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'description' => 'nullable',
        ]);

        $degree = Degree::findOrFail($id);
        $degree->update($validatedData);
        return redirect()->route('degree.index')->with('success', 'Degree updated successfully!');
    }

    public function deleteDegree($id)
    {
        $degree = Degree::findOrFail($id);
        $degree->delete();
        return redirect()->route('degree.index')->with('success', 'Degree deleted successfully!');
    }
}
