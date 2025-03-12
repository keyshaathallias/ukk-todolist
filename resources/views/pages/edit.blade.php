@extends('layouts.layout')

@section('content')
  <section class="mx-12 mt-5 mb-10">
    {{-- breadcrumb --}}
    <nav class="flex" aria-label="Breadcrumb">
      <ol class="inline-flex items-center space-x-1">
        <li class="inline-flex items-center">
          <a href="/"
            class="inline-flex items-center text-sm font-medium transition-all duration-200 ease-in-out text-green hover:text-dark-green group">
            <svg class="w-3 h-3 transition-all duration-200 me-2 group-hover:text-dark-green text-green" aria-hidden="true"
              xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
              <path
                d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z" />
            </svg>
            Dashboard
          </a>
        </li>
        <li class="inline-flex items-center">
          <a href="/tasks"
            class="inline-flex items-center text-sm font-medium transition-all duration-200 ease-in-out text-green hover:text-dark-green group">
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
            <span class="text-sm font-medium text-dark-green ms-1">Edit Task</span>
          </div>
        </li>
      </ol>
    </nav>

    <main class="flex flex-col justify-center w-[580px] py-5 px-7 mx-auto mt-3 bg-white rounded-lg shadow">
      <form action="" method="POST" class="">
        <h2 class="mb-3 text-lg font-semibold">Edit Task</h2>

        <div class="flex flex-col gap-2 mb-4">
          <label class="text-sm">Task Name</label>
          <input type="text" id="name" name="name" placeholder=""
            class="px-4 py-2 text-sm border rounded border-dark-green" value="">
        </div>
        <div class="flex flex-col gap-2 mb-4">
          <label class="text-sm">Description</label>
          <textarea name="description" id="description" cols="30" rows="3"
            class="px-4 py-2 text-sm border rounded border-dark-green"></textarea>
        </div>
        <div class="flex flex-col gap-2 mb-4">
          <label class="text-sm">Priority</label>
          <select class="px-4 py-2 text-sm border rounded border-dark-green" id="priority"
            aria-label="Default select example" name="priority">
            <option value="1">High</option>
            <option value="2">Medium</option>
            <option value="3">Low</option>
          </select>
        </div>
        <div class="flex flex-col gap-2 mb-4">
          <label class="text-sm">Status</label>
          <select class="px-4 py-2 text-sm border rounded border-dark-green" id="status"
            aria-label="Default select example" name="status">
            <option value="todo">To-do</option>
            <option value="ongoing">Ongoing</option>
            <option value="completed">Completed</option>
          </select>
        </div>
        <div class="flex flex-col gap-2 mb-4">
          <label class="text-sm">Due Date</label>
          <input type="date" id="due_date" name="due_date" placeholder=""
            class="px-4 py-2 text-sm border rounded border-dark-green" value="">
        </div>
        <div class="flex gap-5 mt-7">
          <a href="" class="w-full py-2 text-center rounded-full bg-gray">Cancel</a>
          <button type="submit" class="w-full py-2 text-center text-white rounded-full bg-green">Save</button>
        </div>
      </form>
    </main>
  </section>
@endsection
