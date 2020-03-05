<?php

namespace App\Http\Controllers;

use App\Candidates;
use Illuminate\Http\Request;

class CandidatesSiteController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
		return view('candidates.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate and store the candidate
		$validatedData = $request->validate([
			'name' => 'required|unique:candidates|max:255',
			'email' => 'required|email:rfc|max:254',
			'phone_number' => 'required|max:15',
			'motivation' => 'nullable',
			'linkedin_url' => 'required|url|max:255',
			'github_url' => 'required|url|max:255',
			'wage_pretension' => 'required',
			'resume' => 'required',
		]);
		
		// The candidate is valid
		
		$candidate = new Candidates;
		$candidate->name = $request->name;
		$candidate->email = $request->email;
		$candidate->phone_number = $request->phone_number;
		$candidate->motivation = $request->motivation;
		$candidate->linkedin_url = $request->linkedin_url;
		$candidate->github_url = $request->github_url;
		$candidate->english_level = $request->english_level;
		$candidate->wage_cents = str_replace(",","", $request->wage_pretension);
		$candidate->resume_path = $request->file('resume')->store('resumes');
		$candidate->save();
		return redirect('candidates')->with('message', 'Candidatura cadastrada com sucesso!');
    }

}
