<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('contract') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form class="space-y-6" action="{{ route('contract') }}" method="POST">
                        @csrf
                        @method('POST')
                        <x-field name="person" type="text">Foydalanuvchi:</x-field>
                        <x-field name="passport" type="text" pattern="[A-Z]{2} [0-9]{7}"
                            placeholder="AA 7777777">Passport seriya va raqami:</x-field>
                        <x-field name="passport_date" type="date">Berilgan sanasi:</x-field>
                        <x-field name="givenBy" type="text">Kim tomonidan berilgan:</x-field>
                        <x-textarea name="address">Yashash manzili:</x-textarea>
                        <x-field name="phone" type="tel" pattern="+[0-9]{13}"
                            placeholder='+998999999999'>Telefon:</x-field>
                        <x-field name="product" type="text">Mahsulot nomi:</x-field>
                        <x-field name="amount" type="number">Miqrodi (dona):</x-field>
                        <x-field name="total" type="number">Qiymati:</x-field>
                        <x-textarea name="description">Izoh:</x-textarea>
                        <x-field name="buyer" type='text'>Xaridor:</x-field>
                        <x-field name="buyer_passport" type='text' pattern="[A-Z]{2} [0-9]{7}"
                            placeholder="AA 7777777">Passport seriya va raqami:</x-field>
                        <x-field name="buyer_passport_givenBy" type='text'>Kim tomonidan berilgan:</x-field>
                        <x-field name="buyer_passport_date" type='date'>Berilgan sanasi:</x-field>
                        <x-textarea name="buyer_address">Yashash manzili:</x-textarea>
                        <x-textarea name="buyer_description">Izoh:</x-textarea>
                        <x-field name="paymentDate1" type='date'>1-to'lov</x-field>
                        <x-field name="paymentAmount1" type="number" />
                        <x-field name="paymentDate2" type='date' />
                        <x-field name="paymentAmount2" type="number" />
                        <x-field name="paymentDate3" type='date' />
                        <x-field name="paymentAmount3" type="number" />
                        <x-field name="paymentDate4" type='date' />
                        <x-field name="paymentAmount4" type="number" />
                        <x-field name="paymentDate4" type='date' />
                        <x-field name="paymentAmount4" type="number" />
                        <x-field name="paymentDate5" type='date' />
                        <x-field name="paymentAmount5" type="number" />
                        <x-field name="paymentDate6" type='date' />
                        <x-field name="paymentAmount6" type="number" />
                        <x-field name="paymentDate7" type='date' />
                        <x-field name="paymentAmount7" type="number" />
                        <x-field name="paymentDate8" type='date' />
                        <x-field name="paymentAmount8" type="number" />
                        <x-field name="paymentDate9" type='date' />
                        <x-field name="paymentAmount9" type="number" />
                        <x-field name="paymentDate10" type='date' />
                        <x-field name="paymentAmount10" type="number" />
                        <x-field name="paymentDate11" type='date' />
                        <x-field name="paymentAmount11" type="number" />
                        <x-field name="paymentDate12" type='date' />
                        <x-field name="paymentAmount12" type="number" />
                        <div>
                            <button type="submit"
                                class="rounded-md bg-indigo-600 mr-2 px-11 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Send</button>
                            <input type="reset" placeholder=""
                                class="rounded-md bg-red-600 px-11 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-red-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-600"
                                value="Clear">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
