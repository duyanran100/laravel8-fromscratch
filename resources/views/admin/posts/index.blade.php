<x-layout>
    <x-setting heading="Manage Posts">

        <div class="overflow-x-auto relative">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <tbody class="bg-white divide-y divide-gray-500">
                @foreach ($posts as $post)
                    <tr class="bg-white dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <a href="/posts/{{ $post->slug }}">
                                {{ $post->title }}
                            </a>
                        </th>
                        <td class="py-4 px-6 whitespace-nowrap">
                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                            published
                        </span>
                        </td>
                        <td class="py-4 px-6 whitespace-nowrap text-right text-sm font-medium">
                            <a href="/admin/posts/{{ $post->id }}/edit" class="text-blue-500 hover:text-blue-600">edit</a>
                        </td>
                        <td class="py-4 px-6 whitespace-nowrap text-right text-sm font-medium">
                            <form method="POST" action="/admin/posts/{{$post->id}}">
                                @csrf
                                @method('DELETE')
                                <button>Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </x-setting>
</x-layout>
