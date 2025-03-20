<nav class="border-b border-b-gray-200 py-5">
    <div class=" flex justify-between items-center max-w-[1200px] mx-auto">
        <h3 class=" text-xl font-bold">LMS</h3>
        <div class=" flex space-x-5 uppercase">
            <a href="" class="py-2">Courses</a>
            @guest
                <a href="/login" class=" bg-gray-300 py-2 px-3 rounded-md hover:bg-blue-500">Login</a>
                <a href="/register" class=" bg-gray-300 py-2 px-3 rounded-md hover:bg-blue-500">Register</a>
            @endguest
            <a href="" class="py-2">Dashboard</a>
            @auth
                <form action="/logout" method="POST">
                    @csrf
                    <button  class=" bg-gray-300 py-2 px-3 rounded-md uppercase hover:bg-red-500 hover:text-white">Logout</button>
                </form>
            @endauth
        </div>
    </div>
</nav>
