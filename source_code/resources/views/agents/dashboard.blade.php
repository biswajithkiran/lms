@extends('layouts.agents.page')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{URL('/agent')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-1 col-sm-6 col-xs-12"></div>
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="ion ion-ios-gear-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Total Leads</span>
              <span class="info-box-number">9</span>
            </div>
          </div>
        </div>
        <div class="col-md-1 col-sm-6 col-xs-12"></div>
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-red"><i class="fa fa-google-plus"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Completed Insertions</span>
              <span class="info-box-number">5</span>
            </div>
          </div>
        </div>

        <!-- <div class="clearfix visible-sm-block"></div> -->

        
        
      </div>


      <div class="row">
        <div class="col-md-1 col-sm-6 col-xs-12"></div>
        

        <!--  -->

        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="ion ion-ios-cart-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Duplicate Leads</span>
              <span class="info-box-number">6</span>
            </div>
          </div>
        </div>
        <div class="col-md-1 col-sm-6 col-xs-12"></div>
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Pending Insertiions</span>
              <span class="info-box-number">3</span>
            </div>
          </div>
        </div>
      </div>

    </section>
  </div>
  @endsection