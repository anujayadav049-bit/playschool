@extends('layouts.app')

@section('content')

<style>
/* Normal state - White background, black menu */
#header-sticky{
    background: #F8BC26 !important;
}
#header-sticky .main-menu ul li a{
    color: #222 !important;
}

#header-sticky.sticky,
.header-1.sticky{
    background: #0D0643 !important; /*  */
}
#header-sticky.sticky .main-menu ul li a,
.header-1.sticky .main-menu ul li a{
    color: #fff !important;
}
</style>

{{-- Banner --}}
<div style="padding-top: 150px; background: #fef6f0;">
    <div class="container py-4">
        <div class="row">
            <div class="col-12 text-center">
                <h1 style="font-weight:800; color:#222;">{{ $page->title }}</h1>
                <p><a href="{{ url('/') }}" style="text-decoration:none;">Home</a> / {{ $page->title }}</p>
            </div>
        </div>
    </div>
</div>

{{-- Content --}}
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-10 bg-white p-4 p-md-5 shadow-sm rounded" style="line-height:1.9; font-size:18px;">
            {!! $page->content !!}
        </div>
    </div>
</div>

@endsection