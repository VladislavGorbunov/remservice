
@extends('layouts.app')

@section('content')
    <x-headers :regionNameIn="$regionNameIn" :regionName="$regionName" :headertext="$header_text"/>
        <x-advantages/>
        <x-catalog-of-services :categories="$categories"/>
        <x-masters-region :masters="$masters"/>
        
    <x-footer/>
@endsection