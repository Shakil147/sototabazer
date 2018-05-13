
@extends('admin.master')
@section('title')
   send Email
@endsection

@section('minContent')
<div class="row">
    <div class="col-sm-8">
        <div class="well">
            <div class="form" style="background-color: #FDFEFD;">
                {{ Form::open(['route'=>'post.email', 'method'=>'POST', 'class'=>'form-horizontal', 'enctype'=>'multipart/form-data']) }}
                <div class="form-group ">
                    <label for="cname" class="col-sm-1 control-label"><h5>TO</h5></label>
                    <div class="col-sm-11">
                        <input class="form-control" name="email" @if(isset($contact))value="{{ $contact->email }}" @endif type="email" required>
                    </div>
                </div>
                <div class="clearfix"> </div>
                <div class="form-group ">
                    <label for="cname" class="col-sm-1 control-label"><h5>Subject</h5></label>
                    <div class="col-sm-11">
                        <input class="form-control" name="subject"  type="text" required>
                    </div>
                </div>
                <div class="clearfix"> </div>
                
                
                <div class="form-group" >
                    <label for="txtarea1" class="col-sm-1 control-label"><h5>Body</h5></label>
                    <div class="col-sm-11" >
                        <textarea name="message_body" id="" cols="30" rows="10"></textarea>
                    </div>
                </div>
                <div class="clearfix"> </div>
                <div class="form-group">
                    <label for="cname" class="col-sm-4 control-label">ADD Image</label>
                    <input type="file" name="message_image" >
                </div>

                <div class="clearfix"> </div>
                <div class="clearfix"> </div>

                <div class="form-group">
                  <div class="col-lg-offset-6 col-lg-6">
                    <button class="btn btn-default" type="reset">Reset</button>
                    <button class="btn btn-primary fa   fa-pencil" type="submit">Sent Email</button>
                </div>
                </div>
                <div class="clearfix"> </div>
                <div class="clearfix"> </div>
                {{ Form::close() }}
            </div>
        </div>
    </div>
    @if(isset($contact))
    <div class="col-lg-4" style="font-family: sans-serif;  border-style: solid;  border-width: 2px;">
        <div class="col-lg-12" style="text-align: center; border-bottom: 1px solid ">Message Detials</div>
         <hr/>
            <div class="col-lg-4">Name : </div>
        <div class="col-lg-8">{{ $contact->full_name }}</div>
         <hr/>
        <div class="col-lg-12">Email : </div>
        <div class="col-lg-12">{{ $contact->email }}</div>
         <hr/>
        <div class="col-lg-12">Message : </div>
        <div class="col-lg-12">{{ $contact->massage_description }}</div>
        <hr/>
        <div class="col-lg-12">Message ID : </div>
        <div class="col-lg-12">{{ $contact->id }}</div>
    </div>
    @endif
</div>

@endsection

@section('plugjs')


<script src="{{ asset('packjes') }}/ckeditor/ckeditor.js"></script>
<script>

  CKEDITOR.replace( 'message_body' );
</script>

@endsection