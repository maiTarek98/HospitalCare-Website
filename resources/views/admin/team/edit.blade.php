@extends('admin/layout/main')

@section('content')
    
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
<!-- DataTables -->
   <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>   Update {{ $user->name }}  
           </h1>
      <ol class="breadcrumb">
        <li><a href="{{Url('admin')}}"><i class="fa fa-dashboard"></i> Home </a></li>
        <li><a href="{{Url('admin/team')}}">Control Of our team </a></li>
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
            <form method="post" action="{{url('admin/team/'.$user->id)}}">
            <input type="hidden" name="_method" value="PUT">
      {{ csrf_field() }}
      <div class="form-group @if($errors->has('name')) has-error @endif">
              <label for="inputEmail3" class="col-md-2 control-label">Doctor Name  </label>
              <div class="col-md-10">
              <input type="text" class="form-control" name="name" value="{{$user->name}}" placeholder="Doctor name">
                <strong class="help-block">{{ $errors->first('name') }}</strong> 
              </div>
           </div>
           <div class="form-group @if($errors->has('type')) has-error @endif">
              <label for="inputEmail3" class="col-md-2 control-label"> Type </label>
              <div class="col-md-10">
              <input type="text" class="form-control" name="type" value="{{$user->type}}" placeholder="Typ">
                <strong class="help-block">{{ $errors->first('type') }}</strong> 
              </div>
           </div>
           <div class="form-group @if($errors->has('text')) has-error @endif">
              <label for="inputEmail3" class="col-md-2 control-label"> Content </label>
              <div class="col-md-10">
              <input type="text" class="form-control" name="text" value="{{$user->text}}" placeholder="Content ">
                <strong class="help-block">{{ $errors->first('text') }}</strong> 
              </div>
           </div>
           <div class="form-group @if($errors->has('facebook')) has-error @endif">
              <label for="inputEmail3" class="col-md-2 control-label">Facebook </label>
              <div class="col-md-10">
              <input type="text" class="form-control" name="facebook" value="{{$user->facebook}}" placeholder=" Facebook">
                <strong class="help-block">{{ $errors->first('facebook') }}</strong> 
              </div>
           </div>
           <div class="form-group @if($errors->has('twitter')) has-error @endif">
              <label for="inputEmail3" class="col-md-2 control-label">Twitter </label>
              <div class="col-md-10">
              <input type="text" class="form-control" name="twitter" value="{{$user->twitter}}" placeholder=" Twitter">
                <strong class="help-block">{{ $errors->first('twitter') }}</strong> 
              </div>
           </div>
           <div class="form-group @if($errors->has('linkedIn')) has-error @endif">
              <label for="inputEmail3" class="col-md-2 control-label">linkedIn</label>
              <div class="col-md-10">
              <input type="text" class="form-control" name="linkedIn" value="{{$user->linkedIn}}" placeholder="linkedIn">
                <strong class="help-block">{{ $errors->first('linkedIn') }}</strong> 
              </div>
           </div>
    
           <div class="form-group @if($errors->has('image')) has-error @endif">
              <label for="inputEmail3" class="col-md-2 control-label"> Doctor Photo</label>
              <div class="col-md-10">
              <input type="file" class="form-control" name="image">
                <strong class="help-block">{{ $errors->first('image') }}</strong> 
              </div>
           </div>
           <div class="text2">
            <div class="col-md-12">
              <button type="submit" class="btn btn-warning">
                <li class="fa fa-globe" style="color: #ffffff"></li>
                Update 
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