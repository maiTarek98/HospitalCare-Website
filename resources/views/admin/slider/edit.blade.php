@extends('admin/layout/main')

@section('content')
    
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
<!-- DataTables -->
   <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>   Update {{ $user->title }}  
           </h1>
      <ol class="breadcrumb">
        <li><a href="{{Url('admin/index')}}"><i class="fa fa-dashboard"></i> Home </a></li>
        <li><a href="{{Url('admin/slider')}}">  Control of Photos  </a></li>
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
            <form method="post" action="{{url('admin/slider/'.$user->id)}}">
            <input type="hidden" name="_method" value="PUT">
      {{ csrf_field() }}
      <div class="form-group @if($errors->has('subTitle')) has-error @endif">
              <label for="inputEmail3" class="col-md-2 control-label"> Service Name   </label>
              <div class="col-md-10">
              <input type="text" class="form-control" name="subTitle" value="{{$user->subTitle}}" placeholder="Service Name    ">
                <strong class="help-block">{{ $errors->first('subTitle') }}</strong> 
              </div>
           </div>
           <div class="form-group @if($errors->has('title')) has-error @endif">
              <label for="inputEmail3" class="col-md-2 control-label"> Title </label>
              <div class="col-md-10">
              <input type="text" class="form-control" name="title" value="{{$user->title}}" placeholder=" Tilte">
                <strong class="help-block">{{ $errors->first('title') }}</strong> 
              </div>
           </div>
           <div class="form-group @if($errors->has('text')) has-error @endif">
              <label for="inputEmail3" class="col-md-2 control-label"> Content </label>
              <div class="col-md-10">
              <input type="text" class="form-control" name="text" value="{{$user->text}}" placeholder=" Content">
                <strong class="help-block">{{ $errors->first('text') }}</strong> 
              </div>
           </div>  
           <div class="form-group @if($errors->has('slidePhoto')) has-error @endif">
              <label for="inputEmail3" class="col-md-2 control-label">Slider Photo </label>
              <div class="col-md-10">
              <input type="file" class="form-control" name="slidePhoto">
                <strong class="help-block">{{ $errors->first('slidePhoto') }}</strong> 
              </div>
           </div>
           <div class="text2">
            <div class="col-md-12">
              <button type="submit" class="btn btn-warning">
                <li class="fa fa-globe" style="color: #ffffff"></li>
                Update Slider
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