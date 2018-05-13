@extends('admin.master')

@section('title')
Update Brand
@endsection
@section('minContent')
      <div class="agile-grids"> 
        <!-- input-forms -->
        <div class="grids">
          <div class="panel panel-widget forms-panel">
            <div class="forms">
              <div class="form-grids widget-shadow" data-example-id="basic-forms"> 
                <div class="form-title">
                  <h4>Update Brand</h4>
                </div>
                <div class="form-body">
                  {!! Form::open(['class'=>'form-horizontal','name'=>'updateBrand','route' => 'brand.update','method'=>'post','enctype'=>'multipart/form-data',]) !!}
                <div class="form-group">
                  <label for="focusedinput" class="col-sm-2 control-label"> Neme </label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control1" name="brand_name" value="{{ $brandById->brand_name }}" id="focusedinput" placeholder="Brand Name">
                    <span class="bg-danger text-info">{{ $errors->has('brand_name') ? $errors->first('brand_name') : '' }}</span>
                    <input type="hidden" name="id" value="{{ $brandById->id }}" value="{{ $brandById->brand_creater_id }}" ></p>
                    <input type="hidden" name="brand_creater_id" value="{{ Auth::user()->id }}" value="{{ $brandById->brand_creater_id }}" ></p>
                  </div>
                </div>
                <div class="form-group">
                  <label for="txtarea1" class="col-sm-2 control-label"> Brand Description </label>
                  <div class="col-sm-8">
                    <textarea name="brand_description" id="" cols="30" rows="10">{!! $brandById->brand_description !!}</textarea>
                    <span class="bg-danger text-info">{{ $errors->has('brand_description') ? $errors->first('brand_description') : '' }}</span>
                  </div>
                </div>
              <div class="form-group">
              <label class="col-sm-2 control-label" for="exampleInputFile">Icon</label>
              <div class="col-sm-8"><input name="brand_icon" class="col-sm-5" type="file" id="exampleInputFile">
                @if(isset($brandById->brand_icon))
                <img src="{{ url($brandById->brand_icon) }}" height="50" width="50" />
                @endif
                
              <p class="help-block" >Add Cetagory Icon .</p><br>
              <span class="bg-danger text-info">{{ $errors->has('brand_icon') ? $errors->first('brand_icon') : '' }}</span>
          </div>
              </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2">Publication status</label>
                        <div class="col-sm-8">
                            <select class="form-control" name="publication_status">
                                <option value="">---Select Publication Status---</option>
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
  CKEDITOR.replace( 'brands_description' );
</script>
<script>  
  document.forms['updateBrand'].elements['publication_status'].value = '{{  $brandById->publication_status }}'
</script>

@endsection

