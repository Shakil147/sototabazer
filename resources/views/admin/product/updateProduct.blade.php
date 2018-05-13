@extends('admin.master')

@section('minContent')
      <div class="agile-grids"> 
        <!-- input-forms -->
        <div class="grids">
          <div class="progressbar-heading grids-heading">
            <h2>Edit Product</h2>
          </div>
          <div class="panel panel-widget forms-panel">
            <div class="forms">
              <div class="form-grids widget-shadow" data-example-id="basic-forms"> 
                <div class="form-title">
                  <h4>Edit Product</h4>
                </div>
                <div class="form-body">
                  {!! Form::open(['class'=>'form-horizontal','name'=>'updateProduct','route' => 'produc.update','method'=>'post','enctype'=>'multipart/form-data',]) !!}
                <div class="form-group">
                  <label for="focusedinput" class="col-sm-2 control-label">Product Neme </label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control1" name="product_name" value="{{ $procduct->product_name }}"  placeholder="Product Name">
                    <span class="bg-danger text-info">{{ $errors->has('product_name') ? $errors->first('product_name') : '' }}</span>
                    <input type="hidden" value="{{ $procduct->id }}" name="id">
                    <input type="hidden" value="{{ Auth::user()->id }}" name="product_creater_id">
                  </div>
                </div>
                <div class="form-group">
                  <label for="selector1" class="col-sm-2 control-label">Cetagory Select</label>
                  <div class="col-sm-8">
                    <select class="form-control1 js-example-basic-single" name="category_id" >
                      <option value="">---Select Cetagory---</option>
                      @foreach($allCetagory as $allCetagory)
                        <option value="{{ $allCetagory->id }}">{{ $allCetagory->cetagory_name }}</option>
                      @endforeach
                    </select>
                    <span class="bg-danger text-info">{{ $errors->has('category_id') ? $errors->first('category_id') : '' }}</span>
                  </div>
                </div>

                 <div class="form-group">
                  <label for="selector1" class="col-sm-2 control-label">Brand Select</label>
                  <div class="col-sm-8">
                    <select name="brand_id" id="selector1" class="js-example-basic-single form-control1" >
                      <option value="">---Select Brand---</option>
                    @foreach($allBrand as $allBrand)
                      <option value="{{ $allBrand->id }}">{{ $allBrand->brand_name }}</option>
                    @endforeach
                  </select>
                  <span class="bg-danger text-info">{{ $errors->has('brand_id') ? $errors->first('brand_id') : '' }}</span>
                </div>
                </div>

                <div class="form-group">
                  <label for="focusedinput" class="col-sm-2 control-label"> Size </label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control1" name="product_size" value="{{ $procduct->product_size }}"  placeholder="Product Size" >
                    <span class="bg-danger text-info">{{ $errors->has('product_size') ? $errors->first('product_size') : '' }}</span>
                  </div>
                </div>

                  <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label">Reguler Prise </label>
                    <div class="col-sm-8">
                      <input type="number" class="form-control1" name="reguler_price" value="{{ $procduct->reguler_price }}"  placeholder="Reguler Prise" min="1" >
                      <span class="bg-danger text-info">{{ $errors->has('reguler_price') ? $errors->first('reguler_price') : '' }}</span>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label">Current Prise </label>
                    <div class="col-sm-8">
                      <input type="number" class="form-control1" name="product_price" value="{{ $procduct->product_price }}"  placeholder="Current Prise" min="1" >
                      <span class="bg-danger text-info">{{ $errors->has('product_price') ? $errors->first('product_price') : '' }}</span>
                    </div>
                  </div>

                 <div class="form-group">
                  <label for="focusedinput" class="col-sm-2 control-label"> Quantaty </label>
                  <div class="col-sm-8">
                    <input type="number" class="form-control1" name="product_quantity" value="{{ $procduct->product_quantity }}"  placeholder="Product Quantaty" min="1" >
                    <span class="bg-danger text-info">{{ $errors->has('product_quantity') ? $errors->first('product_quantity') : '' }}</span>
                  </div>
                </div>

                <div class="form-group">
                  <label for="txtarea1" class="col-sm-2 control-label">Short Description </label>
                  <div class="col-sm-8">
                      <textarea name="product_short_description"  id="txtarea1" class="form-control1"
                       rows="200px" style="height: 200px;" >{{ $procduct->product_short_description }}</textarea>
                    <span class="bg-danger text-info">{{ $errors->has('product_short_description') ? $errors->first('product_short_description') : '' }}</span>
                  </div>
                </div>
                <div class="form-group">
                  <label for="txtarea1" class="col-sm-2 control-label">Long Description </label>
                  <div class="col-sm-8">
                    <textarea name="product_long_description" id="" cols="30" rows="10">{{ $procduct->product_long_description }}</textarea>
                    <span class="bg-danger text-info">{{ $errors->has('product_long_description') ? $errors->first('product_long_description') : '' }}</span>
                  </div>
                </div>
              <div class="form-group">
                <label class="col-sm-2 control-label" for="exampleInputFile">Main Imag</label>
                <div class="col-sm-8">
                  <input name="product_main_image" class="col-sm-5" type="file" id="exampleInputFile">
                @if(isset($procduct->product_main_image))
                  <img src="{{ url($procduct->product_main_image) }}" height="50" width="50" />
                @else
                  <p class="help-block" >Add Cetagory Icon .</p>
                @endif 
                  <br><span class="bg-danger text-info">{{ $errors->has('product_main_image') ? $errors->first('product_main_image') : '' }}</span>
                </div>
              </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2">Publication Status</label>
                        <div class="col-sm-8">
                            <select class="form-control" name="publication_status">
                              <option value="">---Select Publication Status</option>
                                <option value="1">Published</option>
                                <option value="0">Unpublished</option>
                            </select>
                            <span class="bg-danger text-info">{{ $errors->has('publication_status') ? $errors->first('publication_status') : '' }}</span>
                        </div>
                    </div>
              <div class="panel-footer">
              <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                  <button type="submit"  class="btn-success btn">Submit</button>
                  <button type="reset" class="btn-danger btn">Reset</button>
                </div>
              </div>
            </div>
          </div>
          
          <div class="bs-example" data-example-id="form-validation-states"></div>
    {!! Form::close() !!}
        </div>
      </div>
    </div>
  </div>

        <div class="grids">
          <div class="progressbar-heading grids-heading">
            <h2>Other Photos</h2>
          </div>
          <div class="panel panel-widget forms-panel">
          <div class="container">
            <div class="row">

              <div class="col-sm-4">
               {!! Form::open(['class'=>'form-horizontal','name'=>'updateProductImages','route' => 'add.produc.images','method'=>'post','enctype'=>'multipart/form-data',]) !!}
               <div class="form-group">
                <label class="col-sm-12 control-label bg-info text-success">ADD One More Photo</label>
                <div class="col-sm-12">
                  <input name="product_image" class="form-control" type="file"><br>
                  <input name="product_id" value="{{ $procduct->id }}" class="form-control" type="hidden"><br>
                  <input class="btn btn-info glyphicon glyphicon-save" type="submit"><br>
                  <p class="help-block" >ADD One More Photo</p>
                  <br><span class="bg-danger text-info">{{ $errors->has('product_main_image') ? $errors->first('product_main_image') : '' }}</span>
                </div>
              </div>
               {!! Form::close() !!}                
              </div>
              @foreach($images as $image)
              <div class="col-sm-4">
                <img src="{{ asset($image->product_image) }}" height="250" width="250" />  
                <a href="{{ url('/delete-product-image'.$image->id) }}" class="btn btn-danger glyphicon glyphicon-trash" title="Delet Image"></a>              
              </div>
              @endforeach
            </div>
          </div>
          </div>
        </div>
</div>

@endsection

@section('plugjs')

<script src="{{ asset('packjes') }}/ckeditor/ckeditor.js"></script>

<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
<script>
  CKEDITOR.replace( 'product_long_description' );

  $(document).ready(function() {
    $('.js-example-basic-single').select2();
});
</script>
<script>
   document.forms['updateProduct'].elements['publication_status'].value = '{{  $procduct->publication_status }}'
   document.forms['updateProduct'].elements['category_id'].value = '{{  $procduct->category_id }}'
   document.forms['updateProduct'].elements['brand_id'].value = '{{  $procduct->brand_id }}'
</script>

@endsection

