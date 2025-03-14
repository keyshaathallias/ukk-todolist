<header class="shadow bg-yellow">
  <nav class="flex items-center justify-between px-12 py-3">
    <a href="/">
      <img src="/images/Lumi Green.svg" alt="To-do List" class="h-[45px]">
    </a>
    <div class="flex gap-12 text-sm">
      <a href="/"
        class="hover:text-forest-green duration-200 transition ease-in-out {{ Request::is('/') ? 'font-bold border-b-2 text-forest-green hover:text-dark-green' : 'font-normal' }}">Dashboard</a>
      <a href="/tasks"
        class="hover:text-forest-green duration-200 transition ease-in-out {{ Request::is('tasks', 'create-task', 'edit-task') ? 'font-bold border-b-2 text-forest-green  hover:text-dark-green' : 'font-normal' }}">Tasks</a>
      <a href="/archives"
        class="hover:text-forest-green duration-200 transition ease-in-out {{ Request::is('archives') ? 'font-bold border-b-2 text-forest-green  hover:text-dark-green' : 'font-normal' }}">Archives</a>
    </div>
  </nav>
</header>
