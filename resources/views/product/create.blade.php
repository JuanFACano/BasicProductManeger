<x-layout>
	<div class="py-10 flex flex-col items-start space-y-4">
		<x-heading-defult>Create Product</x-heading-defult>
	</div>
	<form class="bg-gray-800 py-5 rounded-lg mx-5 px-5 dark:bg-gray-200 flex flex-col space-y-8" method="POST"
		action={{ route('product.store') }}>
		@csrf
		@method('post')
		<x-product-form />
	</form>
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
