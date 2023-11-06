<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="btn btn-primary cursor-pointer rounded-md border-b-2 border-gray-600 bg-white px-5 py-1 text-sm text-rbalck shadow-md hover:text-serpent"
        onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">
        {{ __('Logout') }}</div>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form>
</aside>
