<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
    @yield('page_title')
    <!-- csrf_token for edit, detele & show -->
      <meta name="_token" content="{{csrf_token()}}" />

    <link href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.1.0/css/flag-icon.min.css" rel="stylesheet">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{asset('adminLTE/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('adminLTE/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('adminLTE/dist/css/adminlte.min.css')}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <!-- DataTables -->
  <link rel="stylesheet" href="{{asset('adminLTE/plugins/datatables-bs4/css/dataTables.bootstrap4.css')}}">
  <link rel="stylesheet" href="https://cdn.datatables.net/fixedcolumns/3.3.0/css/fixedColumns.dataTables.min.css">

  <link href='http://mdminhazulhaque.github.io/solaimanlipi/css/solaimanlipi.css' rel='stylesheet' type='text/css'>
<!-- sweetalert2 -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>


 <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
 <style media="screen">
 .content-wrapper {
  font-family: 'Merriweather','SolaimanLipi',sans-serif;
}
 </style>
  @yield('public_css')
</head>
