@extends('layouts.master')

@section('content-header')
    <h1>
        {{ trans('icommerce::orders.title.edit order') }}
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ route('dashboard.index') }}"><i class="fa fa-dashboard"></i> {{ trans('core::core.breadcrumb.home') }}</a></li>
        <li><a href="{{ route('admin.icommerce.order.index') }}">{{ trans('icommerce::orders.title.orders') }}</a></li>
        <li class="active">{{ trans('icommerce::orders.title.edit order') }}</li>
    </ol>
@stop

@section('content')
    {!! Form::open(['route' => ['admin.icommerce.order.update', $order->id], 'method' => 'put']) !!}
    <div class="row">
        <div class="col-md-12">

            <div class="box">
              
                    @include('icommerce::admin.orders.partials.edit-fields')

                    <div class="box-footer">
                        {{--
                        <button type="submit" class="btn btn-primary btn-flat">{{ trans('core::core.button.update') }}</button>
                        --}}
                        <a class="btn btn-danger pull-right btn-flat" href="{{ route('admin.icommerce.order.index')}}"><i class="fa fa-times"></i> {{ trans('core::core.button.cancel') }}</a>
                        
                    </div>
                
            </div> 

        </div>
    </div>
    {!! Form::close() !!}
@stop

@section('footer')
    <a data-toggle="modal" data-target="#keyboardShortcutsModal"><i class="fa fa-keyboard-o"></i></a> &nbsp;
@stop
@section('shortcuts')
    <dl class="dl-horizontal">
        <dt><code>b</code></dt>
        <dd>{{ trans('core::core.back to index') }}</dd>
    </dl>
@stop

@push('js-stack')
    <style>
        .font-weight-bold {
            font-weight: 600 !important;
        }
    </style>
    <script type="text/javascript">
        $( document ).ready(function() {
            $(document).keypressAction({
                actions: [
                    { key: 'b', route: "<?= route('admin.icommerce.order.index') ?>" }
                ]
            });
        });
    </script>
    <script>
        $( document ).ready(function() {
            $('input[type="checkbox"].flat-blue, input[type="radio"].flat-blue').iCheck({
                checkboxClass: 'icheckbox_flat-blue',
                radioClass: 'iradio_flat-blue'
            });
        });
    </script>
@endpush