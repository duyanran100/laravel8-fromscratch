@auth
    <form method="POST" action="/posts/{{ $post->slug }}/comments">
        <x-pannel>
            @csrf
            <header class="flex items-center">
                <img src="https://i.pravatar.cc/60?u={{ auth()->id() }}" alt="" width="40" height="40" class="rounded-full">
                <h2 class="ml-4">Want to participate?</h2>
            </header>
            <div class="mt-6">
                                    <textarea name="body"
                                              class="w-full text-sm focus:outline-none focus:ring" cols="30" rows="10"
                                              placeholder="post here"
                                              required></textarea>
                @error('body')
                <span class="text-xs text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <div class="flex justify-end mt-6 pt-6 border-t border-gray-200 pt-6">
                <button type="submit"
                        class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-400"
                >
                    Submit
                </button>
            </div>
    </form>
    </x-pannel>
@else
    <p class="font-semibold">
        <a href="/register" class="hover:underline">Register</a>
        or
        <a href="/login" class="hover:underline">Login</a>
        to leave a comment
    </p>
@endauth
