@extends('layouts.template')

@section('content')
<div class="right_col" role="main">
    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
                <div class="x_title">
                    <h2 align='center'>Form Input Category</h2>

                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br/>
                    <form action="{{route('category.store')}}" method="POST" enctype="multipart/form-data" id="" data-parsley-validate class="form-horizontal form-label-left">
                        @csrf
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align">Image: <span class="required"></span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="file" name="image" onchange="readURL(this)" class="choose">
                                <img id="blah" width="90" height="100" src="" alt="">
                                    @if ($errors->has('image'))
                                        <span class="text-danger">{{ $errors->first('image') }}</span>
                                    @endif
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align">Name : <span class="required"></span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="text" name="name" class="form-control">
                                    @if ($errors->has('name'))
                                        <span class="text-danger">{{ $errors->first('name') }}</span>
                                    @endif
                            </div>
                        </div>
                        <div class="item form-group">
                            <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Scientific Name : </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input class="form-control" type="text" name="scientific">
                                    @if ($errors->has('scientific'))
                                        <span class="text-danger">{{ $errors->first('scientific') }}</span>
                                    @endif
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align">Category : </label>
                            <div class="col-md-6 col-sm-6 ">
                            <div class="btn-group" data-toggle="buttons">
                                <label class="" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                    <input type="radio" name="category" value="Flora" class="flat"> Flora
                                </label>
                                <label class="" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                    <input type="radio" name="category" value="Fauna" class="flat"> Fauna
                                </label>
                            </div>
                            @if ($errors->has('category'))
                                <span class="text-danger">{{ $errors->first('category') }}</span>
                            @endif
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align">Since Time : </label>
                            <div class="col-md-6 col-sm-6 ">
                                <div class="btn-group" data-toggle="button">
                                    <label for="" class="" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                        <input type="radio" name="since" value="Azoikum" class="flat"> Azoikum
                                    </label>
                                    <label for="" class="" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                        <input type="radio" name="since" value="Paleozoikum" class="flat"> Paleozoikum
                                    </label>
                                    <label for="" class="" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                        <input type="radio" name="since" value="Mesozoikum" class="flat"> Mesozoikum
                                    </label>
                                    <label for="" class="" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                        <input type="radio" name="since" value="Neozoikum" class="flat"> Neozoikum
                                    </label>
                                </div>
                                <!--<select class="form-control" name="since">
                                    <option value=""></option>
                                    <option value="Azoikum">Azoikum</option>
                                    <option value="Paleozoikum">Paleozoikum</option>
                                    <option value="Mesozoikum">Mesozoikum</option>
                                    <option value="Neozoikum">Neozoikum</option>
                                </select>-->
                                @if ($errors->has('since'))
                                    <span class="text-danger">{{ $errors->first('since') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="item form-group">
                            <label for="" class="col-form-label col-md-3 col-sm-3 label-align">Species : </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input class="form-control" type="text" name="species">
                                    @if ($errors->has('species'))
                                        <span class="text-danger">{{ $errors->first('species') }}</span>
                                    @endif
                            </div>
                        </div>
                        <div class="item form-group">
                            <label for="" class="col-form-label col-md-3 col-sm-3 label-align">Type : </label>
                            <div class="col-md-6 col-sm-6" >
                                <select name="type" id="" class="form-control">
                                    <option value=""></option>
                                    <option value="FLORA">FLORA</option>
                                    <option value="Herbivora">Herbivora</option>
                                    <option value="Karnivora">Kranivora</option>
                                    <option value="Omnivora">Omnivora</option>

                                    <!--<input type="checkbox" value="Flora" class="flat">If Flora Check List This Button! <br/>
                                    <input type="checkbox" value="Herbovora" class="flat">Herbivora <br/>
                                    <input type="checkbox" value="Kanivora" class="flat">Karnivora <br/>
                                    <input type="checkbox" value="Omnivora" class="flat">Omnivora <br/>-->
                                </select>
                                @if ($errors->has('type'))
                                    <span class="text-danger">{{ $errors->first('type') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="modal-footer">
                            <div class="col-md-6 col-sm-6 offset-md-3">
                                <button class="btn btn-light" type="button" text="white">
                                    <a href="{{route ('category.index')}}" text="white">Cancel & Back</a>
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
