@extends('cd-admin.home-master')
@section('page-title')
Contact Sent message
@endsection
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="container-fluid">
    <section class="content-header">
      <h1>
      Contact Sent Message
      </h1>
      <ol class="breadcrumb">
        <li><i class="fa fa-dashboard"></i> Dashboard/Message/Sent message</li>
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
                    @foreach($sentmsg as $msg)
                    <tr>
                      <td>
                        <a href="" data-toggle="modal" data-target="#delete{{$msg->id}}"><button type="button" class="btn btn-default btn-sm"> <i class="fa fa-trash-o"></i></button></a>
                        <a href="{{ route('messagesentview',$msg->id) }}"><button type="button" class="btn btn-default btn-sm"><i class="fa fa-eye"></i></button></a>
                      </td>
                      <td class="mailbox-name">{{$msg->emailto}}</td>
                      <td class="mailbox-subject"><b>{{$msg->subject}}</b>
                      </td>
                      <?php $date = Carbon\Carbon::parse($msg->created_at);
                      $now=Carbon\Carbon::now();
                      $t=$date->diffForHumans($now);
                      ?>
                      <td class="mailbox-date">{{$t}}</td>
                    </tr>
                    
                  </tbody>
                  @endforeach
                </table>
                <div class="row">
                  <div class="col-md-10"></div>
                  <div class="col-md-2">
                  {{ $sentmsg->links() }}
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</div>
{{-- delete modal --}}

@foreach($sentmsg as $msg)

<div id="delete{{$msg->id}}" class="modal fade" role="dialog">
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
          <form action="{{ route('message.destroy',$msg->id) }}" method="POST">
      
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