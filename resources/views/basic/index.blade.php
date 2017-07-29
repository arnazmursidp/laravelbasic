    @extends('templates.header')

    @section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Simple CRUD
        <small>Create Read Update Delete</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Table - Home</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
    @include('templates/feedback')
      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Data</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
        <a href="{{ url('basic/add') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Form</a>
          <table class="table table-stripped table-responsive table-bordered center">
          <tr>
            <th>No</th>
            <th>Student's ID</th>
            <th>Name</th>
            <th>Action</th>
          </tr>
          @foreach ($result as $row)
          <tr>
            <td>{{ !empty($i) ? ++$i : $i = 1 }}</td>
            <td>{{ $row->id_siswa }}</td>
            <td>{{ $row->nama_siswa }}</td>
            <td>
              <a href="{{ url("basic/$row->id_siswa/edit") }}" class="btn btn-warning"><i class="fa fa-pencil"></i></a>
              <a href="{{ url("basic/$row->id_siswa/delete") }}" class="btn btn-danger"><i class="fa fa-trash"></i></a>
            </td>
          </tr>
          @endforeach
          </table>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          Simple CRUD
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
    @endsection