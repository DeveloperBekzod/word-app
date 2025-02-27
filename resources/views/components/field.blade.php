<div>
    <label for="{{ $attributes['name'] }}" class="block font-semibold leading-6">{{ $slot }}</label>
    <div class="mt-2">
        <input id="{{ $attributes['name'] }}" value="{{ old($attributes['name']) }}" autocomplete required
            {!! $attributes->merge([
                'class' =>
                    'block w-full rounded-md border-1 py-2.5 text-black text-xl shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600',
            ]) !!}>
        @error($attributes['name'])
            <span class="text-red-600" role="alert">{{ $message }}</span>
        @enderror
    </div>
</div>
