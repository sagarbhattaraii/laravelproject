@include('dashboard.header')

<div class="mt-3 mb-3">
<div class="container">
	<h3>Edit Appointment Details</h3>
</div>
@if(count($errors)>0)
<div class='alert alert-success'>
		<button class='close' data-dismiss='alert' aria-label="close">&times</button>
		{{ "Cell no must be of 10 digits" }}
	</div>
@endif
	<form method="post" action="{{route('appointment.update',$data->id)}}">
		@csrf
		@method('PUT')
		<div class="form-group col-md-6">
			<label>Select Doctor</label>
			<select name='doctor_id' class='form-control' required="">
				<option value='0'>Select Doctor</option>
				@foreach($doctor as $value)
				<option value="{{$value->id}}" 
					@if($data->doctor_id==$value->id)
					selected 
					@endif>{{$value->dname}}</option>
				@endforeach
			</select>
		</div>

		<div class="form-group col-md-6">
			<label>Patient Name</label>
			<input type='text' name='pname' class='form-control' value="{{ $data['pname'] }}" required="">
		</div>
		<div class="form-group col-md-6">
			<label>Patient Email</label>
			<input type='email' name='pemail' value="{{ $data['pemail'] }}" class='form-control' required="">
		</div>

		<div class="form-group col-md-6">
			<label>Patient Address</label>
			<input type='text' name='paddress' class='form-control' value="{{ $data['paddress'] }}" required="">
		</div>

		<div class="form-group col-md-6">
			<label>Patient Cell no</label>
			<input type='number' name='pcellno' class='form-control' value="{{ $data['pcellno'] }}" required="">
		</div>

		
		<div class="form-group">
			<label>Patient Gender</label>
			<input type='radio' name='pgender'  value='male'  required="" @if($data->pgender=="male")
					checked 
					@endif>Male
			<input type='radio' name='pgender'  value='female'  required="" @if($data->pgender=="female")
					checked 
					@endif>Female
		</div>

		<div class="form-group col-md-6">
			<label>Appointment Date</label>
			<input type='date' name='adate' class='form-control' value="{{ $data['adate'] }}" required="">
		</div>
		@if($errors->has('adate'))
		<div class='error-text'>
			{{$errors->first('adate')}}
		</div>
		@endif

		<div class="form-group col-md-6">
			<label>Appointment Time</label>
			<input type='time' name='atime' class='form-control' value="{{ $data['atime'] }}" required="">
		</div>

		<div class="form-group col-md-6">
			<label>Description</label>
			<textarea name='description' class='form-control' required="">{{ $data['description'] }}</textarea>
		</div>

		<div class="form-group">
			<label>Status</label>
			<input type='radio' name='status'  value='0'  required="" @if($data->status==0)
					checked 
					@endif>Pending
			<input type='radio' name='status'  value='1'  required="" @if($data->status==1)
					checked 
					@endif>Fixed
		</div>
		<button class="btn btn-success">Edit</button>
	</form>
</div>
@include('dashboard.footer')