@extends('admin/layout/main')

@section('content')
    
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
<!-- DataTables -->
   <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1> Add new Team </h1>
      <ol class="breadcrumb">
        <li><a href="{{Url('admin/index')}}"><i class="fa fa-dashboard"></i> Home </a></li>
        <li><a href="{{Url('admin/team')}}"> Control of our Teeam </a></li>
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
        <form action="{{url('admin/team')}}"  method="post" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
  
           <div class="form-group @if($errors->has('name')) has-error @endif">
              <label for="inputEmail3" class="col-md-2 control-label"> Doctor Name   </label>
              <div class="col-md-10">
              <input type="text" class="form-control" name="name" value="{{old('name')}}" placeholder=" Doctor Name">
                <strong class="help-block">{{ $errors->first('name') }}</strong> 
              </div>
           </div>
           <div class="form-group @if($errors->has('type')) has-error @endif">
              <label for="inputEmail3" class="col-md-2 control-label"> Type </label>
              <div class="col-md-10">
              <input type="text" class="form-control" name="type" value="{{old('type')}}" placeholder="  Type">
                <strong class="help-block">{{ $errors->first('type') }}</strong> 
              </div>
           </div>
           <div class="form-group @if($errors->has('text')) has-error @endif">
              <label for="inputEmail3" class="col-md-2 control-label"> Content </label>
              <div class="col-md-10">
              <input type="text" class="form-control" name="text" value="{{old('text')}}" placeholder="  Content">
                <strong class="help-block">{{ $errors->first('text') }}</strong> 
              </div>
           </div>
           <div class="form-group @if($errors->has('facebook')) has-error @endif">
              <label for="inputEmail3" class="col-md-2 control-label"> Facebook </label>
              <div class="col-md-10">
              <input type="text" class="form-control" name="facebook" value="{{old('facebook')}}" placeholder="  Facebook">
                <strong class="help-block">{{ $errors->first('facebook') }}</strong> 
              </div>
           </div>
           <div class="form-group @if($errors->has('twitter')) has-error @endif">
              <label for="inputEmail3" class="col-md-2 control-label">Twitter  </label>
              <div class="col-md-10">
              <input type="text" class="form-control" name="twitter" value="{{old('twitter')}}" placeholder=" Twitter">
                <strong class="help-block">{{ $errors->first('twitter') }}</strong> 
              </div>
           </div>
           <div class="form-group @if($errors->has('linkedIn')) has-error @endif">
              <label for="inputEmail3" class="col-md-2 control-label">LinkedIn</label>
              <div class="col-md-10">
              <input type="text" class="form-control" name="linkedIn" value="{{old('linkedIn')}}" placeholder=" LinkedIn">
                <strong class="help-block">{{ $errors->first('linkedIn') }}</strong> 
              </div>
           </div>
           <div class="form-group @if($errors->has('image')) has-error @endif">
              <label for="inputEmail3" class="col-md-2 control-label">Doctor Image </label>
              <div class="col-md-10">
              <input type="file" class="form-control" name="image">
                <strong class="help-block">{{ $errors->first('image') }}</strong> 
              </div>
           </div>
  
          <div class="text2">
            <div class="col-md-12">
              <button type="submit" class="btn btn-warning">
                <li class="fa fa-globe" style="color: #ffffff"></li>
                Add new Team
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
