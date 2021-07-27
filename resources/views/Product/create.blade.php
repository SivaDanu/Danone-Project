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
                                <input type="file" name="image" onchange="readURL(this)" required="required" class="choose">
                                <img id="blah" width="90" height="100" src="" alt="">
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align">Code : <span class="required"></span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="text" name="code" required="required" class="form-control">
                            </div>
                        </div>
                        <div class="item form-group">
                            <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Name : </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input class="form-control" type="text" name="name">
                            </div>
                        </div>
                        <div class="item form-group">
                            <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Netto : </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input class="form-control" type="text" name="netto">
                            </div>
                        </div>
                        <div class="item form-group">
                            <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Stock : </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input class="form-control" type="integer" name="stock">
                            </div>
                        </div>
                        <div class="item form-group">
                            <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Price : </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input class="form-control" type="integer" name="price">
                            </div>
                        </div>
                        <div class="item form-group">
                            <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Expired : </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input class="form-control" type="date" name="expired">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <div class="col-md-6 col-sm-6 offset-md-3">
                                <button class="btn btn-light" type="button" text="white">
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
