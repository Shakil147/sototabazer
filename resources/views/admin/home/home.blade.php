@extends('admin.master')

@section('title')
Home
@endsection
@section('minContent')
          @if(isset($message))    
            <div class="grid_3 grid_5 wow fadeInUp animated" data-wow-delay=".5s">
                <div class="alert alert-success" role="alert">
                    <strong>Well done!</strong>{{ $message }}
                </div>
            </div>
            @endif
<div class="social grid">
    <div class="grid-info">
        <div class="col-md-3 top-comment-grid">
            <div class="comments likes">
                <div class="comments-icon">
                    <i class="fa fa-facebook"></i>
                </div>
                <div class="comments-info likes-info">
                    <h3>95K</h3>
                    <a href="{{ asset('backend') }}/#">Likes</a>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
        <div class="col-md-3 top-comment-grid">
            <div class="comments">
                <div class="comments-icon">
                    <i class="fa fa-comments"></i>
                </div>
                <div class="comments-info">
                    <h3>12K</h3>
                    <a href="{{ asset('backend') }}/#">Comments</a>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
        <div class="col-md-3 top-comment-grid">
            <div class="comments tweets">
                <div class="comments-icon">
                    <i class="fa fa-twitter"></i>
                </div>
                <div class="comments-info tweets-info">
                    <h3>27K</h3>
                    <a href="{{ asset('backend') }}/#">Tweets</a>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
        <div class="col-md-3 top-comment-grid">
            <div class="comments views">
                <div class="comments-icon">
                    <i class="fa fa-eye"></i>
                </div>
                <div class="comments-info views-info">
                    <h3>557K</h3>
                    <a href="{{ asset('backend') }}/#">Views</a>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>
@endsection