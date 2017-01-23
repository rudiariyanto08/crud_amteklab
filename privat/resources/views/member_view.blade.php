@extends('template.master')
@section('title')
{{$title}}
@endsection
@section('content')
	Nama : {{$mem->nama}}</br>
	Alamat : {{$mem->alamat}}</br>
	No.hp : {{$mem->no_hp}}</br>
	Email : {{$mem->email}}</br>
@endsection
