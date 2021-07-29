@extends('layouts.template')

@section('content')
<div class="right_col" role="main">
    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
                <div class="x_title">
                    <h2 align='center'>Form Input Product</h2>

                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br/>
                    <form action="{{route('product.store')}}" method="POST" enctype="multipart/form-data" id="" data-parsley-validate class="form-horizontal form-label-left">
                        @csrf
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align">Image: <span class="required"></span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="file" name="image" onchange="readURL(this)" class="choose">
                                <img id="blah" width="90" height="100" src="" alt="" class="img-fluid">
                                    @if ($errors->has('image'))
                                        <span class="text-danger">{{ $errors->first('image') }}</span>
                                    @endif
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align">Code : <span class="required"></span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="text" name="code" class="form-control">
                                <span class="fa fa-qrcode form-control-feedback right" aria-hidden="true"></span>
                                    @if ($errors->has('code'))
                                        <span class="text-danger">{{ $errors->first('code') }}</span>
                                    @endif
                            </div>
                        </div>
                        <div class="item form-group">
                            <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Name : </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input class="form-control" type="text" name="name">
                                <span class="fa fa-suitcase form-control-feedback right" aria-hidden="true"></span>
                                    @if ($errors->has('name'))
                                        <span class="text-danger">{{ $errors->first('name') }}</span>
                                    @endif
                            </div>
                        </div>
                        <div class="item form-group">
                            <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Netto : </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input class="form-control" type="text" name="netto">
                                <span class="fa fa-sort-numeric-asc form-control-feedback right" aria-hidden="true"></span>
                                    @if ($errors->has('netto'))
                                        <span class="text-danger">{{ $errors->first('netto') }}</span>
                                    @endif
                            </div>
                        </div>
                        <div class="item form-group">
                            <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Stock : </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input class="form-control" type="integer" name="stock">
                                <span class="fa fa-database form-control-feedback right" aria-hidden="true"></span>
                                    @if ($errors->has('stock'))
                                        <span class="text-danger">{{ $errors->first('stock') }}</span>
                                    @endif
                            </div>
                        </div>
                        <div class="item form-group">
                            <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Price : </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input class="form-control" type="integer" name="price">
                                <span class="fa fa-usd form-control-feedback right" aria-hidden="true"></span>
                                    @if ($errors->has('price'))
                                        <span class="text-danger">{{ $errors->first('price') }}</span>
                                    @endif
                            </div>
                        </div>
                        <div class="item form-group">
                            <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Expired : </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input class="form-control" type="date" name="expired">
                                    @if ($errors->has('expired'))
                                        <span class="text-danger">{{ $errors->first('expired') }}</span>
                                    @endif
                            </div>
                        </div>
                        <div class="modal-footer">
                            <div class="col-md-6 col-sm-6 offset-md-3">
                                <button class="btn btn-dark" type="button" text="white">
                                    <a href="{{route ('product.index')}}" text="white">Cancel & Back</a>
                                </button>
                                <button class="btn btn-primary" type="reset">Reset</button>
                                <button type="submit" class="btn btn-success">Submit</button>
                            </div>
                        </div>
                    </form>
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
