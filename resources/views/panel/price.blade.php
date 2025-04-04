@extends('layouts.panel')

@section('content')
    <x-panel.navbar/>

    <div class="container">
        <div class="row">
            <div class="col-12 col-md-3 mt-4">
                <x-panel.sidebar/>
            </div>

            <div class="col-12 col-md-9 mt-4">
               <x-panel.add-price :userPrices="$user_prices" :diagnosticPrice="$diagnostic_price" :departurePrice="$departure_price"/>
            </div>
        </div>
    </div>

@endsection