<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BmiRecord;

class GuestController extends Controller
{
    public function index()
    {
        return view('user.cekBmi');
    }

    public function calculate(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'gender' => 'required|in:male,female',
            'height' => 'required|numeric|min:50|max:300',
            'weight' => 'required|numeric|min:10|max:500',
        ]);

        $heightInMeters = $request->height / 100;
        $bmi = $request->weight / ($heightInMeters * $heightInMeters);

        BmiRecord::create([
            'name' => $request->name,
            'gender' => $request->gender,
            'height' => $request->height,
            'weight' => $request->weight,
            'bmi' => $bmi,
        ]);

        return redirect()->route('user.cekBmi')->with([
            'name' => $request->name,
            'gender' => $request->gender,
            'height' => $request->height,
            'weight' => $request->weight,
            'bmi' => number_format($bmi, 2),
        ]);
    }

    public function getHistory(Request $request)
    {
        $records = BmiRecord::where('name', $request->query('name'))->get();
        return response()->json($records);
    }
}