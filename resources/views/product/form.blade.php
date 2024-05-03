<x-app-layout>
<div class="md:flex md:justify-center md:px-1 py-1">
    <div class="md:w-1/2">
        <div class="mb-4 text-center">
            <label for="description" class="block text-gray-700 text-sm font-bold mb-2">{{ __('Description') }}</label>
            <input type="text" name="description" class="form-input @error('description') border-red-500 @enderror" value="{{ old('description', $product?->description) }}" id="description" placeholder="Description">
            {!! $errors->first('description', '<div class="text-red-500 text-xs italic mt-1">:message</div>') !!}
        </div>
        <div class="mb-4 text-center">
            <label for="precio" class="block text-gray-700 text-sm font-bold mb-2">{{ __('Precio') }}</label>
            <input type="text" name="Precio" class="form-input @error('Precio') border-red-500 @enderror" value="{{ old('Precio', $product?->Precio) }}" id="precio" placeholder="Precio">
            {!! $errors->first('Precio', '<div class="text-red-500 text-xs italic mt-1">:message</div>') !!}
        </div>
        <div class="mb-4 text-center">
            <label for="stock" class="block text-gray-700 text-sm font-bold mb-2">{{ __('Stock') }}</label>
            <input type="text" name="stock" class="form-input @error('stock') border-red-500 @enderror" value="{{ old('stock', $product?->stock) }}" id="stock" placeholder="Stock">
            {!! $errors->first('stock', '<div class="text-red-500 text-xs italic mt-1">:message</div>') !!}
        </div>
    </div>
     
</div>

    <div class="mb-4 text-center" >
        <button type="submit" class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded">{{ __('Guardar Datos') }}</button>
    </div>

    <div class="mb-4 text-center" >
    <a class="bg-red-500 hover:bg-blue-300 text-black font-bold py-2 px-4 rounded mt-1 ml-1"  href="{{ route('products.index',$product->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('REGRESAR') }}</a>
   </div>

</x-app-layout>