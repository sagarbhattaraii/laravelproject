@include('dashboard.header')

<div class="mt-3 mb-3">
<div class="container">
	<div class="row justify-content-center">
	<h3>Add Doctor Details</h3>
</div>
@if(count($errors)>0)
<div class='alert alert-success'>
		<button class='close' data-dismiss='alert' aria-label="close">&times</button>
		{{ "Cell no must be of 10 digits" }}
	</div>
@endif
	<form method="post" action="{{route('doctor.store')}}" enctype="multipart/form-data">
		@csrf
		
		<div class="form-group col-md-6">
			<label>Name</label>
			<input type='text' name='name' class='form-control' placeholder='Enter Doctor Name' required="">
		</div>

		<div class="form-group col-md-6">
			<label>Email</label>
			<input type='email' name='email' class='form-control' placeholder='Enter Doctor Email' required="">
		</div>

		<div class="form-group col-md-6">
			<label>Address</label>
			<input type='text' name='address' class='form-control' placeholder='Enter Doctor Address' required="">
		</div>

		<div class="form-group col-md-6">
			<label>Cell no</label>
			<input type='number' name='cellno' class='form-control' placeholder='Enter Doctor Cell no(i.e 10 digits)' required="">
		</div>

		
		<div class="form-group col-md-6">
			<label>Gender</label><br>
			<input type='radio' name='gender'  value='male'  required="">Male
			<input type='radio' name='gender'  value='female'  required="">Female
		</div>


		<div class="form-group col-md-6">
			<label>Qualification</label>
			<textarea name='qualification' class='form-control' placeholder='Enter Doctor Qualification' required=""></textarea>
		</div>

		<button class="btn btn-success">Create</button>
	</form>
</div>
</div>
@include('dashboard.footer')