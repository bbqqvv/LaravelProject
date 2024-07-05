<x-layout>
    <section class="mt-4">
        <div class="flex justify-end">
            <div class="flex justify-between">
                @can('update', $post)
                    <a href="{{ route('posts.edit', $post->id) }}"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Edit</a>
                @endcan
                @can('delete', $post)
                    <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                            class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 focus:outline-none dark:focus:ring-red-800">Delete</button>
                    </form>
                @endcan
            </div>
        </div>
    </section>
    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8 mt-8 bg-slate-50 dark:bg-slate-700 rounded-lg">
        <h1 class="text-3xl font-bold text-center text-indigo-600 dark:text-indigo-400">{{ $post->title }}</h1>
        <div class="flex justify-center space-x-4">
            <span
                class="text-sm text-center text-gray-700 dark:text-gray-400">{{ $post->created_at->diffForHumans() }}</span>
            <span class="text-sm text-center text-green-700 dark:text-gray-400">{{ $post->user->name }}</span>
        </div>
        <main class="mt-4">
            <p class="text-lg text-center text-gray-700 dark:text-gray-400">{{ $post->content }}</p>
        </main>
    </div>
</x-layout>
