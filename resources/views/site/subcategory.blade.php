
@extends('layouts.app')

@section('content')
    <x-headers :regionNameIn="$regionNameIn" :regionName="$regionName" :headertext="$header_text"/>

   
        <x-masters :masters="$masters"/>
        <!-- <x-catalog-of-services :categories="$categories"/> -->
        
  
    <x-footer/>
@endsection