@extends('cd-admin.home-master')
@section('page-title')
Contact read
@endsection
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <div class="container">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      Contact
      </h1>
      <ol class="breadcrumb">
        <li><i class="fa fa-dashboard"></i> Dashboard/Contact/Inbox/View</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Read Mail</h3>
              <div class="box-tools pull-right">
                <a href="#" class="btn btn-box-tool" data-toggle="tooltip" title="Previous"><i class="fa fa-chevron-left"></i></a>
                <a href="#" class="btn btn-box-tool" data-toggle="tooltip" title="Next"><i class="fa fa-chevron-right"></i></a>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <div class="mailbox-read-info">
                <h5>From: help@example.com
                <span class="mailbox-read-time pull-right">15 Feb. 2016 11:03 PM</span></h5>
              </div>
              <!-- /.mailbox-read-info -->
              <div class="mailbox-controls with-border text-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-danger btn-sm" data-toggle="tooltip" data-container="body" title="Delete">
                  <i class="fa fa-trash-o"></i></button>
                </div>
              </div>
              <!-- /.mailbox-controls -->
              <div class="mailbox-read-message">
                <h4>Name:Nabin Giri</h4>
                <h4>Email:giri.nabin1994@gmail.com</h4>
                <h4>Message:Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h4>
              </div>
              <!-- /.mailbox-read-message -->
            </div>
            <!-- /.box-body -->
            
            <!-- /.box-footer -->
            <div class="box-footer">
              
              <a href="{{ route('contactreply') }}" class="btn btn-primary pull-right"><i class="fa fa-reply"></i>Reply</a>
              <a href="#" class="btn btn-primary pull-left"><i class="fa fa-angle-left"></i>Back</a>
            </div>
            <!-- /.box-footer -->
          </div>
          <!-- /. box -->
        </div>
      </div>
    </section>
  </div>
</div>
@endsection