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
                  <button type="submit">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#789F40"
                      class="bi bi-check-square-fill" viewBox="0 0 16 16">
                      <path
                        d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm10.03 4.97a.75.75 0 0 1 .011 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.75.75 0 0 1 1.08-.022z" />
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
                <a href="" class="font-medium text-yellow">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-pencil-fill" viewBox="0 0 16 16">
                    <path
                      d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.5.5 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11z" />
                  </svg>
                </a>
                <form action="" method="POST">
                  <button class="text-red" type="submit" data-confirm-delete="true">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                      class="bi bi-trash-fill" viewBox="0 0 16 16">
                      <path
                        d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5M8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5m3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0" />
                    </svg>
                  </button>
                </form>
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
