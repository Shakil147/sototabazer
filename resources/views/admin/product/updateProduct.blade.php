@extends('admin.master')

@section('title')
Updet Product
@endsection

@section('plgCss')
<!-- xeditable css -->
<link rel="stylesheet" href="{{ asset('backend') }}/plugins/vendors/bower_components/dropify/dist/css/dropify.min.css">
<!-- select2 CSS -->
<link href="{{ asset('backend') }}/plugins/vendors/bower_components/select2/dist/css/select2.min.css" rel="stylesheet" type="text/css"/>
<!-- bootstrap-select CSS -->
<link href="{{ asset('backend') }}/plugins/vendors/bower_components/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet" type="text/css"/>
<!-- bootstrap-tagsinput CSS -->
<link href="{{ asset('backend') }}/plugins/vendors/bower_components/bootstrap-tagsinput/dist/bootstrap-tagsinput.css" rel="stylesheet" type="text/css"/>
<!-- bootstrap-touchspin CSS -->
<link href="{{ asset('backend') }}/plugins/vendors/bower_components/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css" rel="stylesheet" type="text/css"/>
<!-- multi-select CSS -->
<link href="{{ asset('backend') }}/plugins/vendors/bower_components/multiselect/css/multi-select.css" rel="stylesheet" type="text/css"/>
<!-- Bootstrap Switches CSS -->
<link href="{{ asset('backend') }}/plugins/vendors/bower_components/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.min.css" rel="stylesheet" type="text/css"/>
<!-- Custom CSS -->
@endsection

@section('minContent')
        <div class="container-fluid"> 
      <!-- Title -->
      <div class="pa-10"> </div>
      <!-- /Title --> 
      <!-- Row -->
      <div class="row">
        <div class="col-md-12 col-xs-12">
          <div class="panel panel-default card-view">
            <div class="panel-heading">
              <div class="pull-left">
                <h6 class="panel-title txt-dark">Product Updet</h6>
              </div>
              <div class="clearfix"></div>
            </div>
            <div class="panel-wrapper collapse in">
              <div class="panel-body">
                <div class="row">
                  <div class="col-md-6 col-xs-12">
                    <div class="form-wrap">
                      {!! Form::open(['class'=>'form-horizontal','route' => 'produc.update','method'=>'post','enctype'=>'multipart/form-data',]) !!}
                        <div class="col-sm-12 col-xs-12">
                          <div class="form-group">
                            <label class="control-label">Product Name</label>
                            <div>
                              <input type="text" class="form-control" name="product_name" value="{{ $product->product_name }}"  placeholder="Product Name">
                              <span class="bg-danger text-info">{{ $errors->has('product_name') ? $errors->first('product_name') : '' }}</span>
                              <input type="hidden" value="{{ $product->id }}" name="id">
                              <input type="hidden" value="{{ Auth::user()->id }}" name="product_creater_id">
                            </div>
                          </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="form-group">
                          <div class="col-sm-6 col-xs-12">
                            <label class="control-label">Select Category</label>
                            <div>
                              <select class="selectpicker" name="category_id" data-style="btn-default btn-outline">
                                <option  data-tokens="Category" value="" disabled>Select Category </option>
                                 @foreach($allCetagory as $Cetagory)
                                  <option value="{{ $Cetagory->id }}" @if($Cetagory->id == $product->category_id) selected @endif>{{ $Cetagory->cetagory_name }}</option>
                                @endforeach
                              </select>
                              <span class="bg-danger text-info">{{ $errors->has('category_id') ? $errors->first('category_id') : '' }}</span> 
                            </div>
                          </div>
                          <div class="col-sm-6 col-xs-12">
                            <label class="control-label">Brand</label>
                            <div >
                              <select class="selectpicker" name="brand_id" data-style="btn-default btn-outline">
                                <option  data-tokens="Category">Select Brand </option>
                                  @foreach($allBrand as $Brand)
                                    <option value="{{ $Brand->id }}" @if($Brand->id == $product->brand_id) selected @endif  >{{ $Brand->brand_name }}</option>
                                  @endforeach
                              </select>
                              <span class="bg-danger text-info">{{ $errors->has('brand_id') ? $errors->first('brand_id') : '' }}</span>
                            </div>
                          </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="form-group">
                          <div class="col-md-3 col-xs-12">
                            <label class="control-label">Reguler Price</label>
                            <div>
                              <input type="number" class="form-control" name="reguler_price" value="{{ $product->reguler_price }}"  placeholder="Reguler Prise" min="1" >
                              <span class="bg-danger text-info">{{ $errors->has('reguler_price') ? $errors->first('reguler_price') : '' }}</span>
                            </div>
                          </div>

                          <div class="col-md-3 col-xs-12">
                            <label class="control-label">Current Price</label>
                            <div>
                              <input type="number" class="form-control" name="product_price" value="{{ $product->product_price }}"  placeholder="Current Prise" min="1" >
                              <span class="bg-danger text-info">{{ $errors->has('product_price') ? $errors->first('product_price') : '' }}</span>
                            </div>
                          </div>

                          <div class="col-md-3 col-xs-12">
                            <label class="control-label">Size</label>
                            <div>
                              <input type="text" class="form-control" name="product_size" value="{{ $product->product_size }}"  placeholder="Product Size" >
                               <span class="bg-danger text-info">{{ $errors->has('product_size') ? $errors->first('product_size') : '' }}</span>
                            </div>
                          </div>

                          <div class="col-md-3 col-xs-12">
                            <label class="control-label">QTY</label>
                            <div>
                              <input type="number" class="form-control" name="product_quantity" value="{{ $product->product_quantity }}"  placeholder="Product Quantaty" min="1" >
                              <span class="bg-danger text-info">{{ $errors->has('product_quantity') ? $errors->first('product_quantity') : '' }}</span>
                            </div>
                          </div>
                        </div>

                        <div class="clearfix"></div>
                        <div class="panel-wrapper collapse in">
                          <div class="panel-body">

                             <label class="control-label">Product Main Image</label>   
                            <div class="row">              
                              <div class="col-sm-3 col-lg-6">                                
                                <input type="file" id="input-file-now" name="product_main_image"
                                 @if(isset($product->product_main_image)) data-default-file="{{ url($product->product_main_image) }}" @endif
                                  placeholder="Select Main Image" class="dropify" />
                                <span class="bg-danger text-info">{{ $errors->has('product_main_image') ? $errors->first('product_main_image') : '' }}</span>
                              </div>
                            </div>
                          </div>
                        </div>                                               
                    </div>
                  </div>
                  <div class="col-md-6 col-xs-12">
                    <div class="form-group">
                      <label  class="control-label">Small Description</label>
                      <div>
                        <textarea name="product_short_description" class="form-control" cols="30" rows="10">{{ $product->product_short_description }}</textarea>
                        <span class="bg-danger text-info">{{ $errors->has('product_short_description') ? $errors->first('product_short_description') : '' }}</span>
                      </div>
                    </div>
                    <div class="form-group">
                      <label  class="control-label">Large Description</label>
                      <div>
                        <textarea name="product_long_description" id="" class="form-control" cols="30" rows="10">{{ $product->product_long_description }}</textarea>
                    <span class="bg-danger text-info">{{ $errors->has('product_long_description') ? $errors->first('product_long_description') : '' }}</span>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <div class="pt-15">Publication Status</div>
                        <div class="pull-left">
                          <select class="form-control" name="publication_status">
                              <option value="">---Select Publication Status</option>
                                <option @if($product->publication_status == 1) selected @endif value="1">Published</option>
                                <option @if($product->publication_status == 0) selected @endif value="0">Unpublished</option>
                            </select>
                           <span class="bg-danger text-info">{{ $errors->has('publication_status') ? $errors->first('publication_status') : '' }}</span>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6  col-xs-12 text-right mt-50">
                      <button class="btn  btn-success btn-rounded"><i class="mdi mdi-content-save  mr-5"></i> Save </button>
                      <button class="btn btn-danger btn-rounded"><i class="mdi mdi-close  mr-5"></i> cancel</button>
                    </div>
                  </div>
                  {!! Form::close() !!}
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /Row --> 
      <!-- Row -->
      <div class="row">
        <div class="col-xs-12">
          <div class="panel panel-default card-view">
            <div class="panel-heading">
              <div class="pull-left">
                <h6 class="panel-title txt-dark">Other Pictures</h6>
              </div>
              <div class="clearfix"></div>
            </div>
            <div class="panel-wrapper collapse in">
              <div class="panel-body">
                <div class="row">
                   {!! Form::open(['class'=>'form-horizontal updateProductImages mb-10 ml-40 mr-30','name'=>'updateProductImages','route' => 'add.produc.images','method'=>'post','enctype'=>'multipart/form-data',]) !!}
                    <input type="file" name="product_image"  id="product_image"  class="dropify" />
                     <input class="btn btn-info glyphicon glyphicon-save ml-60" type="submit"><br>
                  <input name="product_id" value="{{ $product->id }}" class="form-control" id="product_id" type="hidden"><br>
                  <span class="bg-danger text-info">{{ $errors->has('product_image') ? $errors->first('product_image') : '' }}</span>
                  {!! Form::close() !!}

                  @if(isset($images))
                    @foreach($images as $image)
                      <div class="col-md-3 col-sm-6 col-xs-12  text-center mb-10" id="{{ 'imageID'.$image->id }}"><img src="{{ asset($image->product_image) }}" class="img-responsive img-boder" alt="" title="">
                        <a  onclick="del({{ $image->id }})" href="#" class="btn btn-danger glyphicon glyphicon-trash" title="Delet Image"></a>
                      </div>  
                    @endforeach
                  @endif                   
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      <!-- /Row --> 
    </div>


@endsection

@section('plugjs')


<script src="{{ asset('packjes') }}/ckeditor/ckeditor.js"></script>
<!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script> -->
<script>

  CKEDITOR.replace( 'product_long_description' );

/*  $(document).ready(function() {
    $('.js-example-basic-single').select2();
});*/
</script>

<script type="text/javascript">
  function del(image_id){
    console.log("hmm its hear with id");
    console.log(image_id);
     $.ajax({
          type:'get',
          url:'{!!URL::to('prouductImagesDelete')!!}',
          data:{'id':image_id}, 
         success:function(response){
          console.log("hmm its hear");
           if (response == "prouductImageDeleted") {
            swal({   
            title: "Success!",   
                   type: "success", 
            text: "Image successfully deleted",
            confirmButtonColor: "#2bb9c3",   
              });
            $("#imageID"+image_id).hide();
          } else{
            swal({     
            title: "Error",   
                   type: "error", 
            text: "Image Delete  Unsuccessfull",
            confirmButtonColor: "#2bb9c3",   
              });
          }          
        }, 
        error:function(){
          console.log("hmm not its hear");
          swal({     
            title: "Error",   
                   type: "error", 
            text: "Image Delete  Unsuccessfull",
            confirmButtonColor: "#2bb9c3",   
              });
        }
        });
    }
</script>

<!-- Select2 JavaScript --> 
<script src="{{ asset('backend') }}/plugins/vendors/bower_components/select2/dist/js/select2.full.min.js"></script> 
<!-- Bootstrap Select JavaScript --> 
<script src="{{ asset('backend') }}/plugins/vendors/bower_components/bootstrap-select/dist/js/bootstrap-select.min.js"></script> 
<!-- Bootstrap Tagsinput JavaScript --> 
<script src="{{ asset('backend') }}/plugins/vendors/bower_components/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script> 
<!-- Bootstrap Touchspin JavaScript --> 
<script src="{{ asset('backend') }}/plugins/vendors/bower_components/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js"></script> 
<!-- Multiselect JavaScript --> 
<script src="{{ asset('backend') }}/plugins/vendors/bower_components/multiselect/js/jquery.multi-select.js"></script> 
<!-- Bootstrap Switch JavaScript --> 
<script src="{{ asset('backend') }}/plugins/vendors/bower_components/bootstrap-switch/dist/js/bootstrap-switch.min.js"></script> 
<!-- Form Advance Init JavaScript --> 
<script src="{{ asset('backend') }}/plugins/assets/js/form-advance-data.js"></script> 
<!-- Slimscroll JavaScript --> 
<script src="{{ asset('backend') }}/plugins/assets/js/jquery.slimscroll.js"></script> 
<!-- Fancy Dropdown JS --> 
<script src="{{ asset('backend') }}/plugins/assets/js/dropdown-bootstrap-extended.js"></script> 
<!-- Init JavaScript --> 
<script src="{{ asset('backend') }}/plugins/assets/js/init.js"></script> 
<script src="{{ asset('backend') }}/plugins/vendors/bower_components/dropify/dist/js/dropify.min.js"></script> 
<script src="{{ asset('backend') }}/plugins/assets/js/dropify.js"></script>

@endsection

