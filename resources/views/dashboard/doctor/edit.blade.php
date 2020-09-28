@include('dashboard.header')

<div class="mt-3 mb-3">
<div class="container">
	<h3>Edit Doctor Details</h3>
</div>
@if(count($errors)>0)
<div class='alert alert-success'>
		<button class='close' data-dismiss='alert' aria-label="close">&times</button>
		{{ "Cell no must be of 10 digits" }}
	</div>
@endif
	<form method="post" action="{{route('doctor.update',$data->id)}}">
		@csrf
		@method('PUT')
		<div class="form-group col-md-6">
			<label>Name</label>
			<input type='text' name='name' class='form-control' value="{{ $data['dname']}}" required="">
		</div>

		<div class="form-group col-md-6">
			<label>Email</label>
			<input type='email' name='email' value="{{ $data['email']}}" class='form-control' required="">
		</div>

		<div class="form-group col-md-6">
			<label>Address</label>
			<input type='text' name='address' value="{{ $data['address']}}" class='form-control' required="">
		</div>

		<div class="form-group col-md-6">
			<label>Cell no</label>
			<input type='number' name='cellno'  value="{{ $data['cellno']}}" class='form-control' required="">
		</div>

		
		<div class="form-group">
			<label>Gender</label>
			<input type='radio' name='gender'  value='male'  required="" @if($data->gender=="male")
					checked 
					@endif>Male
			<input type='radio' name='gender'  value='female'  required="" @if($data->gender=="female")
					checked 
					@endif>Female
		</div>


		<div class="form-group col-md-6">
			<label>Qualification</label>
			<textarea name='qualification' class='form-control' required="">{{ $data['qualification']}}</textarea>
		</div>

		<button class="btn btn-success">Create</button>
	</form>
</div>
@include('dashboard.footer')