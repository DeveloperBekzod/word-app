<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-center text-gray-800 dark:text-gray-200 leading-tight">
            Shartnoma a'rizasi
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form class="space-y-6" action="{{ route('contract') }}" method="POST">
                        @csrf
                        @method('POST')
                        <div class="grid grid-cols-2 gap-4">
                            <x-field name="contract_number" type="number">Shartnoma
                                raqami:</x-field>
                            <x-field name="contract_date" type="date">Shartnoma sanasi</x-field>
                        </div>
                        <x-field name="person" type="text">Foydalanuvchi FISH:</x-field>
                        <div class="grid grid-cols-2 gap-4">
                            <x-field name="passport" type="text" placeholder="AA 7777777">Passport seriya va
                                raqami:</x-field>
                            <x-field name="passport_date" type="date">Berilgan sanasi:</x-field>
                        </div>
                        <x-field name="givenBy" type="text">Kim tomonidan berilgan:</x-field>
                        <x-textarea name="address">Yashash manzili:</x-textarea>
                        <x-field name="phone" type="tel" pattern="+[0-9]{13}"
                            placeholder='+998999999999'>Telefon:</x-field>
                        <hr>
                        <div class="text-xl text-center">Mahsulot:</div>
                        <x-field name="product" type="text">Nomi:</x-field>
                        <div class="grid grid-cols-2 gap-4">
                            <x-field name="amount" type="number">Miqrodi (dona):</x-field>
                            <x-field name="price" type="number">Narxi(so'm):</x-field>
                        </div>
                        {{-- <x-field name="total" type="number">Jami summa:</x-field> --}}
                        <x-textarea name="description">Izoh:</x-textarea>
                        <hr>
                        <x-field name="buyer" type='text'>Haridor FISH:</x-field>
                        <div class="grid grid-cols-2 gap-4">
                            <x-field name="buyer_passport" type='text' placeholder="AA 7777777">Passport seriya va
                                raqami:</x-field>
                            <x-field name="buyer_passport_date" type='date'>Berilgan sanasi:</x-field>
                        </div>
                        <x-field name="buyer_passport_givenBy" type='text'>Kim tomonidan berilgan:</x-field>
                        <x-textarea name="buyer_address">Yashash manzili:</x-textarea>
                        <x-textarea name="buyer_description">Izoh:</x-textarea>
                        <hr>
                        <div>
                            <div class="block leading-5">To'lov turini tanlang</div>
                            <div class="flex justify-around mb-14">
                                <div class="mt-2">
                                    <input id="pay12" name="payment_type" value="12" type="radio" checked>
                                    <label for="pay12">12 oy</label>
                                </div>
                                <div class="mt-2">
                                    <input id="pay9" name="payment_type" value="9" type="radio">
                                    <label for="pay9">9 oy</label>
                                </div>
                                <div class="mt-2">
                                    <input id="pay6" name="payment_type" value="6" type="radio">
                                    <label for="pay6">6 oy</label>
                                </div>
                                <div class="mt-2">
                                    <input id="pay3" name="payment_type" value="3" type="radio">
                                    <label for="pay3">3 oy</label>
                                </div>
                            </div>
                            @error('payment_type')
                                <span class="text-red-600" role="alert">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- <table class="w-full border-collapse border dark:border-slate-100 border-black">
                            <thead>
                                <tr class="py-2">
                                    <th class="border dark:border-slate-100 border-black p-2">To'lovlar grafigi</th>
                                    <th class="border dark:border-slate-100 border-black p-2">To'lov sanasi</th>
                                    <th class="border dark:border-slate-100 border-black p-2">To'lov miqdori</th>
                                </tr>
                            </thead>
                            <tbody>
                                @for ($i = 1; $i <= $schedule; $i++)
                                    <tr>
                                        <th class="border dark:border-slate-100 border-black p-2">
                                            {{ $i }}-to'lov
                                        </th>
                                        <td class="border dark:border-slate-100 border-black py-2 pr-4">
                                            <x-field name="paymentDate{{ $i }}" type='date' />
                                        </td>
                                        <td class="border dark:border-slate-100 border-black py-2">
                                            <x-field name="paymentAmount{{ $i }}" type="number" />
                                        </td>
                                    </tr>
                                @endfor
                            </tbody>
                        </table>
                        <x-field name="paymentDate2" type='date'>2-to'lov sansi:</x-field>
                        <x-field name="paymentAmount2" type="number">2-to'lov miqdori:</x-field>
                        <x-field name="paymentDate3" type='date'>3-to'lov sansi:</x-field>
                        <x-field name="paymentAmount3" type="number">3-to'lov miqdori:</x-field>
                        <x-field name="paymentDate4" type='date'>4-to'lov sansi:</x-field>
                        <x-field name="paymentAmount4" type="number">4-to'lov miqdori:</x-field>
                        <x-field name="paymentDate5" type='date'>5-to'lov sansi:</x-field>
                        <x-field name="paymentAmount5" type="number">5-to'lov miqdori:</x-field>
                        <x-field name="paymentDate6" type='date'>6-to'lov sansi:</x-field>
                        <x-field name="paymentAmount6" type="number">6-to'lov miqdori:</x-field>
                        <x-field name="paymentDate7" type='date'>7-to'lov sansi:</x-field>
                        <x-field name="paymentAmount7" type="number">7-to'lov miqdori:</x-field>
                        <x-field name="paymentDate8" type='date'>8-to'lov sansi:</x-field>
                        <x-field name="paymentAmount8" type="number">8-to'lov miqdori:</x-field>
                        <x-field name="paymentDate9" type='date'>9-to'lov sansi:</x-field>
                        <x-field name="paymentAmount9" type="number">9-to'lov miqdori:</x-field>
                        <x-field name="paymentDate10" type='date'>10-to'lov sansi:</x-field>
                        <x-field name="paymentAmount10" type="number">10-to'lov miqdori:</x-field>
                        <x-field name="paymentDate11" type='date'>11-to'lov sansi:</x-field>
                        <x-field name="paymentAmount11" type="number">11-to'lov miqdori:</x-field>
                        <x-field name="paymentDate12" type='date'>12-to'lov sansi:</x-field>
                        <x-field name="paymentAmount12" type="number">12-to'lov miqdori:</x-field> --}}
                        <div>
                            <button type="submit"
                                class="rounded-md bg-indigo-600 mr-2 px-11 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Yuklab
                                olish</button>
                            <input type="reset" placeholder=""
                                class="rounded-md bg-red-600 px-11 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-red-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-600"
                                value="Tozalash">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
