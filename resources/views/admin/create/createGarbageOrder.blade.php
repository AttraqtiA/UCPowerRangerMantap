@extends('layouts.admin.frame_admin')

@section('content_page')
    <!-- Start block -->
    <section style="background-color:#047857;" class="p-2 sm:p-4 antialiased h-full">
        <!-- component -->
        <div class="min-h-screen p-6 flex items-center justify-center">
            <div class="container max-w-screen-lg mx-auto">
                <div>

                    <div class="bg-white rounded shadow-lg p-4 px-4 md:p-8 mb-6">
                        <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3">
                            <div class="text-gray-600">
                                <p class="font-medium text-lg">Orderan Bank Sampah</p>
                                <p>Harap isi semuanya.</p>
                            </div>

                            <div class="lg:col-span-2">
                                <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-5">
                                    <div class="md:col-span-5">
                                        <label for="date">
                                            Tanggal
                                        </label>
                                        <input
                                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                            id="date" type="date" placeholder="Select a date">
                                    </div>
                                    <div class="md:col-span-5">
                                        <label for="full_name">Nama Pengunjung</label>
                                        <input type="text" name="full_name" id="full_name"
                                            class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" />
                                    </div>

                                    <div class="md:col-span-5">
                                        <label for="full_name">Email Pengunjung</label>
                                        <input type="text" name="full_name" id="full_name"
                                            class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" />
                                    </div>

                                    <div class="md:col-span-5">
                                        <label for="full_name">Nama Sampah</label>
                                        <select name="full_name" id="full_name"
                                            class="h-10 border mt-1 rounded px-4 w-full bg-gray-50">
                                            <option value="Mr.">Mr.</option>
                                            <option value="Mrs.">Mrs.</option>
                                            <option value="Miss">Miss</option>
                                            <option value="Ms.">Ms.</option>
                                        </select>

                                    </div>

                                    <div class="md:col-span-5">
                                        <label for="full_name">Kuantitas Total</label>
                                        <input type="number" name="total_quantity"
                                            class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" />
                                    </div>

                                    <div class="md:col-span-5">
                                        <label for="full_name">Poin Total</label>
                                        <input type="number" name="total_quantity"
                                            class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" />
                                    </div>

                                    <div class="text-right">
                                        <button type="button"
                                            class="focus:outline-none w-full text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:focus:ring-yellow-900">Tambah
                                            Lagi</button>
                                        <button type="button"
                                            class="text-white w-full bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Submit</button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>
    <!-- End block -->
@endsection
