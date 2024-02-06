<?php

namespace App\Http\Controllers;

use App\Models\Applicant;
use App\Models\Skill;
use Illuminate\Http\Request;

class AppController extends Controller
{
    public function app()
    {
        if (auth()->user()->payment_status) {
            return view('student.app');
        }

        return redirect()->route('dashboard');
    }

    public function prerequisiteData()
    {
        $skills = Skill::select('skills.id', 'skills.name')
            ->join('skill_descriptions', 'skills.id', '=', 'skill_descriptions.skill_id')
            ->groupBy('skills.id', 'skills.name')
            ->get();

        $app = Applicant::where('user_id', auth()->user()->id)->first();

        return response()->json([
            'app'    => $app,
            'skills' => $skills,
        ]);
    }

    public function store(Request $request)
    {
        $validation = [
            'first_name'      => 'required|alpha|max:50',
            'last_name'       => 'required|alpha|max:50',
            'email'           => 'required|email',
            'phone'           => 'required',
            'address'         => 'required',
            'residency'       => 'required',
            'skills'          => 'required',
            'dob'             => 'required|date',
            'gender'          => 'required',
            'clearance'       => 'required',
            'criminal_record' => 'required',
            'comment'         => 'required',
        ];

        if ($request->clearance == 1) {
            $validation['clearance_yes'] = 'required';
        }

        if ($request->criminal_record == 1) {
            $validation['criminal_record_yes'] = 'required';
        }

        $request->validate($validation);

        try {
            Applicant::where('user_id', auth()->user()->id)->update([
                'first_name'                => $request->first_name,
                'last_name'                 => $request->last_name,
                'email'                     => $request->email,
                'phone'                     => $request->phone,
                'address'                   => $request->address,
                'residency'                 => $request->residency,
                'skills'                    => json_encode($request->skills),
                'residency_location'        => json_encode($request->residency_location),
                'certifications'            => json_encode($request->certifications),
                'dob'                       => $request->dob,
                'gender'                    => $request->gender,
                'clearance'                 => $request->clearance,
                'clearance_yes'             => $request->clearance == 1 ? $request->clearance_yes : null,
                'criminal_record'           => $request->criminal_record,
                'criminal_record_yes'       => $request->criminal_record == 1 ? $request->criminal_record_yes : null,
                'comment'                   => $request->comment,
                'undergraduate_institution' => $request->undergraduate_institution,
                'undergraduate_major'       => $request->undergraduate_major,
                'undergraduate_from_to'     => $request->undergraduate_from_to,
                'graduate_institution'      => $request->graduate_institution,
                'graduate_major'            => $request->graduate_major,
                'graduate_from_to'          => $request->graduate_from_to,
                'phd_institution'           => $request->phd_institution,
                'phd_major'                 => $request->phd_major,
                'phd_from_to'               => $request->phd_from_to,
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Application submitted successfully!',
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Something went wrong!',
            ]);
        }
    }
}
