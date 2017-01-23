<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\M_member;


class Member extends Controller
{
    public function memberpage()
    {
    	$title="Halaman Member";
    	$mem=M_member::all();
    	return view('member',['title'=>$title,'member'=>$mem]); 
    }

    public function viewmember($id)
    {
    	$member =M_member::find($id);
    	if(!$member)
    	  abort('404');

    	$title="View Member";
    	return view('member_view',['title'=>$title,'mem'=>$member]);
    }

    public function create()
    {
    	$title="Halaman Tambah Data";
    	return view('member_create',['title'=>$title]);
    }

    public function store(Request $request)
    {
		$member         = new M_Member;
		$member->nama   =$request->nama;
		$member->alamat =$request->alamat;
		$member->no_hp  =$request->no_hp;
		$member->email  =$request->email;
		$member->save();
    	return redirect('member');
    }

    public function edit($id)
    {
    	$member =M_member::find($id);
    	if(!$member)
    	  abort('404');

    	$title="Halaman Edit Data";
    	return view('member_edit',['title'=>$title,'mem'=>$member]);
    }

    public function prosesedit(Request $request, $id)
    {
    	$member =M_member::find($id);
		$member->nama   =$request->nama;
		$member->alamat =$request->alamat;
		$member->no_hp  =$request->no_hp;
		$member->email  =$request->email;
		$member->save();
    	return redirect('member');
    }

    public function hapus($id)
    {
    	$member =M_member::find($id);
    	if(!$member)
    	  abort('404');
		$member->delete();
    	return redirect('member');
    }
}
