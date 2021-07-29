@extends('layouts.template')

@section('content')
<div class="right_col" role="main">
    <div class="">
      <div class="page-title">
        <div class="title_left">
          <h3><small></small></h3>
        </div>

        <div class="title_right">
          <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
            <form action="">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search for..." name="search" id="search">
              <span class="input-group-btn">

                <button class="btn btn-secondary" type="submit">Go!</button>
                  </form>
              </span>
            </div>
          </div>
        </div>
      </div>

      <div class="clearfix"></div>

    <div class="row">
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
          <table id="datatable-fixed-header" class="table table-hover table-bordered" style="width:100%">
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

                @foreach ($data_product as $key => $product)
            <tbody>
              <tr>
                <td>{{$data_product->firstItem() + $key}}</td>
                <td>
                    <img src="{{asset ('storage/Product/'. $product->image) }}" class="img-fluid" width="100" height="100" alt="" />
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
          <div class="row">
            <div class="col-sm-5">
                <div class="dataTables_info" id="datatable_info" role="status" aria-live="polite">
                  Showing
                  {{$data_product->firstItem()}}
                  to
                  {{$data_product->lastItem()}}
                  of
                  ?
                  </div>
              </div>
              <div class="col-sm-7">
                  <div class="dataTables_paginate paging_simple_numbers" id="datatable_paginate">
                      <ul class="pagination">
                          {{ $data_product->links() }}
                          {{-- <li class="paginate_button previous disabled" id="datatable_previous">
                              <a href="#" aria-controls="datatable" data-dt-idx="0" tabindex="0">Previous</a>
                          </li>
                      <li class="paginate_button active">
                          <a href="#" aria-controls="datatable" data-dt-idx="1" tabindex="0">1</a>
                      </li>
                      <li class="paginate_button next" id="datatable_next">
                          <a href="#" aria-controls="datatable" data-dt-idx="7" tabindex="0">Next</a>
                      </li> --}}
                  </ul>
              </div>
          </div>
      </div>
        </div>
        </div>
              </div>
          </div>
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
