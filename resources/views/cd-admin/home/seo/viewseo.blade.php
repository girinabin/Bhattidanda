@extends('cd-admin.home-master')
@section('page-title')
View Seo
@endsection
@section('content')
<div class="content-wrapper">
  <div class="container-fluid">
    <section class="content-header">
      <h1>
      View all Seo
      </h1>
      <ol class="breadcrumb">
        <li><i class="fa fa-dashboard"></i> Dashboard/Seo/ViewSeo</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title"></h3>
              <div class="box-tools">
                <div class="input-group input-group-sm hidden-xs" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">
                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th>ID</th>
                  <th>Seo Group</th>
                  <th>Seo Title</th>
                  <th>Keywords</th>
                  <th>Action</th>
                </tr>
                <tr>
                  <td>1</td>
                  <td><span class="label label-warning">Service</span></td>
                  <td>nepal free service</td>
                  <td>nepal,kathmandu</td>
                  <td>
                    <div class="btn-group">
                      <a href=""  data-toggle="modal" data-target="#myModalservice">
                      <i class="fa fa-edit"></i> Edit</a>
                      <a href="" data-toggle="modal" data-target="#myModalserviceview"><i class="fa fa-eye"></i>View</a>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>2</td>
                  <td><span class="label label-info">Package</span></td>
                  <td>nepal free Package</td>
                  <td>Pokhara,kathmandu</td>
                  <td>
                    <div class="btn-group">
                      <a href=""  data-toggle="modal" data-target="#myModalpackage">
                      <i class="fa fa-edit"></i> Edit</a>
                      <a href="" data-toggle="modal" data-target="#myModalpackageview"><i class="fa fa-eye"></i>View</a>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>3</td>
                  <td><span class="label label-primary">About</span></td>
                  <td>aboout fullmaya</td>
                  <td>Pokhara,kathmandu</td>
                  <td>
                    <div class="btn-group">
                      <a href=""  data-toggle="modal" data-target="#myModalabout">
                      <i class="fa fa-edit"></i> Edit</a>
                      <a href="" data-toggle="modal" data-target="#myModalaboutview"><i class="fa fa-eye"></i>View</a>
                    </div>
                  </td>
                </td>
              </tr>
            </table>
          </div>
          <!-- /.box-body -->
        </div>
      </div>
    </section>
  </div>
</div>
<!-- edit modal for service -->
<div id="myModalservice" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Edit Service Seo</h4>
      </div>
      <div class="modal-body">
        <div class="box box-primary">
          <form role="form">
            <div class="box-body">
              <div class="form-group">
                <label for="seotitle">Seo Title</label>
                <input type="text" class="form-control" id="seotitle" placeholder="Enter Seo title">
              </div>
              <div class="form-group">
                <label for="seokeyword">Seo Keyword</label>
                <input type="text" class="form-control" id="seokeyword" placeholder="Enter Seo keyword">
              </div>
              <div class="form-group">
                <label for="name">Seo Description</label>
                <textarea name="seodescription" class="form-control" id="summernote"></textarea>
              </div>
              
              
            </div>
            <div class="box-footer">
              <button type="submit" class="btn btn-primary">Update</button>
              
            </div>
          </form>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
{{-- view modal for service --}}
<div id="myModalserviceview" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">View Service Seo</h4>
      </div>
      <div class="modal-body">
        <div class="box box-primary">
          <h3>Seo title:</h3>
          <h3>Seo keyword:</h3>
          <h3>Seo Description:</h3>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
{{-- edit modal for package --}}
<div id="myModalpackage" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Edit Package Seo</h4>
      </div>
      <div class="modal-body">
        <div class="box box-primary">
          <form role="form">
            <div class="box-body">
              <div class="form-group">
                <label for="seotitle">Seo Title</label>
                <input type="text" class="form-control" id="seotitle" placeholder="Enter Seo title">
              </div>
              <div class="form-group">
                <label for="seokeyword">Seo Keyword</label>
                <input type="text" class="form-control" id="seokeyword" placeholder="Enter Seo keyword">
              </div>
              <div class="form-group">
                <label for="name">Seo Description</label>
                <textarea name="seodescription" class="form-control" id="summernote"></textarea>
              </div>
              
              
            </div>
            <div class="box-footer">
              <button type="submit" class="btn btn-primary">Update</button>
              
            </div>
          </form>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
{{-- view modal for package --}}
<div id="myModalpackageview" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">View Package Seo</h4>
      </div>
      <div class="modal-body">
        <div class="box box-primary">
          <h3>Seo title:</h3>
          <h3>Seo keyword:</h3>
          <h3>Seo Description:</h3>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
{{-- edit model for about--}}
<div id="myModalabout" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Edit About Seo</h4>
      </div>
      <div class="modal-body">
        <div class="box box-primary">
          <form role="form">
            <div class="box-body">
              <div class="form-group">
                <label for="seotitle">Seo Title</label>
                <input type="text" class="form-control" id="seotitle" placeholder="Enter Seo title">
              </div>
              <div class="form-group">
                <label for="seokeyword">Seo Keyword</label>
                <input type="text" class="form-control" id="seokeyword" placeholder="Enter Seo keyword">
              </div>
              <div class="form-group">
                <label for="name">Seo Description</label>
                <textarea name="seodescription" class="form-control" id="summernote"></textarea>
              </div>
              
              
            </div>
            <div class="box-footer">
              <button type="submit" class="btn btn-primary">Update</button>
              
            </div>
          </form>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
{{-- view modal for about --}}
<div id="myModalserviceabout" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">View About Seo</h4>
      </div>
      <div class="modal-body">
        <div class="box box-primary">
          <h3>Seo title:</h3>
          <h3>Seo keyword:</h3>
          <h3>Seo Description:</h3>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
@endsection