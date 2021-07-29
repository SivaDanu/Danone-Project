@extends('layouts.template')

@section('content')
<div class="right_col" role="main">
    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
                <div class="_title">
                    <h2 align='center'>Form Edit Category</h2>

                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br/>
                    <form action="{{route('category.update', $category->id)}}" method="POST" enctype="multipart/form-data" id="" data-parsley-validate class="form-horizontal form-label-left">
                        @csrf
                        @method('PUT')
                        <div class="item form-group">
                            <label class="col-form-label col-md-4 col-sm-3 label-align">Image: <span></span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="file" name="image" onchange="readURL(this)" class="choose" />
                                <img id="blah" width="90" height="100" src="{{asset('storage/Category/'.$category->image)}}" class="img-fluid" alt="" />
                                    @if ($errors->has('image'))
                                        <span class="text-danger">{{ $errors->first('image') }}</span>
                                    @endif
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="col-form-label col-md-4 col-sm-3 label-align">Name : <span></span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="text" name="name" class="form-control" value="{{$category->name}}">
                                    @if ($errors->has('name'))
                                        <span class="text-danger">{{ $errors->first('name') }}</span>
                                    @endif
                            </div>
                        </div>
                        <div class="item form-group">
                            <label for="middle-name" class="col-form-label col-md-4 col-sm-3 label-align">Scientific Name : </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input class="form-control" type="text" name="scientific" value="{{$category->scientific}}">
                                    @if ($errors->has('scientific'))
                                        <span class="text-danger">{{ $errors->first('scientific') }}</span>
                                    @endif
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="col-form-label col-md-4 col-sm-3 label-align">Category : </label>
                            <div class="col-md-6 col-sm-6 ">
                            <div class="btn-group" data-toggle="buttons">
                                <label class="" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                    <input type="radio" name="category" value="Flora" class="flat" checked="{{$category->category == 'Flora' ? 'true' :'false'}}"> Flora
                                </label>
                                <label class="" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                    <input type="radio" name="category" value="Fauna" class="flat" checked="{{$category->category  == 'Fauna' ? 'true' :'false'}}"> Fauna
                                </label>
                            </div>
                            @if ($errors->has('category'))
                                <span class="text-danger">{{ $errors->first('category') }}</span>
                            @endif
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="col-form-label col-md-4 col-sm-3 label-align">Since Time : </label>
                            <div class="col-md-6 col-sm-6">
                                <div class="btn-group" data-toggle="button">
                                    <label for="" class="" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                        <input type="radio" name="since" value="Azoikum" class="flat" checked="{{$category->since == 'Azoikum' ? 'true' : 'false'}}"> Azoikum
                                    </label>
                                    <label for="" class="" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                        <input type="radio" name="since" value="Paleozoikum" class="flat" checked="{{$category->since == 'Paleozoikum' ? 'true' : 'false'}}"> Paleozoikum
                                    </label>
                                    <label for="" class="" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                        <input type="radio" name="since" value="Mesozoikum" class="flat" checked="{{$category->since == 'Mesozoikum' ? 'true' : 'false'}}"> Mesozoikum
                                    </label>
                                    <label for="" class="" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                        <input type="radio" name="since" value="Neozoikum" class="flat" checked="{{$category->since == 'Neozoikum' ? 'true' : 'false'}}""> Neozoikum
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
                            <label for="" class="col-form-label col-md-4 col-sm-3 label-align">Genus : </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input class="form-control" type="text" name="species" value="{{$category->species}}">
                            </div>
                                @if ($errors->has('species'))
                                    <span class="text-danger">{{ $errors->first('species') }}</span>
                                @endif
                        </div>
                        <div class="item form-group">
                            <label for="" class="col-form-label col-md-4 col-sm-3 label-align">Type : </label>
                            <div class="col-md-6 col-sm-6" >
                                <select name="type" id="" class="form-control" value="{{$category->type}}">
                                    <option value="{{$category->type}}">{{$category->type}}</option>
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
                                <button class="btn btn-dark" type="button text-white">
                                    <a href="{{route ('category.index')}}">Cancel & Back</a>
                                </button>
                                <button type="submit" class="btn btn-success">Update</button>
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
