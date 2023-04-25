<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\ShipDistrict;
use App\Models\ShipDivision;
use App\Models\ShipState;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ShippingAreaController extends Controller
{
    public function divisionView(){
        $id = Auth::user()->id;
        $divisions = ShipDivision::where('admins_id', $id)->orderBy('id','DESC')->get();
        return view('backend.ship.division.view_division',compact('divisions'));

    }


    public function divisionStore(Request $request){

        $request->validate([
            'division_name' => 'required',

        ]);

        // To check Admin
        $id = Auth::user()->id;
        $admin_id = \App\Models\Admin::where('id', $id)->max('id');
        ShipDivision::create([
            'division_name' => $request->division_name,
            'admins_id' => $admin_id,
        ]);

        $notification = array(
            'message' => 'Division Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    } // end method
    public function divisionEdit($id){

        $divisions = ShipDivision::findOrFail($id);
        return view('backend.ship.division.edit_division',compact('divisions'));
    }
    public function divisionUpdate(Request $request,$id){

        ShipDivision::findOrFail($id)->update([
            'division_name' => $request->division_name,
            'created_at' => Carbon::now(),

        ]);

        $notification = array(
            'message' => 'Division Updated Successfully',
            'alert-type' => 'info'
        );

        return redirect()->route('manage-division')->with($notification);


    } // end mehtod


    public function divisionDelete($id){

        ShipDivision::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Division Deleted Successfully',
            'alert-type' => 'info'
        );

        return redirect()->back()->with($notification);
    } // end method

    //// Start Ship District

    public function districtView(){
        $id = Auth::user()->id;
        $division = ShipDivision::where('admins_id', $id)->orderBy('division_name','ASC')->get();
        $district = ShipDistrict::where('admins_id', $id)->with('division')->orderBy('id','DESC')->get();
        return view('backend.ship.district.view_district',compact('division','district'));
    }

    public function DistrictStore(Request $request){

        $request->validate([
            'division_id' => 'required',
            'district_name' => 'required',

        ]);

        // To check Admin
        $id = Auth::user()->id;
        $admin_id = \App\Models\Admin::where('id', $id)->max('id');
        ShipDistrict::create([
            'division_id' => $request->division_id,
            'district_name' => $request->district_name,
            'admins_id' => $admin_id,
        ]);

        $notification = array(
            'message' => 'District Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    } // end method

    public function districtEdit($id){
        $division = ShipDivision::orderBy('division_name','ASC')->get();
        $district = ShipDistrict::findOrFail($id);
        return view('backend.ship.district.edit_district',compact('district','division'));
    }

    public function districtUpdate(Request $request,$id){

        ShipDistrict::findOrFail($id)->update([

            'division_id' => $request->division_id,
            'district_name' => $request->district_name,
            'created_at' => Carbon::now(),

        ]);

        $notification = array(
            'message' => 'District Updated Successfully',
            'alert-type' => 'info'
        );

        return redirect()->route('manage-district')->with($notification);


    } // end mehtod
    public function districtDelete($id){

        ShipDistrict::findOrFail($id)->delete();

        $notification = array(
            'message' => 'District Deleted Successfully',
            'alert-type' => 'info'
        );
        return redirect()->back()->with($notification);

    } // end method
    //// End Ship District


    ////////////////// Ship State //////////
    public function stateView(){
        $id = Auth::user()->id;
        $division = ShipDivision::where('admins_id', $id)->orderBy('division_name','ASC')->get();
        $district = ShipDistrict::where('admins_id', $id)->orderBy('district_name','ASC')->get();

        $state = ShipState::where('admins_id', $id)->with(['division','district'])->orderBy('id','DESC')->get();
        // dd($state);
        return view('backend.ship.state.view_state',
            compact('division','district','state'));
    }

    public function stateStore(Request $request){

        $request->validate([
            'division_id' => 'required',
            'district_id' => 'required',
            'state_name' => 'required',

        ]);

        // To check Admin
        $id = Auth::user()->id;
        $admin_id = \App\Models\Admin::where('id', $id)->max('id');
        ShipState::create([
            'division_id' => $request->division_id,
            'district_id' => $request->district_id,
            'state_name' => $request->state_name,
            'admins_id' => $admin_id,
        ]);

        $notification = array(
            'message' => 'State Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    } // end method


    public function stateEdit($id){
        $division = ShipDivision::orderBy('division_name','ASC')->get();
        $district = ShipDistrict::orderBy('district_name','ASC')->get();
        $state = ShipState::findOrFail($id);
        return view('backend.ship.state.edit_state',compact('division','district','state'));
    }

    public function stateUpdate(Request $request,$id){

        ShipState::findOrFail($id)->update([

            'division_id' => $request->division_id,
            'district_id' => $request->district_id,
            'state_name' => $request->state_name,
            'created_at' => Carbon::now(),

        ]);

        $notification = array(
            'message' => 'State Updated Successfully',
            'alert-type' => 'info'
        );

        return redirect()->route('manage-state')->with($notification);


    } // end mehtod


    public function stateDelete($id){

        ShipState::findOrFail($id)->delete();

        $notification = array(
            'message' => 'State Deleted Successfully',
            'alert-type' => 'info'
        );

        return redirect()->back()->with($notification);

    } // end method

    //////////////// End Ship State ////////////
}
