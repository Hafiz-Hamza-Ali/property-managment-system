<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Property;
use App\Invitation;
use DB;
use App\Mail\InviteMail;
use Illuminate\Support\Facades\Mail;
class FrontendController extends Controller
{
    //
    public function index(){
        $featured=DB::table('properties')->where('pro_type',0)->get();
        $recent=DB::table('properties')->where('pro_type',1)->get();
        $properties=Property::all();
        //print_r($recent);die();
        return view('frontend/index', compact('properties','recent','featured'));
    }
    public function about(){
        $recent=DB::table('properties')->join('images', 'images.imageable_id', '=', 'properties.id')->take(4)->get();
        return view('frontend/about',compact('recent'));
    }  
    public function sale(){
       
        $properties=DB::table('properties')->where('type',0)->get();
        $recent=DB::table('properties')->take(4)->get();
        //$recent=DB::table('properties')->join('images', 'images.imageable_id', '=', 'properties.id')->take(4)->get();
        return view('frontend/sale', compact('properties','recent'));
    } 
    public function rent(){
        
        // $properties = DB::table('properties')
        // ->join('images', 'images.imageable_id', '=', 'properties.id')
        // ->where('images.imageable_type', 'App\Property')
        // ->where('properties.type', 1)
        // ->get();
        $properties=DB::table('properties')->where('type',1)->get();
        $recent=DB::table('properties')->take(4)->get();
        return view('frontend/rent', compact('properties','recent'));
    }   
    public function team(){
        $recent=DB::table('properties')->join('images', 'images.imageable_id', '=', 'properties.id')->take(4)->get();
        return view('frontend/team',compact('recent'));
    }      
    public function properties(){
        $properties=DB::table('properties')->get();
       // dd($properties);die();
        $recent=DB::table('properties')->join('images', 'images.imageable_id', '=', 'properties.id')->take(4)->distinct()->get();
        return view('frontend/properties', compact('properties','recent'));
    }  
    public function property_detail($id=''){
        //dd('1');
      //  $properties=Property::find($id);
        $properties = DB::table('properties')
        ->join('images', 'images.imageable_id', '=', 'properties.id')
        ->where('properties.id', $id)
        ->where('images.imageable_type', 'App\Property')
        ->get();
    
        $featured=DB::table('properties')->join('images', 'images.imageable_id', '=', 'properties.id')->where('pro_type',0)->get();
        $recent=DB::table('properties')->where('pro_type',1)->get();
        $related=Property::where('user_id',$properties[0]->user_id)->orderBy('id', 'desc')->take(1)->get();
        //dd($related);
        return view('frontend/property_detail', compact('properties','featured','recent','related'));
    }    
    public function contact(){
        $recent=DB::table('properties')->join('images', 'images.imageable_id', '=', 'properties.id')->take(4)->get();
        return view('frontend/contact',compact('recent'));
    }      
    public function store(Request $request){
        $req = Invitation::create($request->all());
        $mail=Mail::to($req->email)->send(new InviteMail($req,$request));
        return $req;
    }  
    public function search($search){
       // dd($search);
        $properties = DB::table('properties')
        ->where('name', 'LIKE', "%{$search}%")
        ->get();
        $recent=Property::orderBy('id', 'desc')->take(3)->get();
        return view('frontend/properties', compact('properties','recent'));
        //dd($request->all());
        //$req = Invitation::create($request->all());
        //$mail=Mail::to($req->email)->send(new InviteMail($req,$request));
        //return $req;
    }  
}
