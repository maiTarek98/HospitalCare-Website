@extends('admin/layout/main')

@section('content')
    
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
<!-- DataTables -->
   <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Add New contact </h1>
      <ol class="breadcrumb">
        <li><a href="{{Url('admin/index')}}"><i class="fa fa-dashboard"></i> Home </a></li>
        <li><a href="{{Url('admin/contact')}}">Control of contact </a></li>
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
        <form action="{{url('admin/contact')}}"  method="post" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
  
           <div class="form-group @if($errors->has('title')) has-error @endif">
              <label for="inputEmail3" class="col-md-2 control-label"> Title </label>
              <div class="col-md-10">
              <input type="text" class="form-control" name="title" value="{{old('title')}}" placeholder="Title">
                <strong class="help-block">{{ $errors->first('title') }}</strong> 
              </div>
           </div>
           <div class="form-group @if($errors->has('info')) has-error @endif">
              <label for="inputEmail3" class="col-md-2 control-label">Information  </label>
              <div class="col-md-10">
              <input type="text" class="form-control" name="info" value="{{old('info')}}" placeholder="info">
                <strong class="help-block">{{ $errors->first('info') }}</strong> 
              </div>
           </div>
           <div class="form-group @if($errors->has('icon')) has-error @endif">
              <label for="inputEmail3" class="col-md-2 control-label">Icon  </label>
              <div class="col-md-10">
              <input type="text" class="form-control" name="icon" value="{{old('icon')}}" placeholder="icon">
                <strong class="help-block">{{ $errors->first('icon') }}</strong> 
              </div>
           </div>
           <div class="form-group @if($errors->has('other')) has-error @endif">
              <label for="inputEmail3" class="col-md-2 control-label">Add another info.  </label>
              <div class="col-md-10">
              <input type="text" class="form-control" name="other" value="{{old('other')}}" placeholder="other">
                <strong class="help-block">{{ $errors->first('other') }}</strong> 
              </div>
           </div>
          <div class="text2">
            <div class="col-md-12">
              <button type="submit" class="btn btn-warning">
                <li class="fa fa-globe" style="color: #ffffff"></li>
                Add New contact
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
