<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Workshop;
use App\Company;
use Auth;

class WorkshopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $workshop = Workshop::all();
        return view('workshop.index')->with('workshop',$workshop);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $company = Company::all();
        return view('workshop.create')->with('company',$company);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
			'company'=>'required|max:255',
			'name'=>'required|max:255',
			'code'=>'required|max:255',
			'mobile'=>'required|max:255',
			'email'=>'required|max:255'
		]);
		
		$workshop = new Workshop;
		$workshop->company = $request->company;
		$workshop->name = $request->name;
		$workshop->code = $request->code;
		$workshop->reg_no = $request->reg_no;
		$workshop->mobile = $request->mobile;
		$workshop->phone = $request->phone;
		$workshop->email = $request->email;
		$workshop->address = $request->address;
		$workshop->gst = $request->gst_no;
		$workshop->user_sys = \Request::ip();
		$workshop->updated_by = Auth::id();
		$workshop->created_by = Auth::id();
		
		$result = $workshop->save();
		
		if($result){
			return back()->with('success', 'Record added successfully!');
		}
		else{
			return back()->with('error', 'Something went wrong!');
		}
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    	$workshop = Workshop::find($id);
        return view('workshop.show')->with('workshop',$workshop);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $workshop = Workshop::find($id);
        return view('workshop.edit')->with('workshop',$workshop);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
			'name'=>'required|max:255',
			'contact_person'=>'required|max:255',
			'mobile'=>'required|max:255',
			'cin'=>'required|max:255',
			'email'=>'required|max:255'
		]);
		
		$workshop = Workshop::find($id);
		$workshop->company = $request->company;
		$workshop->name = $request->name;
		$workshop->code = $request->code;
		$workshop->reg_no = $request->reg_no;
		$workshop->mobile = $request->mobile;
		$workshop->email = $request->email;
		$workshop->address = $request->address;
		$workshop->cin = $request->cin;
		$workshop->gst = $request->gst;
		$workshop->user_sys = \Request::ip();
		$workshop->updated_by = Auth::id();
		
		$result = $workshop->save();
		
		if($result){
			return redirect()->back()->with('success', 'Record updated successfully!');
		}
		else{
			return redirect()->back()->with('error', 'Something went wrong!');
		}
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $workshop = Workshop::find($id);
        $result = $workshop->delete($id);
        if($result){
			return redirect()->back()->with('success', 'Record deleted successfully!');
		}
		else{
			return redirect()->back()->with('error', 'Something went wrong!');
		}
    }
}
