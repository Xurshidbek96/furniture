@extends('layouts.layout')

@section('content')
    <!--  design section start -->
    @include('sections.design')
    {{ $products->links() }}
    <!--  design section end -->
@endsection
