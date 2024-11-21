<x-layout>
    <div class="py-10 flex flex-col items-start space-y-4">
        <x-heading-defult>products</x-heading-defult>
        <x-button-default background='bg-blue-500' :route="route('product.create')">Add Product</x-button-default>
    </div>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right">
            <thead class="text-xs text-white uppercase bg-gray-700 dark:bg-gray-50 dark:text-gray-700">
                <tr class="text-center">
                    <th scope="col" class="px-6 py-3">
                        Product name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Price
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Description
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Stock
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr
                        class="odd:bg-white odd:dark:bg-gray-800 even:bg-gray-50 even:dark:bg-gray-700 border-b dark:border-gray-700">
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $product->name }}
                        </th>
                        <td class="px-6 py-4">
                            ${{ $product->price }}
                        </td>
                        <td class="px-6 py-4 overflow-hidden text-ellipsis whitespace-normal max-h-12 ">
                            {{ $product->description }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $product->stock }}
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex gap-2">
                                <x-button-default background='bg-green-500' :route="route('product.edit', $product->id)">Edit</x-button-default>
                                <form action="{{ route('product.destroy', $product->id) }}" method='POST'>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="text-center px-8 py-1 rounded-lg text-white bg-red-500 font-bold">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div>
            {{ $products->links() }}
        </div>
    </div>
    <div class="mb-10">
        <x-button-default background='bg-blue-400' :route="route('pdf')">Imprimir Productos</x-button-default>
    </div>
</x-layout>
