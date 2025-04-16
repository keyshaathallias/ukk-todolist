@extends('layouts.layout')

@section('content')
  <section class="mx-12 my-5">
    {{-- Breadcrumb Navigation --}}
    <nav class="flex mb-7" aria-label="Breadcrumb">
      <ol class="inline-flex items-center space-x-1">
        <li class="inline-flex items-center">
          <a href="/"
            class="inline-flex items-center text-sm font-normal transition-all duration-200 ease-in-out  text-[#828282] hover:text-green group">
            <svg class="w-3 h-3 transition-all duration-200 me-2 group-hover:text-green  text-[#828282]" aria-hidden="true"
              xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
              <path
                d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z" />
            </svg>
            Dashboard
          </a>
        </li>
        <li aria-current="page">
          <div class="flex items-center">
            <svg class="w-3 h-3 mx-1 text-gray-400 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
              fill="none" viewBox="0 0 6 10">
              <path stroke="#789F40" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
            </svg>
            <span class="text-sm font-medium text-green ms-1">Archives</span>
          </div>
        </li>
      </ol>
    </nav>

    <main>
      <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-center">
          <thead class="text-sm font-normal text-dark-green bg-yellow">
            <tr>
              <th class="px-6 py-3">Task Name</th>
              <th class="px-6 py-3">Description</th>
              <th class="px-6 py-3">Due Date</th>
              <th class="px-6 py-3">Priority</th>
              <th class="px-6 py-3">Status</th>
              <th class="px-6 py-3">Action</th>
            </tr>
          </thead>
          <tbody class="font-lato-regular">
            <tr class="border-b odd:bg-white even:bg-gray-50 border-light-gray">
              <th scope="row" class="px-6 py-4 font-medium whitespace-nowrap">
                Membuat frontend to-do list
              </th>
              <td class="px-2 py-4">
                {{ Str::limit(
                    'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti minima velit, quam eaque natus consequatur.',
                    50,
                    '...',
                ) }}
              </td>
              <td class="px-6 py-4">
                12 March 2025
              </td>
              <td class="px-6 py-4">
                <span class="px-3 py-1 text-sm text-white rounded-full bg-red">
                  • High
                </span>
              </td>
              <td class="px-6 py-4">
                <span class="px-3 py-1 text-sm rounded-full bg-pink text-dark-green">
                  To-do
                </span>
              </td>
              <td class="flex justify-end gap-5 py-4 pe-14">
                <form action="" method="POST">
                  <button class="text-forest-green" type="submit">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                      class="bi bi-arrow-repeat" viewBox="0 0 16 16">
                      <path
                        d="M11.534 7h3.932a.25.25 0 0 1 .192.41l-1.966 2.36a.25.25 0 0 1-.384 0l-1.966-2.36a.25.25 0 0 1 .192-.41m-11 2h3.932a.25.25 0 0 0 .192-.41L2.692 6.23a.25.25 0 0 0-.384 0L.342 8.59A.25.25 0 0 0 .534 9" />
                      <path fill-rule="evenodd"
                        d="M8 3c-1.552 0-2.94.707-3.857 1.818a.5.5 0 1 1-.771-.636A6.002 6.002 0 0 1 13.917 7H12.9A5 5 0 0 0 8 3M3.1 9a5.002 5.002 0 0 0 8.757 2.182.5.5 0 1 1 .771.636A6.002 6.002 0 0 1 2.083 9z" />
                    </svg>
                  </button>
                </form>
                <a href="" class="text-dark-purple">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-eye-fill" viewBox="0 0 16 16">
                    <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0" />
                    <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8m8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7" />
                  </svg>
                </a>
                <a href="" data-confirm-delete="true">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#C72C1EFF"
                    class="bi bi-trash-fill" viewBox="0 0 16 16">
                    <path
                      d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5M8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5m3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0" />
                  </svg>
                </a>
              </td>
            </tr>

            {{-- Empty Table --}}
            <tr>
              <td colspan="6">
                <div class="flex flex-col items-center justify-center text-center">
                  <img src="/images/no-data-animate.svg" alt="No Archive" class="w-[300px]">
                  <p class="mb-5 -mt-3 font-sora">Nothing in the archives... for now! Keep pushing forward.</p>
                </div>
              </td>
            </tr>

          </tbody>
        </table>
      </div>
    </main>
  </section>
@endsection
