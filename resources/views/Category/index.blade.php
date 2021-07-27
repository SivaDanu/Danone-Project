@extends('layouts.template')

@section('content')
<div class="right_col" role="main">
    <div class="">
      <div class="page-title">
        <div class="title_left">
          <h3><small>Looking For Mutiple Category...?</small></h3>
        </div>

        <div class="title_right">
          <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search for...">
              <span class="input-group-btn">
                <button class="btn btn-secondary" type="button">Go!</button>
              </span>
            </div>
          </div>
        </div>
      </div>

      <div class="clearfix"></div>
<div class="row">
    <div class="col-md-12 col-sm-12">
      <div class="x_panel">
        <div class="">
            <h1>
                Table Category
            </h1>
        </div>

        <a href="{{route('category.create')}}" class="btn btn-info">
            Add New Category
        </a> <br><br>

        <div class="x_content">
            <div class="row">
                <div class="col-sm-12">
                  <div class="card-box table-responsive">
          <table id="" class="table table-stripe table-bordered" style="width:100%">
            <thead>
              <tr>
                <th>No : </th>
                <th>Image : </th>
                <th>Name : </th>
                <th>Scientific Name : </th>
                <th>Categories : </th>
                <th>Since Time : </th>
                <th>Species : </th>
                <th>Type : </th>
                <th>Action : </th>
              </tr>
            </thead>
                @php
                    $no = 1;
                @endphp

                @foreach ($data_category as $category)
            <tbody>
              <tr>
                <td>{{$no++}}</td>
                <td>
                    <img src="{{asset ('storage/Category/'. $category->image) }}" width="100" height="100" alt="" />
                </td>
                <td>{{$category->name}}</td>
                <td>{{$category->scientific}}</td>
                <td>{{$category->category}}</td>
                <td>{{$category->since}}</td>
                <td>{{$category->species}}</td>
                <td>{{$category->type}}</td>
                <td>
                    <a href="{{route ('category.edit', $category->id)}}" class="btn btn-warning btn-xs"><i class="fa fa-pencil"></i></a>

                    <form action="{{route ('category.destroy', $category->id)}}" method="POST">
                        @csrf
                        @method('DELETE')

                        <a class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i></a>
                    </form>
                </td>
              </tr>
            </tbody>
            @endforeach
          </table>
        </div>
        </div>
    </div>
<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah')
                    .attr('src', e.target.result);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
@endsection
