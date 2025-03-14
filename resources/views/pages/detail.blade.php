@extends('layouts.layout')

@section('content')
  <section class="mx-12 mt-5">
    {{-- Breadcrumb Navigation --}}
    <nav class="flex" aria-label="Breadcrumb">
      <ol class="inline-flex items-center space-x-1">
        <li class="inline-flex items-center">
          <a href="/"
            class="inline-flex items-center text-sm transition-all duration-200 ease-in-out text-gray hover:text-green group">
            <svg class="w-3 h-3 transition-all duration-200 me-2 group-hover:text-green text-gray" aria-hidden="true"
              xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
              <path
                d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z" />
            </svg>
            Dashboard
          </a>
        </li>
        <li class="inline-flex items-center">
          <a href="/tasks"
            class="inline-flex items-center text-sm transition-all duration-200 ease-in-out text-gray hover:text-green group">
            <svg class="w-3 h-3 mx-1 text-gray-400 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
              fill="none" viewBox="0 0 6 10">
              <path stroke="#789F40" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
            </svg>
            Tasks
          </a>
        </li>
        <li aria-current="page">
          <div class="flex items-center">
            <svg class="w-3 h-3 mx-1 text-gray-400 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
              fill="none" viewBox="0 0 6 10">
              <path stroke="#789F40" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
            </svg>
            <span class="text-sm font-medium text-green ms-1">Task Name</span>
          </div>
        </li>
      </ol>
    </nav>

    <main class="flex justify-center mt-3 w-[580px] mx-auto flex-col bg-white p-5 rounded-lg shadow">
      <div class="flex items-center gap-5 mb-3">
        <a href="{{ route('tasks.index') }}">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
            class="bi bi-chevron-left" viewBox="0 0 16 16">
            <path fill-rule="evenodd"
              d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0" />
          </svg>
        </a>
        <h2 class="text-lg font-bold text-forest-green">Membuat frontend to-do list</h2>
      </div>

      <div class="mb-5 ms-9">
        <h5 class="mb-1 text-sm font-semibold">Description</h5>
        <p class="text-sm font-lato-regular">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi nesciunt
          repellendus animi sapiente nam, dicta velit ut voluptatum perferendis consectetur illo veritatis quam provident
          numquam officia esse ipsam odio magnam?</p>
      </div>
      <div class="mb-5 ms-9">
        <h5 class="mb-1 text-sm font-semibold">Due Date</h5>
        <p class="flex gap-2 text-sm font-lato-regular">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#3E7024"
            class="bi bi-calendar-week-fill" viewBox="0 0 16 16">
            <path
              d="M4 .5a.5.5 0 0 0-1 0V1H2a2 2 0 0 0-2 2v1h16V3a2 2 0 0 0-2-2h-1V.5a.5.5 0 0 0-1 0V1H4zM16 14V5H0v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2M9.5 7h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5m3 0h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5M2 10.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm3.5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5" />
          </svg>
          12 March 2025
        </p>
      </div>
      <div class="mb-5 ms-9">
        <h5 class="mb-1 text-sm font-semibold">Priority</h5>
        <span class="px-3 py-1 text-sm text-white rounded-full bg-red">
          • High
        </span>
      </div>
      <div class="mb-5 ms-9">
        <h5 class="mb-1 text-sm font-semibold">Status</h5>
        <span class="px-3 py-1 text-sm rounded-full bg-pink text-dark-green">
          To-do
        </span>
      </div>
    </main>
  </section>
@endsection
