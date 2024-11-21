<form class="bg-gray-800 py-5 rounded-lg mx-5 px-5 dark:bg-gray-200 flex flex-col space-y-8" method="POST"
	action={{ route('product.store') }}>
	@csrf
	@method('post')
	<div class="grid space-y-4">
		<x-input-default identify="name" type="text" placeholder="Ej. Tv Premium"> product name</x-input-default>
		<x-input-default identify="price" type="number" placeholder="Ej. 2500">Price</x-input-default>
		<x-input-default identify="stock" type="number" placeholder="Ej. 10"> product name</x-input-default>
		<div class="relative">
			<label for="description"
				class="block mb-2 text-sm capitalize text-white  dark:text-blue-900 font-bold">Description</label>
			<textarea name="description" id="description" rows="4"
			 class="w-full p-2.5 bg-gray-50 text-sm text-blue-900 shadow-md rounded-lg dark:placeholder-gray-400 "
			 placeholder="Leave a description...">{{ old('description') }}</textarea>
		</div>
	</div>
	<button class="text-center px-8 py-2 bg-blue-700 text-white font-bold rounded-lg" type="submit">Create</button>
</form>
