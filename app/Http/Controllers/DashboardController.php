<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DashboardController extends Controller
{
    public function upload(Request $request): RedirectResponse
    {
        $validator = Validator::make($request->all(), [
            'file' => 'required|file|mimes:pdf,doc,docx|max:2048', // Example validation rules
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $file = $request->file('file');
        $originalExtension = $file->getClientOriginalExtension();
        $fileName = 'testimonial.' . $originalExtension;
        $file->storeAs('uploads', $fileName);
        return redirect()->back()->with('success', 'File uploaded successfully.');    }
}
