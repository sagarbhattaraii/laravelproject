@include('dashboard.header')
<div class="container">
	@if(session()->has('status'))
	<div class='alert alert-success'>
		<button class='close' data-dismiss='alert' aria-label="close">&times</button>
		{{ session()->get('status')}}
	</div>
	@endif
	<table class="table table-hover">
	<center>
	<h1>Appointment Details</h1>
	<small><a href="{{route('appointment.create')}}"
		class="btn btn-primary float-left">Create</a></small>
	</center>
	<br>
	

		<thead class='thead-dark'>
			<tr>
				<th scope="col">ID</th>
				<th scope="col">Name</th>
				<th scope="col">Email</th>
				<th scope="col">Address</th>
				<th scope="col">Cellno</th>
				<th scope="col">Gender</th>
				<th scope="col">Date</th>
				<th scope="col">Time</th>
				<th scope="col">Doctor Name</th>
				<th scope="col">Status</th>
				<th scope="col">Operation</th>
			</tr>
		</thead>
		<tbody>
			@foreach($data as $key => $value)
			<tr>
				<td>{{$data->firstItem() + $key}}</td>
				<td>{{$value->pname}}</td>
				<td>{{$value->pemail}}</td>
				<td>{{$value->paddress}}</td>
				<td>{{$value->pcellno}}</td>
				<td>{{$value->pgender}}</td>
				<td>{{date('M d, Y',strtotime($value->adate))}}</td>
				<td>{{$value->atime}}</td>
				<td>{{$value->doctor->dname}}</td>
				@if(($value->status)==1)
				<td><span class="badge badge-success">Fixed</span></td>
				@else
				<td><span class="badge badge-danger">Pending</span></td>
				@endif
				<td>
					<a href="{{route('appointment.edit',$value->id)}}" class="btn btn-info"><img src="{{asset('resources/assets/icons/pencil.svg')}}" alt="..." height='20' width='20'>Edit</a>
					<form action="{{route('appointment.destroy',$value->id)}}" method="POST">
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