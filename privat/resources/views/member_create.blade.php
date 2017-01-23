@extends('template.master')
@section('title')
{{$title}}
@endsection
@section('content')
<form action="{{url('/member/')}}" method="post" accept-charset="utf-8">
	Nama : <p><input type="text" name="nama"></p>
	Alamat : <p><input type="text" name="alamat"></p>
	No.hp : <p><input type="text" name="no_hp"></p>
	Email : <p><input type="text" name="email"></p>
	{{csrf_field()}}
	<input type="submit" name="submit" value="SIMPAN">
</form>
@endsection
