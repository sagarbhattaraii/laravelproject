@include('dashboard.header')


<div class="card-group">
<div class="card" style="width: 18rem;">
  <img src="{{asset('resources/assets/Male_Doctor-512.png')}}" class="card-img-top" alt="..." height='350' width='50'>
  <div class="card-body">
    <h5 class="card-title">Doctor</h5>
    <p class="card-text">
    <a href="{{route('admin.doctor')}}" class="btn btn-secondary">View Doctors</a>
  </div>
</div>

<div class="card" style="width: 18rem;">
  <img src="{{asset('resources/assets/Male_Doctor-512.png')}}" class="card-img-top" alt="..." height='350' width='50'>
  <div class="card-body">
    <h5 class="card-title">Appointment</h5>
    
    <a href="{{route('admin.appointment')}}" class="btn btn-secondary">View Appointment</a>
  </div>
</div>
</div>

@include('dashboard.footer')

