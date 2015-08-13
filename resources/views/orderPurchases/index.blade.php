@extends('layout')
@section('module')
Compras
@stop
@section('base_url')
<base href="{{URL::to('/')}}/orderPurchases"/>
@stop
@section('css-customize')
<link href="/vendor/angular-xeditable/dist/css/xeditable.css" rel="stylesheet">

@stop
@section('content')
<!--<section class="content-header">
    <h1>
        CLIENTES
        <small>Panel de Control</small>
    </h1>
</section>-->

<!-- Main content -->
<section ng-app="orderPurchases">
    <div ng-view>

    </div>
</section>

@section('js-customize')
<script src="/js/app/orderPurchases/app.js"></script>
<script src="/js/app/orderPurchases/controllers.js"></script>
<script src="/js/app/orderPurchases/servicesglobalpurchase.js"></script>
<script src="/vendor/angular-xeditable/dist/js/xeditable.js"></script>
@stop

@stop