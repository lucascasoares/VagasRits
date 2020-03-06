<?php

namespace App\Http\Controllers;

use App\Candidates;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
		$candidates = DB::table('candidates')->select('id', 'name', 'email', 'phone_number', 'motivation', 'linkedin_url', 'github_url', 'english_level', 'wage_cents', 'resume_path', 'created_at')->get();
		return view('home', ['candidates' => $candidates]);
    }
	
    /**
     * Display the specified resource.
     *
     * @param  \App\Candidates  $candidates
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
		$candidate = DB::table('candidates')->select('id', 'name', 'email', 'phone_number', 'motivation', 'linkedin_url', 'github_url', 'english_level', 'wage_cents', 'resume_path', 'created_at')->where('id', '=', $id)->get();
		return view('show', ['candidate' => $candidate[0]]);
    }

}
