@extends('admin/layout/main')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <!-- DataTables -->
    <section class="content-header">
      <h1>  Show Sections</h1>
      <ol class="breadcrumb">
        <li><a href="{{Url('admin')}}"><i class="fa fa-dashboard"></i> Home </a></li>
        <li><a href="{{Url('admin/section/create')}}">Add new section</a></li>        
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
             <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th class="text-center">#</th>
                  <th class="text-center">Title</th>
                  <th class="text-center">Content</th>
                  <th class="text-center">BackGround Image</th>
                  <th class="text-center">Go To Add New Feature</th>
                  <th class="text-center"> أنشأ في</th>
                  <th class="text-center"> تعديل في</th>
                  <th class="text-center">التعديل</th>
                  <th class="text-center">الحذف</th>
                </tr>
              </thead>
            </tbody>
            <tbody>
              @php $count = 1; @endphp
              @foreach($users as $data)
              <tr>
                <td class="text-center">{{$count}}</td>
                <td class="text-center">{{$data->sectionTitle}}</td>
                <td class="text-center"> {{ $data->sectionText }}</td>
                <td class="text-center">
                @if($data->bgImage)
                 <img class="img-responsive" style="width:100px;height:70px;" src="/Hospital/images/{{ $data->bgImage }}" alt="type of hagama">
            @endif</td>
            <td class="text-center"> <a href="{{url('admin/section/'.$data->id)}}">Add Data </a></td>
                <td class="text-center"> {{ $data->created_at }}</td>
                <td class="text-center"> {{ $data->updated_at }}</td>
                <td class="text-center">
                 <a href="{{url('admin/section/'.$data->id.'/edit')}}" class="btn btn-primary fa fa-pencil-square-o" ></a>
               </td>
                <td class="text-center">
                  <form method="post" action="{{url('admin/section/'.$data->id)}}">
                  {{csrf_field()}}
                <a class="btn btn-danger fa fa-trash-o"data-id="{{$data->id}}" data-toggle="modal" data-target="#delete-data{{$data->id}}"></a>
                <!-- Modal -->
                <div class="modal modal-danger fade" id="delete-data{{$data->id}}" role="dialog">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                         <h4 class="modal-title text-center" id="exampleModalLabel">Approve Delete</h4>
                      </div>
                    
                      <div class="modal-body">
                        <h3 class="text-center ">
                           Do You Want to Delete  :  {{ $data->title }} ? </h3>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-outline"  data-dismiss="modal">Cancel</button>
                        <input type="hidden" name="_method" value="delete">

                        <button class="btn btn-outline danger delete pull-right">Delete</button>
                            </form>   
                      </div>
                      
                    </div>
                  </div>
                </div>

            </td>
            
            </tr>
            @php $count ++; @endphp
            @endforeach
          </tbody>
        </table>
       
        </div><!-- /.box-body -->
      </div>
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