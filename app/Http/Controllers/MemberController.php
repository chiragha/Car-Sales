<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use Illuminate\support\facades\Hash;

class MemberController extends Controller
{
    protected $member;
    public function __construct(){
        $this->member = new Member();
        
    }

    public function index()
    {
        $members = member::all();
       return view ('member.index')->with('members',$members);
    }
    protected $brand;

    public function store(Request $request)
    {
       //dd($request);
       if(isset($request['password'])){
        $request['password'] = Hash::make($request['password']);
       }
        $this->member->create($request->all());
        return redirect()->back();
    }

    public function edit($id)
    {
        $member = Member::find($id);
        return view('member.edit',compact('member'));
    }

    public function update(Request $request, string $id)
    {
        $members = Member::find($id);
        $input = $request->all();
        $members->update($input);
        return redirect('allmembers'); 
    }

    public function destroy(string $id)
    {
        Member::destroy($id);
        return redirect('allmembers');  
    }
}
