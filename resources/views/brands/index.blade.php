@extends('layout')
@section('module')
Clientes
@stop
@section('base_url')
<base href="{{URL::to('/')}}/brands"/>
@stop
@section('css-customize')
@stop
@section('content')
<!--<section class="content-header">
    <h1>
        CLIENTES
        <small>Panel de Control</small>
    </h1>
</section>-->

<!-- Main content -->
<section ng-app="brands">
    <div ng-view>

    </div>
</section>

@section('js-customize')
    <script src="/vendor/lodash/dist/lodash.min.js"></script>
    <script src="/vendor/angularjs-dropdown-multiselect/dist/angularjs-dropdown-multiselect.min.js"></script>
@stop

@stop