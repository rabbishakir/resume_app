<?php

namespace App\Http\Controllers;

use App\Models\Applicant;
use App\Models\Company;
use App\Models\Experience;
use App\Models\Skill;
use App\Models\SkillDescription;
use Illuminate\Http\Request;

class ApplicantController extends Controller
{
    public function index()
    {
        $data = Applicant::paginate(10);

        return view('admin.applicants.index', compact('data'));
    }

    public function show($id)
    {
        $applicant = Applicant::with('experiences')->findOrFail($id);

        return view('admin.applicants.show', compact('applicant'));
    }

    public function edit($id)
    {
        $skills    = Skill::all();
        $applicant = Applicant::with('experiences')->findOrFail($id);
        $companies = Company::all();

        return view('admin.applicants.edit', compact('applicant', 'skills', 'companies'));
    }

    public function update(Request $request, $id)
    {
        try {
            Experience::where('applicant_id', $id)->delete();

            foreach ($request->experiences as $experience) {
                Experience::create([
                    'applicant_id' => $id,
                    'company_name' => $experience['company_name'],
                    'position'     => $experience['position'],
                    'from_to'      => $experience['from_to'],
                ]);
            }

            return response()->json([
                'message' => 'Applicant updated successfully'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Something went wrong'
            ], 500);
        }
    }
}
