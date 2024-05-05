<x-app-layout>
    <!--<h1 class="mb-0">Add Product</h1><-->
    <hr />

    <form action="{{ route('myOrder.store') }}" method="POST">
        @csrf
        <div class="mx-auto max-w-[1920px] px-4 md:px-8 2xl:px-16">
            <div class="md:w-full lg:w-3/5 2xl:w-4/6 flex h-full ltr:md:ml-7 rtl:md:mr-7 flex-col ltr:lg:pl-7 rtl:lg:pr-7">
              <div class="flex pb-7 md:pb-9 mt-7 md:-mt-1.5">
                <h4 class="text-2xl 2xl:text-3xl font-bold text-heading mt-7">
                  Add Product
                </h4>
              </div>
              <form
                class="w-full mx-auto flex flex-col justify-center "
                noValidate
              >
                <div class="flex flex-col space-y-5">
                  <div class="flex flex-col md:flex-row space-y-5 md:space-y-0 gap-4">
                    <div class="w-full md:w-1/2 ">
                      <label
                        htmlFor="name"
                        class="block text-gray-600 font-semibold text-sm leading-none mb-3 cursor-pointer"
                      >
                        Title
                      </label>
                      <input
                        id="name"
                        name="title"
                        type="text"
                        placeholder="Enter Your Title"
                        class="py-2 px-4 md:px-5 w-full appearance-none  border text-input text-xs lg:text-sm font-body placeholder-body min-h-12 transition duration-200 ease-in-out bg-white border-gray-300 focus:outline-none focus:border-heading h-11 md:h-12"
                        autoComplete="off"
                        spellCheck="false"
                        aria-invalid="false"
                      />
                    </div>

                  </div>

                  <div class="relative mb-4">
                    <label
                      htmlFor="message"
                      class="block text-gray-600 font-semibold text-sm leading-none mb-3"
                    >
                      Description
                    </label>
                    <textarea
                      id="message"
                      name="description"
                      class="px-4 py-3 flex items-center w-full appearance-none transition duration-300 ease-in-out text-heading text-sm  focus:ring-0 bg-white border border-gray-300 focus:shadow focus:outline-none focus:border-heading placeholder-body"
                      autoComplete="off"
                      spellCheck="false"
                      rows={4}
                      placeholder="Write your description here"
                    ></textarea>
                  </div>
                  <div class="relative">
                    <button
                      data-variant="flat"
                      class="text-[13px] md:text-sm leading-4 inline-flex items-center cursor-pointer transition ease-in-out duration-300 font-semibold font-body text-center justify-center border-0 border-transparent placeholder-white focus-visible:outline-none focus:outline-none  bg-black text-white px-5 md:px-6 lg:px-8 py-4 md:py-3.5 lg:py-4 hover:text-white hover:bg-gray-600 hover:shadow-cart h-12 lg:h-14 mt-1 text-sm lg:text-base w-full sm:w-auto"
                      type="submit"
                    >
                      Add
                    </button>
                  </div>
                </div>
              </form>
            </div>
        </div>

    </form>
</x-app-layout>
