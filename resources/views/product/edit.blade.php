<x-layout>
	<div class="py-10 flex flex-col items-start space-y-4">
		{{-- Heading --}}
		<x-heading-defult>Edit Product</x-heading-defult>
	</div>
	{{-- Form --}}
	<form class="bg-gray-800 py-5 rounded-lg mx-5 px-5 dark:bg-gray-200 flex flex-col space-y-8" method="POST"
		action={{ route('product.update', $product->id) }}>
		@csrf
		@method('PATCH')
		<div class="grid space-y-4">
			<div class="relative">
				<label for="name" class="block mb-2 text-sm capitalize text-white  dark:text-blue-900 font-bold">
					product name
				</label>
				<input type="text" name="name" id="name"
					class="w-full p-2.5 bg-gray-100 text-blue-900 text-sm rounded-lg shadow-md dark:placeholder-gray-400 focus-visible:outline-blue-900"
					value={{ $product->name }}>
			</div>
			<div class="relative">
				<label for="price" class="block mb-2 text-sm capitalize text-white  dark:text-blue-900 font-bold">
					Price
				</label>
				<input type="number" name="price" id="price"
					class="w-full p-2.5 bg-gray-100 text-blue-900 text-sm rounded-lg shadow-md dark:placeholder-gray-400 focus-visible:outline-blue-900"
					value={{ $product->price }}>
			</div>
			<div class="relative">
				<label for="stock" class="block mb-2 text-sm capitalize text-white  dark:text-blue-900 font-bold">
					Stock
				</label>
				<input type="number" name="stock" id="stock"
					class="w-full p-2.5 bg-gray-100 text-blue-900 text-sm rounded-lg shadow-md dark:placeholder-gray-400 focus-visible:outline-blue-900"
					value={{ $product->stock }}>
			</div>

			<div class="relative">
				<label for="description"
					class="block mb-2 text-sm capitalize text-white  dark:text-blue-900 font-bold">Description</label>
				<textarea name="description" id="description" rows="4"
				 class="w-full p-2.5 bg-gray-50 text-sm text-blue-900 shadow-md rounded-lg dark:placeholder-gray-400 "
				 placeholder="Leave a description...">{{ $product->description }}</textarea>
			</div>
		</div>
		<button class="text-center px-8 py-2 bg-blue-700 text-white font-bold rounded-lg" type="submit">Edit</button>
	</form>

	{{-- Error Container --}}
	<div class="fixed right-5 bottom-5 w-full max-w-[18rem] space-y-2 transition-all">
		@foreach ($errors->all() as $error)
			<div id="toast-bottom-right"
				class="transition-all flex items-center w-full max-w-xs p-4 space-x-4 bg-red-600 text-white divide-x rtl:divide-x-reverse divide-gray-200 rounded-lg shadow dark:divide-gray-700"
				role="alert">
				<div class="text-sm font-normal">{{ $error }}</div>
			</div>
		@endforeach
	</div>
</x-layout>
