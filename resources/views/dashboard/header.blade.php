<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title> MY DASHBOARD</title>
  <link href="{{asset('resources/assets/css/all.min.css')}}" rel="stylesheet" type="text/css">
  <link href="{{asset('resources/assets/css/sb-admin-2.min.css')}}" rel="stylesheet">
  <script src="{{asset('resources/assets/js/jquery.min.js')}}"></script>
  <script src="{{asset('resources/assets/js/bootstrap.bundle.min.js')}}"></script>
  
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">
    <!-- Sidebar -->

   <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
  <div class="sidebar-brand-icon rotate-n-15">
    <i class="fas fa-laugh-wink"></i>
  </div>
  <div class="sidebar-brand-text mx-3">ADMIN DASHBOARD</div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item active">
  <a class="nav-link" href="{{ route('dashboard')}}"><img src="{{asset('resources/assets/icons/house.svg')}}" alt="..." height='20' width='20'>
   
    <span>Dashboard</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
  Interface
</div>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
    <i class="fas fa-fw fa-cog"></i>
    <span>Doctor</span>
  </a>
  <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">
      <h6 class="collapse-header">Doctors</h6>

      <a class="collapse-item" href="{{route('doctor.create')}}"><img src="{{asset('resources/assets/icons/plus.svg')}}" alt="..." height='20' width='20'>Add Doctor</a>
      <a class="collapse-item" href="{{route('admin.doctor')}}"><img src="{{asset('resources/assets/icons/eye.svg')}}" alt="..." height='20' width='20'>View Doctor</a>
    </div>
  </div>
</li>



<!-- Nav Item - Utilities Collapse Menu -->
<li class="nav-item">
  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
    <i class="fas fa-fw fa-wrench"></i>
    <span>Appointment</span>
  </a>
  <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">
      <h6 class="collapse-header">Appointment</h6>
      <a class="collapse-item" href="{{route('appointment.create')}}"><img src="{{asset('resources/assets/icons/plus.svg')}}" alt="..." height='20' width='20'>Add Appointment</a>
      
      <a class="collapse-item" href="{{route('admin.appointment')}}"><img src="{{asset('resources/assets/icons/eye.svg')}}" alt="..." height='20' width='20'>View Appointment</a>
    </div>
  </div>
</li>

<li class="nav-item">
  <a class="nav-link" href="javascript:void(0)" onclick="$('#Logout-form').submit();">
    <i class="fas fa-fw fa-chart-area"></i>
    <span>Logout</span></a>
</li>
<form id="Logout-form" action="{{route('logout')}}" method="POST" style="display:none;">
  @csrf
  </form> 

<hr class="sidebar-divider d-none d-md-block">






</ul>
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
            <center>Admin Dashboard</center>
        </nav>