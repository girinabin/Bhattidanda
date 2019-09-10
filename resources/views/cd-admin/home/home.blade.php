@extends('cd-admin.home-master')
@section('page-title')
Home
@endsection
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="container-fluid">
  <section class="content-header">
    <h1>
    Dashboard
    </h1>
    <ol class="breadcrumb">
      <li><i class="fa fa-dashboard"></i> Dashboard</li>
    </ol>
  </section>
  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-aqua">
          <div class="inner">
            <h3>{{$booking}}</h3>
            <p>Booking Request</p>
          </div>
          <div class="icon">
            <i class="ion ion-bag"></i>
          </div>
          <a href="{{ route('bookings.inbox') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-green">
          <div class="inner">
            <h3>{{$accepted}}<sup style="font-size: 20px"></sup></h3>
            <p>Approved Booking</p>
          </div>
          <div class="icon">
            <i class="ion ion-checkmark"></i>
          </div>
          <a href="{{ route('bookings.inbox') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-yellow">
          <div class="inner">
            <h3>{{$rejected}}</h3>
            <p>Rejected Booking</p>
          </div>
          <div class="icon">
            <i class="ion ion-close"></i>
          </div>
          <a href="{{ route('bookings.inbox') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-red">
          <div class="inner">
            <h3>{{$pack}}</h3>
            <p>Packages</p>
          </div>
          <div class="icon">
            <i class="ion ion-pie-graph"></i>
          </div>
          <a href="{{ route('packages.index') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>

      
    </div>
    <div class="row">
      <div class="col-md-6">
          <div class="box box-info">
            <div class="box-header">
              <i class="fa fa-envelope"></i>

              <h3 class="box-title">Quick Email</h3>
              <!-- tools box -->
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip"
                        title="Remove">
                  <i class="fa fa-times"></i></button>
              </div>
              <!-- /. tools -->
            </div>
            <div class="box-body">
              
              <form action="{{ route('quick.store') }}" method="post">
                @csrf
                <div class="form-group">
                  <div class="text text-danger">{{$errors->first('emailto')}}</div>
                  <input type="email" class="form-control" name="emailto" placeholder="Email to:">
                </div>
                <div class="form-group">
                  <div class="text text-danger">{{$errors->first('subject')}}</div>

                  <input type="text" class="form-control" name="subject" placeholder="Subject">
                </div>
                <div>
                  <div class="text text-danger">{{$errors->first('message')}}</div>

                  <textarea class="textarea summernote" name="message" placeholder="Message"  
                            style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                </div>
                <div class="box-footer clearfix">
              <button type="submit" class="pull-right btn btn-default" id="sendEmail">Send
                <i class="fa fa-arrow-circle-right"></i></button>
                </div>
             </form>
             </div>
           </div>
      </div>
      <div class="col-md-6">
        <div class="box box-info">
            <div class="box-header">
              <i class="fa fa-envelope"></i>

              <h3 class="box-title">Recent Reply</h3>
              <a href="{{ route('q.sent') }}"><button class="btn btn-primary pull-right">View all Quick Mail</button></a>
             
            </div>
            <div class="box-body">
              
              <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th>Email to</th>
                  <th>Subject</th>
                  <th>Message</th>
                </tr>
                <tr>
                  @foreach($qreply as $q)
                  
                  <td><a href="{{ route('q.view',$q->id) }}">{{e($q->emailto)}}</a></td>
                  <td>{{e(str_limit($q->subject,$limits='15'))}})</td>
                  <td>{!!str_limit($q->message,$limits='15') !!}</td>


                </tr>
                  @endforeach

                  

               
            </table>
          </div>
          
             </div>
           </div>
      </div>
      
      {{-- <div class="col-md-6">
        <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th>Email to</th>
                  <th>Subject</th>
                  <th>Message</th>
                </tr>
                <tr>
                  @foreach($qreply as $q)
                  
                  <td><a href="{{ route('q.view',$q->id) }}">{{e($q->emailto)}}</a></td>
                  <td>{{e(str_limit($q->subject,$limits='15'))}})</td>
                  <td>{!!str_limit($q->message,$limits='15') !!}</td>


                </tr>
                  @endforeach

                  

               
            </table>
          </div>
          <a href="{{ route('q.sent') }}"><button class="btn btn-primary">View all Quick Mail</button></a>
      </div> --}}
    
    
  </section>
  </div>
</div>
@endsection