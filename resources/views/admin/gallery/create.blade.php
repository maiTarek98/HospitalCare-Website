@extends('admin/layout/main')

@section('content')
    
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
<!-- DataTables -->
   <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Add New Photo </h1>
      <ol class="breadcrumb">
        <li><a href="{{Url('admin/index')}}"><i class="fa fa-dashboard"></i> Home </a></li>
        <li><a href="{{Url('admin/gallery')}}">Control of Photos </a></li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
         <div class="box">
          <div class="box-header">
          </div>
          <!-- /.box-header -->
           <div class="box-body">
            <!-- form start -->
        <form action="{{url('admin/gallery')}}"  method="post" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
  
           <div class="form-group @if($errors->has('photo')) has-error @endif">
              <label for="inputEmail3" class="col-md-2 control-label"> Photo</label>
              <div class="col-md-10">
              <input type="file" class="form-control" name="photo">
                <strong class="help-block">{{ $errors->first('photo') }}</strong> 
              </div>
           </div>
           <div class="form-group @if($errors->has('type')) has-error @endif">
              <label for="inputEmail3" class="col-md-2 control-label">Select  </label>
              <div class="col-md-10">
              <select class="form-control"  name="type">
                <option value="health">Health</option>
                <option value="x-ray">X-ray</option>
                <option value="dental">Dental</option>
                <option value="surgery">Surgery</option>
              </select>
                <strong class="help-block">{{ $errors->first('type') }}</strong> 
              </div>
           </div>
        
          <div class="text2">
            <div class="col-md-12">
              <button type="submit" class="btn btn-warning">
                <li class="fa fa-globe" style="color: #ffffff"></li>
                Add New Photo
              </button>
            </div>
          </div><!-- /.box-footer -->
        </form>
          </div><!-- /.box-body -->
          </div>
          </div>
          <!-- /.box-header -->
         
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
 
 </section><!-- /.content -->
</div><!-- /.content-wrapper -->

@stop
