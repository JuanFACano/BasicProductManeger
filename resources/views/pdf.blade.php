<x-layout :header="false" class="layout">

    <div class="py-10 flex flex-col items-start space-y-4">
        <x-heading-defult>products</x-heading-defult>
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

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-layout>
