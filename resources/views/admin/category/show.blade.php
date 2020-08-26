@extends('admin/layout/main')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <!-- DataTables -->
    <section class="content-header">
      <h1>Show Data of one Section</h1>
      <ol class="breadcrumb">
        <li><a href="{{Url('admin')}}"><i class="fa fa-dashboard"></i> Home </a></li>
        <li><a href="{{Url('admin/section/create')}}"> Add new Data</a></li>        
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            @include('admin.layout.includes.massage') 
          <!-- /.box-header -->
          <div class="box-body">
           <h1>{{$test->title}}</h1>

           <form action="{{url('admin/section/'.$test->id.'/store')}}"  method="post" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
      
           <div class="form-group @if($errors->has('title')) has-error @endif">
              <label for="inputEmail3" class="col-md-2 control-label"> Title </label>
              <div class="col-md-10">
              <input type="text" class="form-control" name="title" value="{{old('title')}}" placeholder="Title  ">
                <strong class="help-block">{{ $errors->first('title') }}</strong> 
              </div>
           </div>
    
           <div class="form-group @if($errors->has('text')) has-error @endif">
              <label for="inputEmail3" class="col-md-2 control-label">Content</label>
              <div class="col-md-10">
              <input type="text" class="form-control" name="text" value="{{old('text')}}" placeholder=" Content">
                <strong class="help-block">{{ $errors->first('text') }}</strong> 
              </div>
           </div>  
          <div class="text2">
            <div class="col-md-12">
              <button type="submit" class="btn btn-warning">
                <li class="fa fa-globe" style="color: #ffffff"></li>
                Add new data
              </button>

              
            </div>
          </div><!-- /.box-footer -->
        </form>
      
        </div><!-- /.box-body -->
      </div>
         <a href="{{url('admin/section/'.$test->id.'/show2')}}">
               <p style="font-size:30px;"> Show All Data</p>
                </a>
              
      <!-- /.box -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
</section>
<!-- /.content -->
</section><!-- /.content -->
</div><!-- /.content-wrapper -->
@stop