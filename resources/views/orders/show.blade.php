<x-app-layout>
    <div class="mx-auto max-w-[1920px] px-4 md:px-8 2xl:px-16">
        <div class="md:w-full lg:w-3/5 2xl:w-4/6 flex h-full ltr:md:ml-7 rtl:md:mr-7 flex-col ltr:lg:pl-7 rtl:lg:pr-7">
          <div class="flex pb-7 md:pb-9 mt-7 md:-mt-1.5">
            <h4 class="text-2xl 2xl:text-3xl font-bold text-heading mt-7">
              Detail Product
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
                    value="{{$order->title }}"
                    readonly
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
                  readonly
                >{{$order->description }}</textarea>
              </div>
              <div class="flex flex-col md:flex-row space-y-5 md:space-y-0 gap-4">
                <div class="w-full md:w-1/2 ">
                  <label
                    htmlFor="name"
                    class="block text-gray-600 font-semibold text-sm leading-none mb-3 cursor-pointer"
                  >
                  Created_at
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
                    value="{{$order->created_at}}"
                    readonly
                  />
                </div>
              </div>
              <div class="flex flex-col md:flex-row space-y-5 md:space-y-0 gap-4">
                <div class="w-full md:w-1/2 ">
                  <label
                    htmlFor="name"
                    class="block text-gray-600 font-semibold text-sm leading-none mb-3 cursor-pointer"
                  >
                  Updated_at
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
                    value="{{$order->updated_at}}"
                    readonly
                  />
                </div>
              </div>

            </div>
          </form>
        </div>
    </div>
</x-app-layout>
