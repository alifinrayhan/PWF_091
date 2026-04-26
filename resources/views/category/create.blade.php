<x-app-layout>
    <div class="py-12 bg-[#111827] min-h-screen flex items-center">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8 w-full">
            <div class="bg-[#1f2937] p-8 rounded-xl shadow-lg border border-gray-700">
                
                <div class="mb-6 flex items-center text-white">
                    <a href="{{ route('category.index') }}" class="mr-3 hover:text-gray-400 text-xl font-bold"> < </a>
                    <h2 class="text-xl font-bold">Add Category</h2>
                </div>

                <form action="{{ route('category.store') }}" method="POST">
                    @csrf
                    <div class="mb-8">
                        <label class="block text-gray-400 text-sm font-medium mb-2">Category</label>
                        <input type="text" name="name" placeholder="Electronic" class="w-full bg-[#111827] border-gray-700 text-gray-300 rounded-lg focus:ring-indigo-500 focus:border-indigo-500 p-3 shadow-inner" required>
                    </div>

                    <div class="flex justify-end space-x-4">
                        <a href="{{ route('category.index') }}" class="bg-gray-700 text-gray-300 px-6 py-2 rounded-lg hover:bg-gray-600 transition">Cancel</a>
                        <button type="submit" class="bg-[#4f46e5] text-white px-8 py-2 rounded-lg hover:bg-indigo-700 shadow-md font-bold transition">Save Category</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>