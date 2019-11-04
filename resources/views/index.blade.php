@extends('layouts.layouts')

@section('sidebar')

<!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SISTEMA MV <sup>Servicios</sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="index.html">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Menu</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        WorkSpace
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-folder"></i>
          <span>Carga</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Asignacion</h6>
            <a class="collapse-item" href="#">Los Parques</a>
            <a class="collapse-item" href="#">Tallyman</a>
            <a class="collapse-item" href="#">Falabella</a>

            <div class="collapse-divider"></div>
            <h6 class="collapse-header">Pagos</h6>
            <a class="collapse-item" href="#">Beco</a>
            <a class="collapse-item" href="#">Cencosud</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Asignacion</span></a>
      </li>

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBloqueos" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-table"></i>
          <span>Bloqueos</span>
        </a>
        <div id="collapseBloqueos" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Cajas de Compensacion</h6>
            <a class="collapse-item" href="#">Caja 18</a>
            <a class="collapse-item" href="#">Los Andes</a>

            <div class="collapse-divider"></div>
            <h6 class="collapse-header">Aseguradora</h6>
            <a class="collapse-item" href="#">Mesos</a>

            <div class="collapse-divider"></div>
            <h6 class="collapse-header">Banco</h6>
            <a class="collapse-item" href="#">Santander</a>
          </div>
        </div>

      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

@endsection
