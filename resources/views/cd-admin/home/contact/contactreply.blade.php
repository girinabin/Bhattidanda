
@extends('cd-admin.home-master')
@section('page-title')
Contact Reply
@endsection
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <div class="container-fluid">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      Contact Reply
      </h1>
      <ol class="breadcrumb">
        <li><i class="fa fa-dashboard"></i> Dashboard/Contact/Inbox/View/Reply</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="box box-info">
          <div class="box-header">
            <i class="fa fa-envelope"></i>
            <h3 class="box-title">Quick Email</h3>
            <!-- tools box -->
           {{--  <div class="pull-right box-tools">
              <button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip"
              title="Remove">
              <i class="fa fa-times"></i></button>
            </div> --}}
            <!-- /. tools -->
          </div>
          <div class="box-body">
            <form action="{{ route('contacts.mailreply',$contact->id) }}" method="POST">
              @csrf
              <div class="form-group">
                <div class="text text-danger">{{$errors->first('emailto')}}</div>
                <input type="email" class="form-control" name="emailto" value="{{$contact->email}}" placeholder="Email to:">
              </div>
              <div class="form-group">
                <div class="text text-danger">{{$errors->first('subject')}}</div>

                <input type="text" class="form-control" name="subject" placeholder="Subject">
              </div>
              <div>
                <div class="text text-danger">{{$errors->first('message')}}</div>

                <textarea class="textarea" placeholder="Message" name="message" id="summernote"
                style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
              </div>
              <div class="form-group">
                <div class="text text-danger">{{$errors->first('active')}}</div>
                <label for="active">Status</label>
                  <div class="radio">
                    <label>
                      
                      <input type="radio" name="active"  value="1" checked >Replyed<br>
                      

                    </label>
                  </div>
                 

              </div>
              <div class="box-footer clearfix">
                <button type="submit" class="pull-right btn btn-default" id="sendEmail">Send
                <i class="fa fa-arrow-circle-right"></i></button>
              </div>
            </form>
          </div>
        </div>
        
        
      </div>
    </section>
  </div>
</div>
@endsection