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
                <h5>From: {{$contact->email}}
                <span class="mailbox-read-time pull-right">{{$contact->created_at}}</span></h5>
              </div>
              <!-- /.mailbox-read-info -->
              <div class="mailbox-controls with-border text-center">
                <div class="btn-group">
                  <a href="" data-toggle="modal" data-target="#delete{{$contact->id}}"><button type="button" class="btn btn-danger btn-sm"> <i class="fa fa-trash-o"></i></button></a>
                  
                </div>
              </div>
              <!-- /.mailbox-controls -->
              <div class="mailbox-read-message">
                <h4>Name:{{$contact->name}}</h4>
                <h4>Email:{{$contact->email}}</h4>
                <h4>Message:{!!$contact->message!!}</h4>
              </div>
              <!-- /.mailbox-read-message -->
            </div>
            <!-- /.box-body -->
            
            <!-- /.box-footer -->
            <div class="box-footer">
              
              <a href="{{ route('contactreply',$contact->id) }}" class="btn btn-primary pull-right"><i class="fa fa-reply"></i>Reply</a>
              <a href="{{URL()->previous()}}" class="btn btn-primary pull-left"><i class="fa fa-angle-left"></i>Back</a>
            </div>
            <!-- /.box-footer -->
          </div>
          <!-- /. box -->
        </div>
      </div>
    </section>
  </div>
</div>
{{-- deletemodal --}}
<div id="delete{{$contact->id}}" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
     
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Delete Message</h4>
        </div>
        <div class="modal-body">
          <h2> <p>Are you sure to delete ??</p> </h2>
        </div>
        <div class="modal-footer">
        <form action="{{ route('contacts.destroy',$contact->id) }}" method="POST">
          @csrf
          <button type="submit" class="btn btn-danger pull-left">Delete</button>
        </form>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
    {{-- </form> --}}
    </div>
  </div>
</div>

@endsection