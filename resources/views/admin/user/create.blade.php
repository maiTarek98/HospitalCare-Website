@extends('admin/layout/main')

@section('content')
    
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
<!-- DataTables -->
   <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>اضافه مستخدم جديد</h1>
      <ol class="breadcrumb">
        <li><a href="{{Url('admin/index')}}"><i class="fa fa-dashboard"></i> الرئيسية </a></li>
        <li><a href="{{Url('admin/user')}}">التحكم فى المستخدمين</a></li>
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
        <form action="{{url('admin/user')}}"  method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
           <div class="form-group @if($errors->has('name')) has-error @endif">
              <label for="inputEmail3" class="col-md-2 control-label">اسم المستخدم </label>
              <div class="col-md-10">
              <input type="text" class="form-control" name="name" value="{{old('name')}}" placeholder="name ">
                <strong class="help-block">{{ $errors->first('name') }}</strong> 
              </div>
           </div>
           <div class="form-group @if($errors->has('email')) has-error @endif">
              <label for="inputEmail3" class="col-md-2 control-label">البريد الالكتروني  </label>
              <div class="col-md-10">
              <input type="email" class="form-control" name="email" value="{{old('email')}}" placeholder="email ">
                <strong class="help-block">{{ $errors->first('email') }}</strong> 
              </div>
           </div>
           <div class="form-group @if($errors->has('password')) has-error @endif">
              <label for="inputEmail3" class="col-md-2 control-label">كلمه المرور </label>
              <div class="col-md-10">
              <input type="password" class="form-control" name="password" value="{{old('password')}}" placeholder="password ">
                <strong class="help-block">{{ $errors->first('password') }}</strong> 
              </div>
           </div>
           <div class="form-group @if($errors->has('role')) has-error @endif">
              <label for="inputEmail3" class="col-md-2 control-label">المسمي </label>
              <div class="col-md-10">
                <label class="radio-inline"><input type="radio" name="role" value="1" checked>مدير</label>
                <label class="radio-inline"><input type="radio" name="role" value="0">مستخدم</label>
                <strong class="help-block">{{ $errors->first('role') }}</strong> 
              </div>
           </div>
  
          <div class="text2">
            <div class="col-md-12">
              <button type="submit" class="btn btn-warning">
                <li class="fa fa-globe" style="color: #ffffff"></li>
                اضافه مستخدم جديد
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
