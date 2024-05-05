<x-app-layout>
    <section class="max-h-90 overflow-y-auto bg-gray-100 px-4 text-gray-600 antialiased mt-10">
        <div class="flex h-full flex-col justify-center">
            <!-- Table -->
            <div class="mx-auto w-full max-w-2xl rounded-sm border border-gray-200 bg-white shadow-lg">
                <header class="border-b border-gray-100 px-5 py-4">
                   <div class="font-semibold text-gray-800">
                        <a href="{{ route('myOrder.create')}}" type="button" class="bg-red-500 font-bold py-2 px-4 rounded">Add Product</a>
                    </div>

                </header>

                <div class="overflow-x-auto p-3">
                    <table class="w-full table-auto">
                        <thead class="bg-gray-50 text-xs font-semibold uppercase text-gray-400">
                            <tr>
                                <th class="p-2">
                                    <div class="text-left font-semibold">Title</div>
                                </th>
                                <th class="p-2">
                                    <div class="text-left font-semibold">Description</div>
                                </th>
                                <th class="p-2">
                                    <div class="text-left font-semibold">Delete</div>
                                </th>
                                <th class="p-2">
                                    <div class="text-left font-semibold">Edit</div>
                                </th>
                                <th class="p-2">
                                    <div class="text-left font-semibold">Detail</div>
                                </th>

                            </tr>
                        </thead>

                        <tbody class="divide-y divide-gray-100 text-sm">
                            <!-- record 1 -->
                            @foreach( $orders as $order)
                            <tr>
                                <td class="p-2">
                                    <div class="font-medium text-gray-800">{{$order->title}}</div>
                                </td>
                                <td class="p-2">
                                    <div class="text-left">{{$order->description}}</div>
                                </td>

                                <td class="p-2">
                                    <div class="flex justify-center">
                                        <form action="{{ route('myOrder.destroy', $order->id) }}"  method="Post" enctype="multipart/form-data"   onsubmit="return confirm('Delete?')">
                                          @csrf
                                          @method('DELETE')
                                        <button>
                                            <svg class="h-8 w-8 rounded-full p-1 hover:bg-gray-100 hover:text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                            </svg>
                                        </button>
                                        </form>
                                    </div>
                                </td>
                                <td class="p-2">
                                    <a href="{{ route('myOrder.edit', $order->id)}}" class="bg-blue-500 text-white font-bold py-2 px-4 rounded" type="button" class="btn btn-warning">Edit</a>
                                </td>
                                <td class="p-2">
                                    <a href="{{ route('myOrder.show', $order->id)}}" class="bg-orange-500 text-white font-bold py-2 px-4 rounded" type="button" class="btn btn-warning">Detail</a>
                                </td>
                            </tr>
                            @endforeach


                        </tbody>
                    </table>
                </div>


            </div>
        </div>
    </section>


</x-app-layout>
