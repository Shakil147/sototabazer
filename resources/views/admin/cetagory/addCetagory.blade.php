@extends('admin.master')

@section('title')
Add Cetagory
@endsection

@section('minContent')
      <div class="agile-grids"> 
        <!-- input-forms -->
        <div class="grids">
          <div class="panel panel-widget forms-panel">
            <div class="forms">
              <div class="form-grids widget-shadow" data-example-id="basic-forms"> 
                <div class="form-title">
                  <h4 class="text-info">Add Cetagory</h4>
                </div>
                <div class="form-body">
                  {!! Form::open(['class'=>'form-horizontal','url' => '/cetagory-add','method'=>'post','enctype'=>'multipart/form-data',]) !!}
                <div class="form-group">
                  <div class="col-sm-2">                    
                  <label for="focusedinput" class="control-label"> Neme </label>
                  </div>
                  <div class="col-sm-8">
                    <input type="text" class="form-control1" value="{{ Request::old('cetagory_name') }}" name="cetagory_name" placeholder="Cetagory Name" minlength="3" maxlength="140"  required>
                    <span class="bg-danger text-info">{{ $errors->has('cetagory_name') ? $errors->first('cetagory_name') : '' }}</span>
                    <input type="hidden" class="span6" value="{{ Auth::user()->id }}" name="cetagorie_creater_id"></p>
                  </div>
                </div>
                <div class="form-group">
                  <label for="txtarea1" class="col-sm-2 control-label"> Cetagory Description </label>
                  <div class="col-sm-8">
                  <textarea name="cetagory_description" id="" cols="30" rows="10"
                  >{{ Request::old('cetagory_description') }}</textarea>
                  <span class="bg-danger text-primary">{{ $errors->has('cetagory_description') ? $errors->first('cetagory_description') : '' }}</span>
                </div>
                </div>
              <div class="form-group">
                <label class="col-sm-2 control-label" for="exampleInputFile">Icon</label>
                <div class="col-sm-8">
                  <input name="cetagory_icon"  class="col-sm-8" type="file" required>
                  <p class="help-block" >Add Cetagory Icon .</p>
                  <span class="bg-danger text-primary">{{ $errors->has('cetagory_icon') ? $errors->first('cetagory_icon') : '' }}</span>
                </div>
              </div>
              <div class="form-group">
                  <label class="control-label col-sm-2">Publication status</label>
                  <div class="col-sm-8">
                      <select class="form-control" name="publication_status" required>
                          <option value="">---Select Publication Status</option>
                          <option value="1">Published</option>
                          <option value="0">Unpublished</option>
                      </select>
                      <span class="bg-danger text-primary">{{ $errors->has('publication_status') ? $errors->first('publication_status') : '' }}</span>
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
<!-- <script src="{{ asset('ckeditor') }}/ckeditor.js"></script>
<script>
  CKEDITOR.replace( 'cetagory_description' );
</script> -->

@endsection

