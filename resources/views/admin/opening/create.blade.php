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
        <li><a href="{{Url('admin/opening')}}">التحكم فى الاعدادات </a></li>
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
        <form action="{{url('admin/opening')}}"  method="post" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group @if($errors->has('week')) has-error @endif">
              <label for="inputEmail3" class="col-md-2 control-label">  week</label>
              <div class="col-md-10">
                
              <select class="form-control" name="week">
                                    <option value="Saturday"> Saturday</option>
                                    <option value="Sunday">Sunday</option>
                                    <option value="Monday">Monday</option>
                                    <option value="Tuseday">Tuseday</option>
                                    <option value="Wensday">Wensday</option>
                                    <option value="Thursday">Thursday</option>
                                    <option value="Friday">Friday</option>
                                </select>
                <strong class="help-block">{{ $errors->first('week') }}</strong> 
              </div>
           </div>
           <div class="form-group @if($errors->has('from')) has-error @endif">
              <label for="inputEmail3" class="col-md-2 control-label"> From </label>
              <div class="col-md-10">
              <input type="text" class="form-control" name="from" value="{{old('from')}}" placeholder=" from  ">
                <strong class="help-block">{{ $errors->first('from') }}</strong> 
              </div>
           </div>
           <div class="form-group @if($errors->has('to')) has-error @endif">
              <label for="inputEmail3" class="col-md-2 control-label"> To </label>
              <div class="col-md-10">
              <input type="text" class="form-control" name="to" value="{{old('to')}}" placeholder=" to  ">
                <strong class="help-block">{{ $errors->first('to') }}</strong> 
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
