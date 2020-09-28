@include('dashboard.header')

<div class="mt-3 mb-3">
<div class="container">
	<h3>Add Appointment</h3>
</div>

@if(count($errors)>0)
<div class='alert alert-success'>
		<button class='close' data-dismiss='alert' aria-label="close">&times</button>
		{{ "Cell no must be of 10 digits" }}
	</div>
@endif
	<form method="post" action="{{route('appointment.store')}}">
		@csrf

		<div class="form-group col-md-6">
			<label>Select Doctor</label>
			<select name='doctor_id' class='form-control' required="">
				<option value='0'>Select Doctor</option>
				@foreach($data as $value)
				<option value="{{$value->id}}">{{$value->dname}}</option>
				@endforeach
			</select>
		</div>

		<div class="form-group col-md-6">
			<label>Patient Name</label>
			<input type='text' name='pname' class='form-control' placeholder="Enter Patient Name" required="">
		</div>
		<div class="form-group col-md-6">
			<label>Patient Email</label>
			<input type='email' name='pemail' class='form-control' placeholder="Enter Patient Email" required="">
		</div>

		<div class="form-group col-md-6">
			<label>Patient Address</label>
			<input type='text' name='paddress' class='form-control' placeholder="Enter Patient Address" required="">
		</div>

		<div class="form-group col-md-6">
			<label>Patient Cell no</label>
			<input type='number' name='pcellno' class='form-control' placeholder="Enter Patient Cell no.(i.e 10 digits)"required="">
		</div>

		
		<div class="form-group">
			<label>Patient Gender</label>
			<input type='radio' name='pgender'  value='male'  required="">Male
			<input type='radio' name='pgender'  value='female'  required="">Female
		</div>

		<div class="form-group col-md-6">
			<label>Appointment Date</label>
			<input type='date' name='adate' class='form-control' required="">
		</div>
		@if($errors->has('adate'))
		<div class='error-text'>
			{{$errors->first('adate')}}
		</div>
		@endif

		<div class="form-group col-md-6">
			<label>Appointment Time</label>
			<input type='time' name='atime' class='form-control' required="">
		</div>

		<div class="form-group col-md-6">
			<label>Description</label>
			<textarea name='description' class='form-control' placeholder="Enter Description" required=""></textarea>
		</div>

		<div class="form-group">
			<label>Status</label>
			<input type='radio' name='status'  value='0'  required="">Pending
			<input type='radio' name='status'  value='1'  required="">Fixed
		</div>
		<button class="btn btn-success">Create</button>
	</form>
</div>
@include('dashboard.footer')