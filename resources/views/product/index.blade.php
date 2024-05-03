<x-app-layout>
    <div class="container mx-auto">
        <div class="bg-white shadow-md rounded my-6">
            <div class="p-4 flex justify-between items-center">
                <h1 class="text-2xl font-semibold">Productos</h1>
                <a href="products/create" class="bg-blue-500 hover:bg-blue-700 text-black font-bold py-2 px-4 rounded">Crear Nuevo Producto</a>
            </div>
            <!-- Mostrar mensaje de éxito -->
            @if ($message = Session::get('success'))
                <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mx-4 mb-4" role="alert">
                    <p>{{ $message }}</p>
                </div>
            @endif
            <div class="p-4 bg-white">
                <div class="overflow-x-auto">
                    <table class="table-auto w-full">
                        <thead>
                            <tr>
                                <th class="px-4 py-2">No</th>
                                <th class="px-4 py-2">Description</th>
                                <th class="px-4 py-2">Precio</th>
                                <th class="px-4 py-2">Stock</th>
                                <th class="px-4 py-2"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Iterar sobre los productos -->
                            @foreach ($products as $product)
                                <tr>
                                    <td class="border px-4 py-2">{{ ++$i }}</td>
                                    <td class="border px-4 py-2">{{ $product->description }}</td>
                                    <td class="border px-4 py-2">{{ $product->Precio }}</td>
                                    <td class="border px-4 py-2">{{ $product->stock }}</td>
                                    <td class="border px-4 py-2">
                                        <form action="products/{{ $product->id }}" method="POST">
                                            <a href="products/{{ $product->slug }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Mostrar producto</a>
                                            <a href="products/{{ $product->slug }}/edit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Editar</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Borrar</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- Mostrar enlaces de paginación -->
            {!! $products->links() !!}
           
        </div>
    </div>
</x-app-layout>

