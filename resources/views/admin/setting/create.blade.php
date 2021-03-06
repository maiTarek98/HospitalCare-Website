@extends('admin/layout/main')

@section('content')
    
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
<!-- DataTables -->
   <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>اضافه اعدادات </h1>
      <ol class="breadcrumb">
        <li><a href="{{Url('admin/index')}}"><i class="fa fa-dashboard"></i> الرئيسية </a></li>
        <li><a href="{{Url('admin/setting')}}">التحكم فى الاعدادات </a></li>
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
        <form action="{{url('admin/setting')}}"  method="post" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group @if($errors->has('location')) has-error @endif">
              <label for="inputEmail3" class="col-md-2 control-label">  location</label>
              <div class="col-md-10">
              <input type="text" class="form-control" name="location" value="{{old('location')}}" placeholder="location  ">
                <strong class="help-block">{{ $errors->first('location') }}</strong> 
              </div>
           </div>
           <div class="form-group @if($errors->has('phone')) has-error @endif">
              <label for="inputEmail3" class="col-md-2 control-label"> phone </label>
              <div class="col-md-10">
              <input type="text" class="form-control" name="phone" value="{{old('phone')}}" placeholder=" phone  ">
                <strong class="help-block">{{ $errors->first('phone') }}</strong> 
              </div>
           </div>
           <div class="form-group @if($errors->has('otherPhone')) has-error @endif">
              <label for="inputEmail3" class="col-md-2 control-label"> otherPhone </label>
              <div class="col-md-10">
              <input type="text" class="form-control" name="otherPhone" value="{{old('otherPhone')}}" placeholder=" phone  ">
                <strong class="help-block">{{ $errors->first('otherPhone') }}</strong> 
              </div>
           </div>
           <div class="form-group @if($errors->has('email')) has-error @endif">
              <label for="inputEmail3" class="col-md-2 control-label"> البريد الاليكتروني</label>
              <div class="col-md-10">
              <input type="email" class="form-control" name="email" value="{{old('email')}}" placeholder="البريد الالبكتروني  ">
                <strong class="help-block">{{ $errors->first('email') }}</strong> 
              </div>
           </div>
           <div class="form-group @if($errors->has('otherEmail')) has-error @endif">
              <label for="inputEmail3" class="col-md-2 control-label"> otherEmail</label>
              <div class="col-md-10">
              <input type="email" class="form-control" name="otherEmail" value="{{old('otherEmail')}}" placeholder="otherEmail  ">
                <strong class="help-block">{{ $errors->first('otherEmail') }}</strong> 
              </div>
           </div>
           <div class="form-group @if($errors->has('site')) has-error @endif">
              <label for="inputEmail3" class="col-md-2 control-label"> site</label>
              <div class="col-md-10">
              <input type="text" class="form-control" name="site" value="{{old('site')}}" placeholder="site ">
                <strong class="help-block">{{ $errors->first('site') }}</strong> 
              </div>
           </div>
  
          <div class="text2">
            <div class="col-md-12">
              <button type="submit" class="btn btn-warning">
                <li class="fa fa-globe" style="color: #ffffff"></li>
Add Openning Time
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
