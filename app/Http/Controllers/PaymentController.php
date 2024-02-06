<?php

namespace App\Http\Controllers;

use App\Models\Applicant;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PaymentController extends Controller
{
    public function index()
    {
        DB::beginTransaction();
        try {
            User::find(auth()->user()->id)->update([
                'payment_status' => 1
            ]);

            Applicant::create([
                'user_id'    => auth()->user()->id,
                'first_name' => auth()->user()->first_name,
                'last_name'  => auth()->user()->last_name,
                'email'      => auth()->user()->email,
            ]);

            DB::commit();
            return redirect()->route('app');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->with('error', 'Something went wrong');
        }
    }
}
