<div class="relative">
	<label for="{{ $identify }}" class="block mb-2 text-sm capitalize text-white  dark:text-blue-900 font-bold">
		{{ $slot }}
	</label>
	<input type='{{ $type }}' name="{{ $identify }}" id="{{ $identify }}" placeholder="{{ $placeholder }}"
		class="w-full p-2.5 bg-gray-100 text-blue-900 text-sm rounded-lg shadow-md dark:placeholder-gray-400 focus-visible:outline-blue-900"
		value={{ old($identify) }}>
	{{-- old() --}}
</div>
