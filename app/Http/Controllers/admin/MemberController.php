<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Member;

class MemberController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $members = Member::paginate(10);
        

        return view('admin/members/all', [
            'members' => $members
        ]);
    }
    public function delete($id){
        $member = Member::find($id);
        $member->delete();
        return redirect('/admin/members');
    }
}
