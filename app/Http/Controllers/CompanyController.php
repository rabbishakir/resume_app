<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
use Exception;

class CompanyController extends Controller
{
    public function index()
    {
        $companies = Company::paginate(10);

        return view('admin.company.index', compact('companies'));
    }

    public function create()
    {
        return view('admin.company.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:companies',
            'address' => 'required',
        ]);

        try {
            Company::create([
                'name' => $request->name,
                'address' => $request->address,
            ]);

            return redirect()->route('company.index')->with('success', 'Company created successfully.');
        } catch (Exception $e) {
            return redirect()->route('company.index')->with('error', 'Something went wrong.');
        }
    }

    public function edit($id)
    {
        $company = Company::findOrFail($id);

        return view('admin.company.edit', compact('company'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|unique:companies,name,' . $id,
            'address' => 'required',
        ]);

        try {
            $company = Company::findOrFail($id);

            $company->update([
                'name' => $request->name,
                'address' => $request->address,
            ]);

            return redirect()->route('company.index')->with('success', 'Company updated successfully.');
        } catch (Exception $e) {
            return redirect()->route('company.index')->with('error', 'Something went wrong.');
        }
    }

    public function destroy($id)
    {
        try {
            $company = Company::findOrFail($id);

            $company->delete();

            return redirect()->route('company.index')->with('success', 'Company deleted successfully.');
        } catch (Exception $e) {
            return redirect()->route('company.index')->with('error', 'Something went wrong.');
        }
    }
}
