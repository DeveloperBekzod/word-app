<div>
    <label for="{{ $attributes['name'] }}" class="block leading-6">{{ $slot }}</label>
    <div class="mt-2">
        <input id="{{ $attributes['name'] }}" value="{{ old($attributes['name']) }}" autocomplete required
            {!! $attributes->merge([
                'class' =>
                    'block w-full text-bold rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6',
            ]) !!}>
        @error($attributes['name'])
            <span class="text-red-600" role="alert">{{ $message }}</span>
        @enderror
    </div>
</div>
