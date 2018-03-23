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
                  <label for="focusedinput" class="col-sm-2 control-label"> Neme </label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control1" name="product_name" value="{{ $procductById->product_name }}" id="focusedinput" placeholder="Product Name">
                    <input type="hidden" value="{{ $procductById->id }}" name="id">
                    <input type="hidden" value="{{ Auth::user()->id }}" name="product_creater_id">
                  </div>
                </div>
                <div class="form-group">
                  <label for="selector1" class="col-sm-2 control-label">Cetagory Select</label>
                  <div class="col-sm-8"><select name="category_id" id="selector1" class="form-control1">
                    <option>--Select Cetagory--</option>
                    @foreach($allCetagory as $allCetagory)
                    <option value="{{ $allCetagory->id }}">{{ $allCetagory->cetagory_name }}</option>
                    @endforeach
                  </select></div>
                </div>

                 <div class="form-group">
                  <label for="selector1" class="col-sm-2 control-label">Brand Select</label>
                  <div class="col-sm-8"><select name="brand_id" id="selector1" class="form-control1">
                    <option>--Select Cetagory--</option>
                    @foreach($allBrand as $allBrand)
                    <option value="{{ $allBrand->id }}">{{ $allBrand->brands_name }}</option>
                    @endforeach
                  </select></div>
                </div>

                <div class="form-group">
                  <label for="focusedinput" class="col-sm-2 control-label"> Size </label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control1" name="product_size" value="{{ $procductById->product_size }}" id="focusedinput" placeholder="Product Size">
                  </div>
                </div>

                  <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label"> Prise </label>
                    <div class="col-sm-8">
                      <input type="number" class="form-control1" name="product_price" value="{{ $procductById->product_price }}" id="focusedinput" placeholder="Product Prise">
                    </div>
                  </div>

                 <div class="form-group">
                  <label for="focusedinput" class="col-sm-2 control-label"> Quantaty </label>
                  <div class="col-sm-8">
                    <input type="number" class="form-control1" name="product_quantity" value="{{ $procductById->product_quantity }}" id="focusedinput" placeholder="Product Quantaty">
                  </div>
                </div>

                <div class="form-group">
                  <label for="txtarea1" class="col-sm-2 control-label">Short Description </label>
                  <div class="col-sm-8"><textarea name="product_short_description"  id="txtarea1" class="form-control1" rows="200px" style="height: 200px;">{!! $procductById->product_short_description !!}</textarea></div>
                </div>
                <div class="form-group">
                  <label for="txtarea1" class="col-sm-2 control-label">Long Description </label>
                  <div class="col-sm-8"><textarea name="product_long_description"  id="txtarea1" class="form-control1" rows="200px" style="height: 200px;">{!! $procductById->product_long_description !!}</textarea></div>
                </div>
              <div class="form-group">
              <label class="col-sm-2 control-label" for="exampleInputFile">Main Image</label>
              <div class="col-sm-8"><input name="product_main_image" class="col-sm-8" type="file" id="exampleInputFile">
                @if(isset($procductById->product_main_image))
                <img src="{{ url($procductById->product_main_image) }}" height="50" width="50" />
                @else
              <p class="help-block" >Add Product Main Image .</p>

                @endif
              </div>
              </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2">Publication status</label>
                        <div class="col-sm-8">
                            <select class="form-control" name="publication_status">
                                <option>---Select Publication Status</option>
                                <option value="1">Published</option>
                                <option value="0">Unpublished</option>
                            </select>
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
          
          <div class="bs-example" data-example-id="form-validation-states">
    {!! Form::close() !!}
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection

@section('plugjs')
<script src="{{ asset('ckeditor') }}/ckeditor.js"></script>
<script>
  CKEDITOR.replace( 'product_long_description' );
   document.forms['updateProduct'].elements['publication_status'].value = '{{  $procductById->publication_status }}'
   document.forms['updateProduct'].elements['category_id'].value = '{{  $procductById->category_id }}'
   document.forms['updateProduct'].elements['brand_id'].value = '{{  $procductById->brand_id }}'
</script>

@endsection

