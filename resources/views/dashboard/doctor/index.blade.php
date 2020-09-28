@include('dashboard.header')
<div class="container">
	@if(session()->has('status'))
	<div class='alert alert-success'>
		<button class='close' data-dismiss='alert' aria-label="close">&times</button>
		{{ session()->get('status')}}
	</div>
	@endif
	<center><h2>Doctor</h2></center>
	<small><a href="{{route('doctor.create')}}" class="btn btn-primary float-right">Create</a></small>
	<table class="table table-hover">
		<thead class='thead-dark'>
			<tr>
				<th scope="col">ID</th>
				<th scope="col">Name</th>
				<th scope="col">Email</th>
				<th scope="col">Address</th>
				<th scope="col">Cell No.</th>
				<th scope="col">Gender</th>
				<th scope="col">Qualification</th>
				<th scope="col">Operation</th>
			</tr>
		</thead>
		<tbody>
			@foreach($data as $key => $value)
			<tr>
				<td>{{$data->firstItem() + $key}}</td>
				<td>{{$value->dname}}</td>
				<td>{{$value->email}}</td>
				<td>{{$value->address}}</td>
				<td>{{$value->cellno}}</td>
				<td>{{$value->gender}}</td>
				<td>{{$value->qualification}}</td>
				<td>
					<a href="{{route('doctor.edit',$value->id)}}" class="btn btn-info"><img src="{{asset('resources/assets/icons/pencil.svg')}}" alt="..." height='20' width='20'>Edit</a>
					<form action="{{route('doctor.destroy',$value->id)}}" method="POST">
						@csrf
						@method('DELETE')
						<button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure ?')"><img src="{{asset('resources/assets/icons/trash.svg')}}" alt="..." height='20' width='20'>Delete</button>
					</form>
				</td>
			</tr>
			@endforeach

		</tbody>
	</table>
	<div class="justify-content-center">
		@if(class_basename($data)!=='Collection')
		{{ $data->links()}}
		@endif

</div>
@include('dashboard.footer')