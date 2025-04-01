
@extends('layouts.app')

@section('content')
    <x-headers :regionNameIn="$regionNameIn" :regionName="$regionName" :headertext="$header_text"/>
        <x-breadcrumb :breadcrumb="$breadcrumb" />
        <x-masters :masters="$masters" :links="$links"/>
        <!-- <x-catalog-of-services :categories="$categories"/> -->
        
    <x-footer/>
@endsection