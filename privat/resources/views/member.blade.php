@extends('template.master')
@section('title')
{{$title}}
@endsection
@section('content')
<p><a href="member/create">TAMBAH DATA</a></p>
<table>
	<thead>
		<tr>
			<th>Nama</th>
			<th>Alamat</th>
			<th>No.HP</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
		@foreach($member as $m)
		<tr>
			<td>{{$m->nama}}</td>
			<td>{{$m->alamat}}</td>
			<td>{{$m->no_hp}}</td>
			<td><a href="member/view/{{$m->id}}">VIEW</a></td>
			<td><a href="member/edit/{{$m->id}}">EDIT</a></td>
			<td>
				<form action="member/{{$m->id}}" method="post" accept-charset="utf-8">
					<input type="submit" name="submit" value="delete">
					{{csrf_field()}}
					<input type="hidden" name="_method" value="DELETE">
				</form>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>
@endsection