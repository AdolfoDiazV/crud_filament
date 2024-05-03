

@section('template_title')
    {{ __('Actualizar') }} Producto
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                <div class="card-body bg-white">
                    <div class="card-header">
                        <span class="card-title">{{ __('Actualizar datos del Producto') }} </span>
                    </div>
                    
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('products.update', $product->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('product.form')

                            


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

