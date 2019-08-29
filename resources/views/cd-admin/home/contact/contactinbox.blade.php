@extends('cd-admin.home-master')
@section('page-title')
Contact inbox
@endsection
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="container-fluid">
    <section class="content-header">
      <h1>
      Inbox
      </h1>
      <ol class="breadcrumb">
        <li><i class="fa fa-dashboard"></i> Dashboard/Contact/Inbox</li>
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
                    @foreach($contacts as $contact)
                    <tr>
                      <td>
                        
                
                       <?php $test = App\ReplyContact::where('emailto',$contact->email)->where('contact_id',$contact->id)->orderBy('id','desc')->get()->first();

                       
                        ?>

                        @if($test=='')

                        <a href="" data-toggle="modal" data-target="#delete{{$contact->id}}"><button type="button" class="btn btn-default btn-sm"> <i class="fa fa-trash-o"></i></button></a>
                        <a href="{{route('contactview',$contact->id)}}"><button type="button" class="btn btn-default btn-sm"><i class="fa fa-eye"></i></button></a>
                        <button type="button" class="btn btn-info btn-sm">Unseen</button></td>


                        @else($test->active=='Replyed')

                        <a href="" data-toggle="modal" data-target="#delete{{$contact->id}}"><button type="button" class="btn btn-default btn-sm"> <i class="fa fa-trash-o"></i></button></a>
                        <a href="{{route('contactview',$contact->id)}}"><button type="button" class="btn btn-default btn-sm"><i class="fa fa-eye"></i></button></a>
                        <button type="button" class="btn btn-success btn-sm ">Replyed</button>


                        @endif

                      
                      <td class="mailbox-name">{{$contact->email}}</td>
                      <td class="mailbox-subject"><b>{{$contact->name}}</b>{!!str_limit($contact->message,$limits='20')!!}
                      </td>
                      
                      <td class="mailbox-date">{{$contact->created_at}}</td>
                    </tr>
                    @endforeach
                    
                  </tbody>
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
@foreach($contacts as $contact)

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
@endforeach
@endsection