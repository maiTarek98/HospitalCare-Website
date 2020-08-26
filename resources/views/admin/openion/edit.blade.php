@extends('admin/layout/main')

@section('content')
    
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
<!-- DataTables -->
   <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>   Update {{ $user->patientName }}  
           </h1>
      <ol class="breadcrumb">
        <li><a href="{{Url('admin/index')}}"><i class="fa fa-dashboard"></i> Home </a></li>
        <li><a href="{{Url('admin/openion')}}">  Control of Photos  </a></li>
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
            <form method="post" action="{{url('admin/openion/'.$user->id)}}">
            <input type="hidden" name="_method" value="PUT">
      {{ csrf_field() }}
      <div class="form-group @if($errors->has('doctorName')) has-error @endif">
              <label for="inputEmail3" class="col-md-2 control-label"> doctorName   </label>
              <div class="col-md-10">
              <input type="text" class="form-control" name="doctorName" value="{{$user->doctorName}}" placeholder="doctorName">
                <strong class="help-block">{{ $errors->first('doctorName') }}</strong> 
              </div>
           </div>
           <div class="form-group @if($errors->has('patientName')) has-error @endif">
              <label for="inputEmail3" class="col-md-2 control-label"> patientName </label>
              <div class="col-md-10">
              <input type="text" class="form-control" name="patientName" value="{{$user->patientName}}" placeholder=" patientName">
                <strong class="help-block">{{ $errors->first('patientName') }}</strong> 
              </div>
           </div>
           <div class="form-group @if($errors->has('text')) has-error @endif">
              <label for="inputEmail3" class="col-md-2 control-label"> Content </label>
              <div class="col-md-10">
              <input type="text" class="form-control" name="text" value="{{$user->text}}" placeholder=" Content">
                <strong class="help-block">{{ $errors->first('text') }}</strong> 
              </div>
           </div>  
           <div class="form-group @if($errors->has('image')) has-error @endif">
              <label for="inputEmail3" class="col-md-2 control-label"> Photo </label>
              <div class="col-md-10">
              <input type="file" class="form-control" name="image">
                <strong class="help-block">{{ $errors->first('image') }}</strong> 
              </div>
           </div>

           
           <div class="form-group @if($errors->has('country')) has-error @endif">
              <label for="inputEmail3" class="col-md-2 control-label">Select Countery</label>
              <div class="col-md-10">

                               <select class="form-control" name="country">
                                    <option value="egypt"> Egypt</option>
                                    <option value="italy">Italy</option>
                                    <option value="america">America</option>
                                    <option value="france">France</option>

                                </select>
              </div>
           </div>
           <div class="text2">
            <div class="col-md-12">
              <button type="submit" class="btn btn-warning">
                <li class="fa fa-globe" style="color: #ffffff"></li>
                Update Openion
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