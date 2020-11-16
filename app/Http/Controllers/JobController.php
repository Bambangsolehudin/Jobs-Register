<?php

namespace App\Http\Controllers;

use App\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = Auth::user()->id;
        $items = Job::with(['user'])->where('user_id', '=', $id)->get();
        return view('pages.admin.job.index',compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */ 
    public function create()
    {
        $items = Job::all();
        return view('pages.admin.job.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $request->validate([
            'title'=>'required',
            'description'=>'required'
        ]);
         $data = $request->all();

         Job::create($data);

         return redirect()->route('jobs.index')->with('status','Data Jobs berhasil Ditambahkan'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function show(Job $job)
    {
        
        return view('pages.admin.job.show',compact('job'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function edit(Job $job)
    {
         return view('pages.admin.job.edit',compact('job'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Job $job)
    {
        $request->validate([
            'user_id'=>'required',
            'title'=>'required',
            'description'=>'required'
        ]);
        $data = $request->all();
        $item = Job::find($job->id);
        $item->update($data);
       
       // Job::where('id',$job->id)->update([
       //      'title'=>$request->title,
       //      'user_id'=>$request->user_id,
       //      'description'=>$request->description,
       // ]);

        return redirect()->route('jobs.index')->with('status','Data Mahasiswa berhasil DiUbah!'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Job::findorFail($id);
        $item->delete();

        return redirect()->route('jobs.index')->with('status','Data Jobs berhasil Dihapus');
    }
}
