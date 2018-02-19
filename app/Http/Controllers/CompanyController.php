<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;
use Auth;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$company = Company::all();
        return view('company.index')->with('company',$company);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('company.create');
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
			'name'=>'required|max:255',
			'contact_person'=>'required|max:255',
			'mobile'=>'required|max:255',
			'cin'=>'required|max:255',
			'email'=>'required|max:255'
		]);
		
		$company = new Company;
		$company->name = $request->name;
		$company->contact_person = $request->contact_person;
		$company->mobile = $request->mobile;
		//$company->phone = $request->phone;
		$company->email = $request->email;
		$company->address = $request->address;
		$company->cin = $request->cin;
		$company->gst = $request->gst;
		$company->status = 1;
		$company->user_sys = \Request::ip();
		$company->updated_by = Auth::id();
		$company->created_by = Auth::id();
		
		$result = $company->save();
		
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
        $company = Company::find($id);
        return view('company.show')->with('company', $company);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $company = Company::find($id);
        return view('company.edit')->with('company', $company);
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
		
		$company = Company::find($id);
		$company->name = $request->name;
		$company->contact_person = $request->contact_person;
		$company->mobile = $request->mobile;
		//$company->phone = $request->phone;
		$company->email = $request->email;
		$company->address = $request->address;
		$company->cin = $request->cin;
		$company->gst = $request->gst;
		$company->status = 1;
		$company->user_sys = \Request::ip();
		$company->updated_by = Auth::id();
		
		$result = $company->save();
		
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
        $company = Company::find($id);
        $result = $company->delete($id);
        if($result){
			return redirect()->back()->with('success', 'Record deleted successfully!');
		}
		else{
			return redirect()->back()->with('error', 'Something went wrong!');
		}
    }
}
