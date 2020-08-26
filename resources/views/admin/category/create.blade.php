@extends('admin/layout/main')

@section('content')
    
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
<!-- DataTables -->
   <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>  Add new Section</h1>
      <ol class="breadcrumb">
        <li><a href="{{Url('admin/index')}}"><i class="fa fa-dashboard"></i> Home </a></li>
        <li><a href="{{Url('admin/section')}}"> Control of Sections</a></li>
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
        <form action="{{url('admin/section')}}"  method="post" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
           <div class="form-group @if($errors->has('sectionTitle')) has-error @endif">
              <label for="inputEmail3" class="col-md-2 control-label">Title </label>
              <div class="col-md-10">
              <input type="text" class="form-control" name="sectionTitle" value="{{old('sectionTitle')}}" placeholder="Title  ">
                <strong class="help-block">{{ $errors->first('sectionTitle') }}</strong> 
              </div>
           </div>
    
           <div class="form-group @if($errors->has('sectionText')) has-error @endif">
              <label for="inputEmail3" class="col-md-2 control-label">Content </label>
              <div class="col-md-10">
              <input type="text" class="form-control" name="sectionText" value="{{old('sectionText')}}" placeholder="Content">
                <strong class="help-block">{{ $errors->first('sectionText') }}</strong> 
              </div>
           </div>
           <div class="form-group @if($errors->has('bgImage')) has-error @endif">
              <label for="inputEmail3" class="col-md-2 control-label">Image</label>
              <div class="col-md-10">
              <input type="file" class="form-control" name="bgImage">
                <strong class="help-block">{{ $errors->first('bgImage') }}</strong> 
              </div>
           </div>
          <div class="text2">
            <div class="col-md-12">
              <button type="submit" class="btn btn-warning">
                <li class="fa fa-globe" style="color: #ffffff"></li>
                Add new section
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
