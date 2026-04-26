<x-app-layout>
    <div class="py-12 bg-[#111827] min-h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-[#1f2937] p-8 rounded-xl shadow-lg border border-gray-700">
                
                <div class="flex justify-between items-center mb-6">
                    <div>
                        <h2 class="text-2xl font-bold text-white">Category List</h2>
                        <p class="text-gray-400 text-sm mt-1">Manage your category</p>
                    </div>
                    <a href="{{ route('category.create') }}" class="bg-[#4f46e5] hover:bg-indigo-700 text-white font-bold py-2 px-6 rounded-lg flex items-center transition">
                        <span class="mr-2 text-xl">+</span> Add Category
                    </a>
                </div>

                <div class="overflow-hidden rounded-lg border border-gray-700">
                    <table class="w-full text-left bg-[#2d3748]">
                        <thead class="bg-[#374151] text-gray-400 text-xs uppercase tracking-wider">
                            <tr>
                                <th class="px-6 py-4 w-16">#</th>
                                <th class="px-6 py-4">NAME</th>
                                <th class="px-6 py-4 text-center">TOTAL PRODUCT</th>
                                <th class="px-6 py-4 text-center">ACTION</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-700 text-gray-300">
                            @forelse ($categories as $index => $cat)
                            <tr class="hover:bg-[#374151] transition">
                                <td class="px-6 py-4">{{ $index + 1 }}</td>
                                <td class="px-6 py-4 uppercase">{{ $cat->name }}</td>
                                <td class="px-6 py-4 text-center">{{ $cat->products_count }}</td>
                                <td class="px-6 py-4 text-center flex justify-center space-x-4">
                                    <button class="text-gray-400 hover:text-white text-lg">📝</button>
                                    <button class="text-gray-400 hover:text-red-500 text-lg">🗑️</button>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="4" class="px-6 py-10 text-center text-gray-500 italic">No categories found.</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>