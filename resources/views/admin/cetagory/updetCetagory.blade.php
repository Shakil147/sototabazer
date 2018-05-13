@extends('admin.master')

@section('title')
Add Cetagory
@endsection

@section('minContent')
     <div class="agile-grids"> 
        <!-- input-forms -->
        <div class="grids">
          <div class="progressbar-heading grids-heading">
            <h2>Add Cetagory</h2>
          </div>
          <div class="panel panel-widget forms-panel">
            <div class="forms">
              <div class="form-grids widget-shadow" data-example-id="basic-forms"> 
                <div class="form-title">
                  <h4>Add Cetagory</h4>
                </div>
                <div class="form-body">
            <div class="tab-pane active" id="horizontal-form">
              {!! Form::open(['class'=>'form-horizontal','name' =>'updeteCetagory','url' => '/cetagory-updet','method'=>'post','enctype'=>'multipart/form-data']) !!}
                <div class="form-group">
                  <label for="focusedinput" class="col-sm-2 control-label"> Neme </label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control1" name="cetagory_name" value="{!! $cetagoryById->cetagory_name !!}" id="focusedinput" placeholder="Cetagory Name">
                    <span class="bg-danger text-info">{{ $errors->has('cetagory_name') ? $errors->first('cetagory_name') : '' }}</span>
                    <input type="hidden" value="{{ $cetagoryById->id }}" name="id"></p>
                    <input type="hidden" value="{{ Auth::user()->id }}" name="cetagorie_creater_id"></p>
                  </div>
                </div>
                <div class="form-group">
                  <label for="txtarea1" class="col-sm-2 control-label"> Cetagory Description </label>
                  <div class="col-sm-8">
                    <textarea name="cetagory_description" id="" cols="30" rows="10">{!! $cetagoryById->cetagory_description !!}</textarea>
                    <span class="bg-danger text-info">{{ $errors->has('cetagory_description') ? $errors->first('cetagory_description') : '' }}</span>
                  </div>
                </div>
              <div class="form-group">
              <label class="col-sm-2 control-label" for="exampleInputFile">Icon</label>
                <div class="col-sm-8">
                  <input name="cetagory_icon" class="col-sm-5" type="file" id="exampleInputFile">
                @if(isset($cetagoryById->cetagory_icon))
                  <img src="{{ url($cetagoryById->cetagory_icon) }}" height="50" width="50" />
                @else
                  <p class="help-block" >Add Cetagory Icon .</p>
                @endif 
                  <br><span class="bg-danger text-info">{{ $errors->has('cetagory_icon') ? $errors->first('cetagory_icon') : '' }}</span>
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
<<script>
  CKEDITOR.replace( 'cetagory_description' );
</script>
<script>
  document.forms['updeteCetagory'].elements['publication_status'].value = "{{  $cetagoryById->publication_status }}"
</script>


@endsection