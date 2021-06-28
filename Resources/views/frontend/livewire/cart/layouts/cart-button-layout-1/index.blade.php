<div id="cartLayout1" class="dropdown {{!$showButton ? 'd-none' : ''}}">

  @include("icommerce::frontend.livewire.cart.layouts.$layout.button")

  @if(isset($cart->id))
    @include('icommerce::frontend.livewire.cart.dropdown')
  @endif

  @include("icommerce::frontend.livewire.cart.quoteModal")

</div>

@include("icommerce::frontend.livewire.cart.quoteModal")

@section('scripts-owl')
  @parent
  <script type="text/javascript">

  $(document).ready(function () {
    window.livewire.emit('refreshCart');
  });
  </script>
@stop
