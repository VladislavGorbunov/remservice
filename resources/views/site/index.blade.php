
@extends('layouts.app')

@section('content')
    <x-headers :regionNameIn="$regionNameIn" :regionName="$regionName"/>

   
        <x-advantages/>
        <x-catalog-of-services :categories="$categories"/>
        <x-top-masters/>
  
    <x-footer/>
@endsection