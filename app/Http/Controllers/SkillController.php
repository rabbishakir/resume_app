<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;
use Exception;

class SkillController extends Controller
{
    public function index()
    {
        $skills = Skill::paginate(10);

        return view('admin.skills.index', compact('skills'));
    }

    public function create()
    {
        return view('admin.skills.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:skills',
        ]);

        try {
            Skill::create([
                'name' => $request->name,
            ]);

            return redirect()->route('skills.index')->with('success', 'Skill created successfully.');
        } catch (Exception $e) {
            return redirect()->route('skills.index')->with('error', 'Something went wrong.');
        }
    }

    public function show($id)
    {
        $skill = Skill::with('skillDescription')->findOrFail($id);

        return view('admin.skills.show', compact('skill'));
    }

    public function edit($id)
    {
        $skill = Skill::with('skillDescription')->findOrFail($id);

        return view('admin.skills.edit', compact('skill'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|unique:skills,name,' . $id,
        ]);

        try {
            $skill = Skill::findOrFail($id);

            $skill->update([
                'name' => $request->name,
            ]);

            return redirect()->route('skills.index')->with('success', 'Skill updated successfully.');
        } catch (Exception $e) {
            return redirect()->route('skills.index')->with('error', 'Something went wrong.');
        }
    }

    public function destroy($id)
    {
        try {
            $skill = Skill::findOrFail($id);

            $skill->delete();

            return redirect()->route('skills.index')->with('success', 'Skill deleted successfully.');
        } catch (Exception $e) {
            return redirect()->route('skills.index')->with('error', 'Something went wrong.');
        }
    }
}
