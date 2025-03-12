@extends('layouts.layout')

@section('content')
  <section class="mx-12 mt-5">
    <div class="mb-7">
      <h1 class="text-xl font-bold font-sora">Dashboard</h1>

      <div class="mt-3">
        <h5 class="mb-3 text-sm">Overview</h5>

        <div class="flex items-center justify-center gap-7">
          {{-- To-do tasks --}}
          <div
            class="hover:shadow duration-200 transition-all ease-in-out flex items-center justify-center py-4 bg-gradient-to-br from-[#FFE4BA] to-[#FFF2DA] rounded-2xl w-fit px-7 gap-14">
            <div class="">
              <h2 class="mb-2 text-3xl font-semibold">6</h2>
              <p>To-do tasks</p>
            </div>
            <img src="/images/Hand holding pen-amico 1.svg" alt="Illustration" class="h-[100px]">
          </div>

          {{-- Ongoing tasks --}}
          <div
            class="hover:shadow duration-200 transition-all ease-in-out flex items-center justify-center py-4 pr-4 bg-gradient-to-br from-[#FFE4BA] to-[#FFF2DA] rounded-2xl w-fit pl-7 gap-14">
            <div class="">
              <h2 class="mb-2 text-3xl font-semibold">2</h2>
              <p>Ongoing tasks</p>
            </div>
            <img src="/images/Loading-pana 1.svg" alt="Illustration" class="h-[100px]">
          </div>

          {{-- Completed tasks --}}
          <div
            class="hover:shadow duration-200 transition-all ease-in-out flex items-center justify-center px-4 py-4 bg-gradient-to-br from-[#FFE4BA] to-[#FFF2DA] rounded-2xl w-fit gap-14">
            <div class="">
              <h2 class="mb-2 text-3xl font-semibold">10</h2>
              <p>Tasks Completed</p>
            </div>
            <img src="/images/Checklist-bro 1.svg" alt="Illustration" class="h-[100px]">
          </div>
        </div>
      </div>
    </div>
    <div class="">
      <div class="flex items-center justify-between mb-3">
        <h2 class="text-lg font-semibold">Task List</h2>
        <a href="/tasks">
          <p class="text-sm transition duration-200 ease-in-out hover:text-forest-green">See all →</p>
        </a>
      </div>

      <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-center">
          <thead class="text-sm font-normal text-dark-green bg-yellow">
            <tr>
              <th scope="col" class="px-6 py-3">
                Task Name
              </th>
              <th scope="col" class="px-6 py-3">
                Description
              </th>
              <th scope="col" class="px-6 py-3">
                Priority
              </th>
              <th scope="col" class="px-6 py-3">
                Status
              </th>
              <th scope="col" class="px-6 py-3">
                Due Date
              </th>
              <th scope="col" class="px-6 py-3">
                Action
              </th>
            </tr>
          </thead>
          <tbody class="font-lato-regular">
            <tr class="border-b odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 border-gray">
              <th scope="row" class="px-6 py-4 font-medium whitespace-nowrap">
                Membuat frontend To-Do List
              </th>
              <td class="px-6 py-4">
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
              </td>
              <td class="px-6 py-4">
                <span class="px-3 py-1 text-sm text-white rounded-full bg-red">
                  • High
                </span>
              </td>
              <td class="px-6 py-4">
                <span class="px-3 py-1 rounded-full bg-purple">
                  Ongoing
                </span>
              </td>
              <td class="px-6 py-4">
                10 March 2025
              </td>
              <td class="flex gap-2 px-6 py-4">
                <a href="" class="">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#789F40"
                    class="bi bi-check-square-fill" viewBox="0 0 16 16">
                    <path
                      d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm10.03 4.97a.75.75 0 0 1 .011 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.75.75 0 0 1 1.08-.022z" />
                  </svg>
                </a>
                <a href="#" class="font-medium text-yellow hover:underline">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-pencil-fill" viewBox="0 0 16 16">
                    <path
                      d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.5.5 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11z" />
                  </svg>
                </a>
                <button class="text-red">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-trash-fill" viewBox="0 0 16 16">
                    <path
                      d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5M8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5m3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0" />
                  </svg>
                </button>
              </td>
            </tr>
            <tr class="border-b odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 border-gray">
              <th scope="row" class="px-6 py-4 font-medium whitespace-nowrap">
                Membuat frontend To-Do List
              </th>
              <td class="px-6 py-4">
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
              </td>
              <td class="px-6 py-4">
                <span class="px-3 py-1 text-sm rounded-full text-dark-green bg-yellow">
                  • Medium
                </span>
              </td>
              <td class="px-6 py-4">
                <span class="px-3 py-1 rounded-full bg-purple">
                  Ongoing
                </span>
              </td>
              <td class="px-6 py-4">
                10 March 2025
              </td>
              <td class="flex gap-2 px-6 py-4">
                <a href="" class="">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#789F40"
                    class="bi bi-check-square-fill" viewBox="0 0 16 16">
                    <path
                      d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm10.03 4.97a.75.75 0 0 1 .011 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.75.75 0 0 1 1.08-.022z" />
                  </svg>
                </a>
                <a href="#" class="font-medium text-yellow hover:underline">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-pencil-fill" viewBox="0 0 16 16">
                    <path
                      d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.5.5 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11z" />
                  </svg>
                </a>
                <button class="text-red">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-trash-fill" viewBox="0 0 16 16">
                    <path
                      d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5M8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5m3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0" />
                  </svg>
                </button>
              </td>
            </tr>
            <tr class="border-b odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 border-gray">
              <th scope="row" class="px-6 py-4 font-medium whitespace-nowrap">
                Membuat frontend To-Do List
              </th>
              <td class="px-6 py-4">
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
              </td>
              <td class="px-6 py-4">
                <span class="px-3 py-1 text-sm text-white rounded-full bg-green">
                  • Low
                </span>
              </td>
              <td class="px-6 py-4">
                <span class="px-3 py-1 rounded-full bg-pink">
                  To-do
                </span>
              </td>
              <td class="px-6 py-4">
                10 March 2025
              </td>
              <td class="flex gap-2 px-6 py-4">
                <a href="" class="">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#789F40"
                    class="bi bi-check-square-fill" viewBox="0 0 16 16">
                    <path
                      d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm10.03 4.97a.75.75 0 0 1 .011 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.75.75 0 0 1 1.08-.022z" />
                  </svg>
                </a>
                <a href="#" class="font-medium text-yellow hover:underline">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-pencil-fill" viewBox="0 0 16 16">
                    <path
                      d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.5.5 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11z" />
                  </svg>
                </a>
                <button class="text-red">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-trash-fill" viewBox="0 0 16 16">
                    <path
                      d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5M8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5m3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0" />
                  </svg>
                </button>
              </td>
            </tr>
          </tbody>
        </table>
      </div>

    </div>
  </section>
@endsection
