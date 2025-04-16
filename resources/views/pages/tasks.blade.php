@extends('layouts.layout')

@section('content')
  <section class="mx-12 my-5">
    {{-- Breadcrumb Navigation --}}
    <nav class="flex" aria-label="Breadcrumb">
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
            <span class="text-sm font-medium text-green ms-1">Tasks</span>
          </div>
        </li>
      </ol>
    </nav>

    <!-- Motivational Banner -->
    <div class="relative">
      <div
        class="flex items-center mx-60 my-2 px-10 py-4 bg-gradient-to-br from-[#FFE4BA] to-[#FFF2DA] rounded-2xl shadow-md relative">
        <img src="/images/doodle.svg" class="absolute left-0 w-full h-full -translate-y-1/2 top-1/2 opacity-55">
        <img src="/images/webinar-animate.svg" alt="Illustration" class="w-[230px] z-10 mr-7">
        <div class="z-10 flex flex-col space-y-1">
          <h2 class="text-xl font-semibold text-forest-green">
            Every small step brings you closer to your goals.
          </h2>
          <h3 class="text-gray-600">
            Stay focused, stay consistent, and make today productive!
          </h3>
        </div>
      </div>
    </div>

    <div class="flex justify-end">
      <a href="/create-task"
        class="flex items-center justify-center gap-2 px-4 py-1 mb-3 text-white rounded-full w-fit bg-green">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg"
          viewBox="0 0 16 16">
          <path fill-rule="evenodd"
            d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2" />
        </svg>
        <p>New Task</p>
      </a>
    </div>

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
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#1B320F"
                      class="bi bi-check-circle" viewBox="0 0 16 16">
                      <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
                      <path
                        d="m10.97 4.97-.02.022-3.473 4.425-2.093-2.094a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05" />
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
                  <img src="/images/coffee-break-animate.svg" alt="No Task" class="w-[300px]">
                  <p class="mb-5 -mt-3 font-sora">You're all caught up! Relax and take a break.</p>
                </div>
              </td>
            </tr>

          </tbody>
        </table>
      </div>
    </main>
  </section>
@endsection
