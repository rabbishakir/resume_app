<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use App\Models\SkillDescription;
use Illuminate\Http\Request;
use Exception;

class SkillDescriptionController extends Controller
{
    public function index()
    {
        $data = SkillDescription::with('skill')->paginate(10);

        return view('admin.summary.index', compact('data'));
    }

    public function create()
    {
        $skills = Skill::all();
        return view('admin.summary.create', compact('skills'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'skill_id'    => 'required',
            'description' => 'required',
        ]);

        try {
            SkillDescription::create([
                'skill_id'    => $request->skill_id,
                'description' => $request->description,
            ]);

            return redirect()->route('summary.index')->with('success', 'Skill description created successfully.');
        } catch (Exception $e) {
            return redirect()->route('summary.index')->with('error', 'Something went wrong.');
        }
    }

    public function edit($id)
    {
        $skills = Skill::all();
        $row    = SkillDescription::with('skill')->findOrFail($id);

        return view('admin.summary.edit', compact('row', 'skills'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'skill_id'    => 'required',
            'description' => 'required',
        ]);

        try {
            SkillDescription::where('id', $id)->update([
                'skill_id'    => $request->skill_id,
                'description' => $request->description,
            ]);

            return redirect()->route('summary.index')->with('success', 'Skill description updated successfully.');
        } catch (Exception $e) {
            return redirect()->route('summary.index')->with('error', 'Something went wrong.');
        }
    }

    public function destroy($id)
    {
        try {
            SkillDescription::findOrFail($id)->delete();

            return redirect()->route('summary.index')->with('success', 'Skill description deleted successfully.');
        } catch (Exception $e) {
            return redirect()->route('summary.index')->with('error', 'Something went wrong.');
        }
    }
}
