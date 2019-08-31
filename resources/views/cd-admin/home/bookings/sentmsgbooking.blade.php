@extends('cd-admin.home-master')
@section('page-title')
Booking Replied message
@endsection
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="container-fluid">
    <section class="content-header">
      <h1>
      Booking Replied message
      </h1>
      <ol class="breadcrumb">
        <li><i class="fa fa-dashboard"></i> Dashboard/Booking/Sent message</li>
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
              <div class="table-responsive mailbox-messages">
                <table class="table table-hover table-striped">
                  <tbody>
                    @foreach($bookings as $booking)
                    <tr>
                      <td>
                        <a href="" data-toggle="modal" data-target="#delete{{$booking->id}}"><button type="button" class="btn btn-default btn-sm"> <i class="fa fa-trash-o"></i></button></a>
                        <a href="{{ route('breply.view',$booking->id) }}"><button type="button" class="btn btn-default btn-sm"><i class="fa fa-eye"></i></button></a>
                        @if($booking->bookingstatus=='1')
                        <button type="button" class="btn btn-success btn-sm ">Approved</button>
                        @else
                        <button type="button" class="btn btn-danger btn-sm ">Rejected</button>
                        @endif


                      </td>
                      <td class="mailbox-email"><b>{{$booking->emailto}}</b></td>
                      <td class="mailbox-subject">{{$booking->subject}}
                      </td>
                      <td class="mailbox-date">{{$booking->created_at}}</td>
                    </tr>
                    
                  </tbody>
                  @endforeach
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</div>
{{-- delete modal --}}

@foreach($bookings as $booking)

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
          <form action="{{ route('breply.destroy',$booking->id) }}" method="POST">
      
      @csrf
          <button type="submit" class="btn btn-danger pull-left">Delete</button>
        </form>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
    {{-- </form> --}}
    </div>
  </div>
</div>
@endforeach
@endsection