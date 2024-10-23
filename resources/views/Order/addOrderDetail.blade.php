<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('ระบบจัดการสินค้าคงคลัง') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-full mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="flex justify-start">
                        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                            การบันทึก/แก้ไข การสั่งซื้อสินค้า
                        </h2>
                    </div>
                    <div class="mt-8">
                        <div class="ml-12">
                            <div class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                                สถานะ เพิ่มรายการส่วน Hedader การรับคำสั่งซื้อสินค้า
                            </div>
                            <div class="mt-6">


                                <div class="mb-6">
                                    เพิ่มข้อมูล Header
                                </div>
                                <div class="flex flex-row mb-6">
                                    <div class="mr-6">
                                        <label for="cus_id"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">รหัสลูกค้า
                                        </label>
                                        <input type="text" id="cus_id"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                            placeholder="รหัสลูกค้า" required />
                                    </div>
                                    <div class="mr-6">
                                        <label for="cus_name"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">ชื่อลูกค้า</label>
                                        <input type="text" id="last_name"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                            placeholder="ชื่อลูกค้า" required />
                                    </div>
                                    <div class="mr-6">
                                        <label for="cus_name"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">วันที่สั่งสินค้า
                                        </label>
                                        <input type="text" id="last_name"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                            placeholder="Order No" required />
                                    </div>
                                    <div class="mr-6">
                                        <label for="order_id"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Order
                                            No</label>
                                        <input type="text" id="last_name"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                            placeholder="Order No" required />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="h-px my-12 bg-gray-200 border-0 dark:bg-gray-700">

                    
                        <div class="flex flex-row mb-6 ml-12">
                            <div class="mr-6">
                                <label for="cus_name"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">ชื่อลูกค้า</label>
                                <input type="text" id="last_name"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="ชื่อลูกค้า" required />
                            </div>
                            <div class="mr-6">
                                <label for="cus_name"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">ชื่อลูกค้า</label>
                                <input type="text" id="last_name"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="ชื่อลูกค้า" required />
                            </div>
                            <div class="mr-6">
                                <label for="cus_name"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">ชื่อลูกค้า</label>
                                <input type="text" id="last_name"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="ชื่อลูกค้า" required />
                            </div>
                            <div class="mr-6">
                                <label for="cus_name"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">ชื่อลูกค้า</label>
                                <input type="text" id="last_name"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="ชื่อลูกค้า" required />
                            </div>

                        </div>
                        <button type="submit"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">บันทึกและเพิ่มรายการสินค้าต่อ</button>
                    </div>

                    <div class="flex justify-end mt-8">
                        <div class="inline-flex rounded-md" role="group">
                            <button type="button"
                                class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">เพิ่ม</button>
                            <a href="{{ url('dashboard') }} " type="button"
                                class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">ออก</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
