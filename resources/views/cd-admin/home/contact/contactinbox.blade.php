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
      Contact
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
              <h3 class="box-title">Inbox</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <div class="table-responsive mailbox-messages">
                <table class="table table-hover table-striped">
                  <tbody>
                    <tr>
                      <td><button type="button" class="btn btn-default btn-sm"><i class="fa fa-trash-o"></i></button>
                        <a href="{{route('contactview')}}"><button type="button" class="btn btn-default btn-sm"><i class="fa fa-eye"></i></button></a>
                        <button type="button" class="btn btn-info btn-sm "><i class="fa fa-check"></i></button>
                      <button type="button" class="btn btn-danger btn-sm"><i class="fa fa-close"></i></button></td>
                      
                      <td class="mailbox-name"><a href="#">Alexander Pierce</a></td>
                      <td class="mailbox-subject"><b>AdminLTE 2.0 Issue</b> - Trying to find a solution to this problem...
                      </td>
                      
                      <td class="mailbox-date">5 mins ago</td>
                    </tr>
                    <tr>
                      <td><button type="button" class="btn btn-default btn-sm"><i class="fa fa-trash-o"></i></button>
                        <button type="button" class="btn btn-default btn-sm"><i class="fa fa-eye"></i></button>
                        <button type="button" class="btn btn-info btn-sm"><i class="fa fa-check"></i></button>
                      <button type="button" class="btn btn-danger btn-sm"><i class="fa fa-close"></i></button></td>
                      <td class="mailbox-name"><a href="#">Alexander Pierce</a></td>
                      <td class="mailbox-subject"><b>AdminLTE 2.0 Issue</b> - Trying to find a solution to this problem...
                      </td>
                      <td class="mailbox-date">5 mins ago</td>
                    </tr>
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
@endsection