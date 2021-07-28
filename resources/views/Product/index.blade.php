@extends('layouts.template')

@section('content')
<div class="right_col" role="main">
    <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
            <div class="x_title">
                <h2>Tabel Product<small>Danone Project!</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                          <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Settings 1</a>
                                    <a class="dropdown-item" href="#">Settings 2</a>
                                </div>
                          </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
            </div>
                  <a href="{{route('product.create')}}" class="btn btn-info ">
                    <i class="fa fa-plus"> Add A New Product</i>
                  </a> <br><br>
          <div class="x_content">
              <div class="row">
                <div class="col-sm-12">
                    <div class="card-box table-responsive">
          <table id="datatable-fixed-header" class="table table-striped table-bordered" style="width:100%">
            <thead>
              <tr>
                <th>No : </th>
                <th>Image : </th>
                <th>Code : </th>
                <th>Name : </th>
                <th>Netto : </th>
                <th>Stock : </th>
                <th>Price : </th>
                <th>Expired : </th>
                <th>Action : </th>
              </tr>
            </thead>
                @php
                    $no = 1;
                @endphp

                @foreach ($data_product as $product)
            <tbody>
              <tr>
                <td>{{$no++}}</td>
                <td>
                    <img src="{{asset ('storage/Product/'. $product->image) }}" width="100" height="100" alt="" />
                </td>
                <td>{{$product->code}}</td>
                <td>{{$product->name}}</td>
                <td>{{$product->netto}}</td>
                <td>{{$product->stock}}</td>
                <td>{{$product->price}}</td>
                <td>{{$product->expired}}</td>
                <td>
                    <a href="{{route ('product.edit', $product->id)}}" class="btn btn-warning btn-xs"><i class="fa fa-pencil"></i></a>

                    <form action="{{route ('product.destroy', $product->id)}}" method="POST">
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
