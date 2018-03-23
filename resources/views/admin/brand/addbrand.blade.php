@extends('admin.master')

@section('minContent')
      <div class="agile-grids"> 
        <!-- input-forms -->
        <div class="grids">
          <div class="progressbar-heading grids-heading">
            <h2>Add Brand</h2>
          </div>
          <div class="panel panel-widget forms-panel">
            <div class="forms">
              <div class="form-grids widget-shadow" data-example-id="basic-forms"> 
                <div class="form-title">
                  <h4>Add Brand</h4>
                </div>
                <div class="form-body">
                  {!! Form::open(['class'=>'form-horizontal','url' => '/brand-add','method'=>'post','enctype'=>'multipart/form-data',]) !!}
                <div class="form-group">
                  <label for="focusedinput" class="col-sm-2 control-label"> Neme </label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control1" name="brands_name" id="focusedinput" placeholder="Brand Name">
                    <input type="hidden" class="span6" value="{{ Auth::user()->id }}" name="brands_creater_id"></p>
                  </div>
                </div>
                <div class="form-group">
                  <label for="txtarea1" class="col-sm-2 control-label"> Brand Description </label>
                  <div class="col-sm-8"><textarea name="brands_description"  id="txtarea1" class="form-control1" rows="200px" style="height: 200px;"></textarea></div>
                </div>
              <div class="form-group">
              <label class="col-sm-2 control-label" for="exampleInputFile">Icon</label>
              <div class="col-sm-8"><input name="brands_icon" class="col-sm-8" type="file" id="exampleInputFile">
              <p class="help-block" >Add Cetagory Icon .</p></div>
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
  CKEDITOR.replace( 'brands_description' );
</script>

@endsection
