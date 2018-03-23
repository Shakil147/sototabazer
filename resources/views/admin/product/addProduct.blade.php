@extends('admin.master')

@section('minContent')
      <div class="agile-grids"> 
        <!-- input-forms -->
        <div class="grids">
          <div class="progressbar-heading grids-heading">
            <h2>Add Product</h2>
          </div>
          <div class="panel panel-widget forms-panel">
            <div class="forms">
              <div class="form-grids widget-shadow" data-example-id="basic-forms"> 
                <div class="form-title">
                  <h4>Add Product</h4>
                </div>
                <div class="form-body">
                  {!! Form::open(['class'=>'form-horizontal','route' => 'produc.add','method'=>'post','enctype'=>'multipart/form-data',]) !!}
                <div class="form-group">
                  <label for="focusedinput" class="col-sm-2 control-label"> Neme </label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control1" name="product_name" id="focusedinput" placeholder="Product Name">
                    <input type="hidden" value="{{ Auth::user()->id }}" name="product_creater_id">
                  </div>
                </div>
                <div class="form-group">
                  <label for="selector1" class="col-sm-2 control-label">Cetagory Select</label>
                  <div class="col-sm-8">
                    <select class="form-control1 js-example-basic-single" name="category_id" required>
                    @foreach($allCetagory as $allCetagory)
                    <option value="{{ $allCetagory->id }}">{{ $allCetagory->cetagory_name }}</option>
                    @endforeach
                    </select>
                  </div>
                </div>

                 <div class="form-group">
                  <label for="selector1" class="col-sm-2 control-label">Brand Select</label>
                  <div class="col-sm-8"><select name="brand_id" id="selector1" class="js-example-basic-single form-control1" required>
                    @foreach($allBrand as $allBrand)
                    <option value="{{ $allBrand->id }}">{{ $allBrand->brands_name }}</option>
                    @endforeach
                  </select></div>
                </div>

                <div class="form-group">
                  <label for="focusedinput" class="col-sm-2 control-label"> Size </label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control1" name="product_size" id="focusedinput" placeholder="Product Size" required>
                  </div>
                </div>

                  <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label"> Prise </label>
                    <div class="col-sm-8">
                      <input type="number" class="form-control1" name="product_price" id="focusedinput" placeholder="Product Prise" min="1" required>
                    </div>
                  </div>

                 <div class="form-group">
                  <label for="focusedinput" class="col-sm-2 control-label"> Quantaty </label>
                  <div class="col-sm-8">
                    <input type="number" class="form-control1" name="product_quantity" id="focusedinput" placeholder="Product Quantaty" min="1" required>
                  </div>
                </div>

                <div class="form-group">
                  <label for="txtarea1" class="col-sm-2 control-label">Short Description </label>
                  <div class="col-sm-8"><textarea name="product_short_description"  id="txtarea1" class="form-control1" rows="200px" style="height: 200px;" required></textarea></div>
                </div>
                <div class="form-group">
                  <label for="txtarea1" class="col-sm-2 control-label">Long Description </label>
                  <div class="col-sm-8"><textarea name="product_long_description"  id="txtarea1" class="form-control1" rows="200px" style="height: 200px;" required></textarea></div>
                </div>
              <div class="form-group">
              <label class="col-sm-2 control-label" for="exampleInputFile">Main Image</label>
              <div class="col-sm-8"><input name="product_main_image" class="col-sm-8" type="file" id="exampleInputFile" required>
              <p class="help-block" >Add Product Main Image .</p></div>
              </div>
              <div class="form-group">
              <label class="col-sm-2 control-label" for="exampleInputFile">Products Images</label>
              <div class="col-sm-8"><input name="file[]" class="col-sm-8" type="file" id="exampleInputFile" multiple>
              <p class="help-block" >Add Product Images .</p></div>
              </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2">Publication status</label>
                        <div class="col-sm-8">
                            <select class="form-control" name="publication_status">
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


<script src="{{ asset('packjes') }}/ckeditor/ckeditor.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
<script>

  CKEDITOR.replace( 'product_long_description' );

  $(document).ready(function() {
    $('.js-example-basic-single').select2();
});
</script>

@endsection

