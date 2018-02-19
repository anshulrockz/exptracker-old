<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Location;
use App\Workshop;
use Auth;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $location = Location::all(); 
        return view('location.index')->with('location',$location);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $workshop = Workshop::all();
        return view('location.create')->with('workshop',$workshop);
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
			'workshop'=>'required|max:255',
			'name'=>'required|max:100',
			'contact_person'=>'required|max:255',
			'mobile'=>'required|numeric',
			'address'=>'required|max:255',
		]);
		
		$location = new Location;
		$location->workshop_id = $request->workshop;
		$location->name = $request->name;
		$location->contact_person = $request->contact_person;
		$location->mobile = $request->mobile;
		$location->phone = $request->phone;
		$location->address = $request->address;
		$location->remark = $request->remark;
		$location->status = $request->status;
		$location->user_sys = \Request::ip();
		$location->status = 1;
		$location->updated_by = Auth::id();
		$location->created_by = Auth::id();
		
		$result = $location->save();
		
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
    	$location = Location::find($id);
        return view('location.show')->with('location', $location );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $location = Location::find($id);
    	$workshop = Workshop::all();
        return view('location.edit')->with(array('location' => $location, 'workshop' => $workshop));
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
			'workshop'=>'required|max:255',
			'name'=>'required|max:100',
			'contact_person'=>'required|max:255',
			'mobile'=>'required|numeric',
			'phone'=>'numeric',
			'address'=>'required|max:255',
		]);
		
		$location = Location::find($id);
		$location->workshop_id = $request->workshop;
		$location->name = $request->name;
		$location->contact_person = $request->contact_person;
		$location->mobile = $request->mobile;
		$location->phone = $request->phone;
		$location->address = $request->address;
		$location->remark = $request->remark;
		$location->status = $request->status;
		$location->user_sys = \Request::ip();
		$location->status = 1;
		$location->updated_by = Auth::id();
		
		$result = $location->save();
		
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
        $location = Location::find($id);
        $result = $location->delete($id);
        if($result){
			return redirect()->back()->with('success', 'Record deleted successfully!');
		}
		else{
			return redirect()->back()->with('error', 'Something went wrong!');
		}
    }
}
