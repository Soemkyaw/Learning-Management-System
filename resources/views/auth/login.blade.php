<x-layout>
    <section class=" max-w-[600px] mx-auto">
        <h3 class=" text-xl font-semibold my-10">Login</h3>
        <form action="" method="POST">
            @csrf
            <div class=" my-5">
                <label class="block mb-2">Email</label>
                <input type="text" name="email" class=" border border-gray-400 w-full rounded-md py-2 px-3">
                <x-error err="email"></x-error>
            </div>
            <div class=" my-5">
                <label class="block mb-2">Password</label>
                <input type="password" name="password" class=" border border-gray-400 w-full rounded-md py-2 px-3">
                <x-error err="password"></x-error>
            </div>
            <x-error err="credentials"></x-error>
            <div class=" my-8">
                <button class=" bg-red-400 text-white px-4 py-2 rounded hover:bg-red-500">Cancel</button>
                <button class=" bg-blue-400 text-white px-4 py-2 rounded hover:bg-blue-500">Login</button>
            </div>
        </form>
    </section>
</x-layout>
