@extends('cd-admin.home-master')
@section('page-title')
Booking read
@endsection
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <div class="container">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      Booking Request 
      </h1>
      <ol class="breadcrumb">
        <li><i class="fa fa-dashboard"></i> Dashboard/Booking/<a href="{{ route('bookings.inbox') }}">Inbox</a>/View</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"></h3>
              
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <div class="mailbox-read-info">
                <h5>From: {{e($booking->email)}}
                <span class="mailbox-read-time pull-right">{{$booking->created_at}}</span></h5>
              </div>
              <!-- /.mailbox-read-info -->
              <div class="mailbox-controls with-border text-center">
                <div class="row">
                  <div class="col-md-3">
                    <a href="{{URL()->previous()}}" class="btn btn-primary pull-left"><i class="fa fa-angle-left"></i>Back</a>
                  </div>
                  <div class="col-md-5">
                   
                  </div>

                  <div class="col-md-4">
                  <a href="{{ route('breply.create',$booking->id) }}" class="btn btn-primary pull-right"><i class="fa fa-reply"></i>Reply</a>
                </div>
                </div>
                
              </div>
              <!-- /.mailbox-controls -->
              <div class="mailbox-read-message">
                <div class="col-md-4"></div>
                <div class="col-md-7">
                  <h4>Name:{{e($booking->name)}}</h4>
                <h4>Email:{{e($booking->email)}}</h4>
                <h4>Gender:{{e($booking->gender)}}</h4>
                <h4>Age:{{e($booking->age)}}</h4>
                <h4>Location:{{e($booking->location)}}</h4>
                <h4>Contact:{{e($booking->contact)}}</h4>
                <h4>Booked Package:<b>{{e($booking->slug)}}</b></h4>
                <h4>Message:{{e($booking->message)}}</h4>
                </div>
                
              </div>
              <!-- /.mailbox-read-message -->
            </div>
            <!-- /.box-body -->
            
            <!-- /.box-footer -->
            <div class="box-footer">
              
                
                <?php $test = App\BookingStatus::where('booking_id', $booking->id)->orderBy('id','desc')->get()->first();
                ?>

                @if($test=='')
                <div >
                  <form action="{{ route('b.statusreply',$booking->id) }}" method="POST">
                    @csrf
                     <input type="hidden" class="form-control" name="emailto" value="{{$booking->email}}" >
                     <input type="hidden" name="bstatus" value="1">
                     <input type="hidden" name="replystatus" value="1">

                  <div class="row">
                    <div class="col-md-4"></div>
                    <div class="col-md-8">
                      <button type="submit" class="btn btn-success">Accept</button>
                    </div>
                  
                  </div>
                  </form>
                  <div class="row">
                    <div class="col-md-6"></div>
                    <div class="col-md-5">
                       <form action="{{ route('b.statusreply',$booking->id) }}" method="POST">
                    @csrf
                     <input type="hidden" class="form-control" name="emailto" value="{{$booking->email}}" >
                     <input type="hidden" name="bstatus" value="0">
                     <input type="hidden" name="replystatus" value="1">

                  <button type="submit" class="btn btn-danger " style="margin-top: -54px;">Reject</button>
                  </form>
                    </div>
                  </div>


                </div>
                <div>
                 
                </div>
                @elseif($test->bstatus=='1')
                  
                <div >
            
                  <div class="alert-success " style="padding: 8px; width: 70px">Accepted</div></td>

                </div>
                @else
                  
                <div >

                     <div class="alert-danger " style="padding: 8px; width: 70px">Rejected</div></td>
                </div>

                
                @endif
                
              </div>
                
          

          
            <!-- /.box-footer -->
          
          <!-- /. box -->
        </div>
      </div>
    </div>
    

    </section>
  </div>
</div>
{{-- deletemodal --}}
<div id="delete{{$booking->id}}" class="modal fade" role="dialog">
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
        <form action="{{ route('binbox.destroy',$booking->id) }}" method="POST">
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