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
              <h3 class="box-title"><a href="{{ route('seo.pages') }}"><button class="btn btn-primary">Add Seo</button></a></h3>
              {{-- <div class="box-tools">
                <div class="input-group input-group-sm hidden-xs" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">
                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div> --}}
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th>Seo Group</th>
                  <th>Seo Title</th>
                  <th>Keywords</th>
                  <th>Action</th>
                </tr>
                <tr>
                  @foreach($seos as $seo)
                  <td><span class="label label-primary">{{e($seo->page)}}</span></td>
                  <td>{{e(str_limit($seo->seotitle,$limits='30'))}}</td>
                  <td>{{e(str_limit($seo->seokeyword,$limits='30'))}}</td>
                  <td>
                    <div class="btn-group">
                      <a href=""  data-toggle="modal" data-target="#edit{{$seo->id}}">
                       <button class="btn btn-warning"><i class="fa fa-edit"></i></button></a>
                      <a href="" data-toggle="modal" data-target="#view{{$seo->id}}"><button class="btn btn-success"><i class="fa fa-eye"></i></button></a>
                    </div>
                  </td>
                </tr>
                  @endforeach

               
            </table>
          </div>
          <!-- /.box-body -->
        </div>
      </div>
    </section>
  </div>
</div>
<!-- edit modal for seo -->
@foreach($seos as $seo)
<div id="edit{{$seo->id}}" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Edit {{e($seo->page)}} Seo</h4>
      </div>
      <div class="modal-body">
        <div class="box box-primary">
          <form role="form" action="{{ route('seo.update',$seo->id) }}" method="POST">
            @csrf
           <div class="box-body">
                <div class="form-group">


                  <label for="page">Seo Pages:</label> {{$seo->page}}
                  
                </div>
                <div class="form-group">
                  <div class="text text-danger">{{$errors->first('seotitle')}}</div>
                  <label for="seotitle">Seo Title</label>
                  <input type="text" class="form-control" name="seotitle" id="seotitle" value="{{$seo->seotitle}}" placeholder="Enter Seo title : not more than 60 character">
                </div>
                <div class="form-group">
                  <div class="text text-danger">{{$errors->first('seokeyword')}}</div>
                  <label for="seokeyword">Seo Keyword</label>
                  <input type="text" class="form-control" name="seokeyword" id="seokeyword" value="{{$seo->seokeyword}}" placeholder="Enter Seo keyword : not more than 60 character">
                </div>
                <div class="form-group">
                  <div class="text text-danger">{{$errors->first('seodescription')}}</div>
                  <label for="name">Seo Description</label>
                  <textarea style="margin: 5px;" name="seodescription" class="form-control summernote" placeholder="Enter Seo description : between 50-160 character">{{$seo->seodescription}}</textarea>
                </div>
                <div class="modal-footer">
                <button type="submit" class="btn btn-primary pull-left" >Update</button>

                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
               </div>
                
                
            </div>
              
          </form>
        </div>
      </div>
      
    </div>
  </div>
</div>
@endforeach
{{-- view modal for seo --}}
@foreach($seos as $seo)
<div id="view{{$seo->id}}" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">View {{$seo->page}} Seo</h4>
      </div>
      <div class="modal-body">
        <div class="box box-primary">
          <strong>Seo title:</strong><br>{{e($seo->seotitle)}}<br>
          <strong>Seo keyword:</strong><br>{{e($seo->seokeyword)}}<br>
          <strong>Seo Description:</strong>{!!$seo->seodescription!!}<br>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
 </div> 
@endforeach

@endsection