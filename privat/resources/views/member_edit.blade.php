@extends('template.master')
@section('title')
{{$title}}
@endsection
@section('content')
<form action="{{url('/member/').'/'.$mem->id}}" method="post" accept-charset="utf-8">
	<input type="hidden" name="_method" value="put">
	Nama : <p><input type   ="text" name="nama" value="{{$mem->nama}}"></p>
	Alamat : <p><input type ="text" name="alamat" value="{{$mem->alamat}}"></p>
	No.hp : <p><input type  ="text" name="no_hp" value="{{$mem->no_hp}}"></p>
	Email : <p><input type  ="text" name="email" value="{{$mem->email}}"></p>
	<input type="submit" name="submit" value="UPDATE">
		{{ csrf_field() }}
</form>
</form>
@endsection
