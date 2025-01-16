<form action="{{ route('transaction.store') }}" method="POST">
    @csrf
    <div class="border rounded-lg overflow-hidden">
        <div class="bg-white border-b px-4 py-3 text-gray-700 font-medium flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-file-invoice mr-1" width="24"
                height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <path d="M14 3v4a1 1 0 0 0 1 1h4"></path>
                <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z">
                </path>
                <line x1="9" y1="7" x2="10" y2="7"></line>
                <line x1="9" y1="13" x2="15" y2="13"></line>
                <line x1="13" y1="17" x2="15" y2="17"></line>
            </svg>
            Konfirmasi Pesanan
        </div>
        <div class="p-4 bg-white">
            <div class="flex flex-col gap-4">
                <div class="flex flex-col gap-y-2">
                    <label class="text-base text-gray-700">
                        Nama Lengkap
                    </label>
                    <input type="text"
                        class="rounded-md border p-2 text-sm text-gray-700 focus:outline-none bg-gray-100 cursor-not-allowed"
                        value="{{ Auth::user()->name }}" name="name" readonly />
                </div>
                <div class="flex flex-col gap-y-2">
                    <label class="text-base text-gray-700">
                        Email
                    </label>
                    <input type="email"
                        class="rounded-lg border p-2 text-sm text-gray-700 focus:outline-none bg-gray-100 cursor-not-allowed"
                        value="{{ Auth::user()->email }}" name="email" readonly />
                </div>
            </div>
        </div>
    </div>
    <div class="my-3">
        <button class="text-white bg-sky-900 hover:bg-sky-800 rounded-lg w-full p-2" type="submit">
            Order Sekarang
        </button>
    </div>
</form>
