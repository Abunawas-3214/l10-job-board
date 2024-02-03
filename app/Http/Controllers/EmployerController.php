<?php

namespace App\Http\Controllers;

use App\Models\Employer;
use App\Models\User;
use Illuminate\Http\Request;

class EmployerController extends Controller
{

    public function __construct()
    {
        $this->authorizeResource(Employer::class);
    }

    public function create()
    {
        return view('employer.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'company_name' => 'required|min:3|unique:employers,company_name'
        ]);

        $user = auth()->user();
        $user->employer()->create([
            'company_name' => $request->input('company_name'),
        ]);

        return redirect()->route('jobs.index')
            ->with('success', 'Your employer account was created!');
    }
}
