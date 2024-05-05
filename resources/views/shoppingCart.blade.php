 @extends('layouts.app')
 @section('content')


        <section class="h-screen bg-gray-100 px-4 text-gray-600 antialiased" >
            <div class="flex h-full flex-col justify-center">

                <div class="mx-auto w-full max-w-2xl rounded-sm border border-gray-200 bg-white shadow-lg">
                    <header class="border-b border-gray-100 px-5 py-4">
                        <div class="font-semibold text-gray-800">Manage Carts</div>
                    </header>

                    <div class="overflow-x-auto p-3">
                        <table class="w-full table-auto">
                            <thead class="bg-gray-50 text-xs font-semibold uppercase text-gray-400">
                                <tr>
                                    <th></th>
                                    <th class="p-2">
                                        <div class="text-left font-semibold">Product Name</div>
                                    </th>
                                    <th class="p-2">
                                        <div class="text-left font-semibold">Quantity</div>
                                    </th>
                                    <th class="p-2">
                                        <div class="text-left font-semibold">Total</div>
                                    </th>
                                    <th class="p-2">
                                        <div class="text-center font-semibold">Action</div>
                                    </th>
                                </tr>
                            </thead>

                            <tbody class="divide-y divide-gray-100 text-sm">

                                @foreach($products as $product)
                                <tr>

                                    <td class="p-2">
                                        <input type="checkbox" class="h-5 w-5"    />
                                    </td>
                                    <td class="p-2">
                                        <div class="font-medium text-gray-800">{{$product->name}}/div>
                                    </td>
                                    <td class="p-2">
                                        <div class="text-left">1</div>
                                    </td>
                                    <td class="p-2">
                                        <div class="text-left font-medium text-green-500">{{$product->price}}</div>
                                    </td>
                                    <td class="p-2">
                                        <div class="flex justify-center">

                                            <form action="{{ route('shoppingCart.destroy', $product->name) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
                                                @csrf
                                                @method('DELETE')
                                              <button  >
                                                <svg class="h-8 w-8 rounded-full p-1 hover:bg-gray-100 hover:text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                                </svg>
                                              </button>
                                            </form>

                                        </div>
                                    </td>

                                </tr>
                                @endforeach


                            </tbody>
                        </table>
                    </div>


                    <div class="flex justify-end space-x-4 border-t border-gray-100 px-5 py-4 text-2xl font-bold">
                        <div>Total</div>
                        <div class="text-blue-600">$<span>1978</span></div>
                    </div>

                    <div class="flex justify-end">

                        <input type="hidden" class="border border-black bg-gray-50" x-model="selected" />
                    </div>
                </div>
            </div>
        </section>

 @endsection
