@extends('layout.layout');

@section('title_page',$product['title'])

@section('page_content')
    
    @include('prodotti.partialProdotti.topMain')
    @include('prodotti.partialProdotti.bottomMain')
@endsection
