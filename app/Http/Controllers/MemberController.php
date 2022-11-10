<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class MemberController extends Controller
{
    public function index(Member $members)
    {
        return view('members.index', [
            'title' => 'Member',
            'members' => $members->all()
        ]);
    }
}
