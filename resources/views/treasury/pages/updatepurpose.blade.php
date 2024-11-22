@extends('treasury.treasuryindex')

@section('content')

<div class="flex items-center justify-center h-screen bg-gray-100 pr-5">
    <form action="{{ route('update_purpose', $product->id ) }}" method="POST" class="w-full max-w-md bg-white p-6 rounded-lg shadow-md">
        @csrf
        @method('PUT')
        <h1 class="text-2xl font-bold text-center mb-6">Edit Purpose</h1>

        <div class="space-y-4">
            <!-- Name Field -->
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                <input type="text" id="name" name="name" value="{{ $product->name }}"
                       class="mt-1 block w-full px-3 py-2 bg-gray-50 border border-gray-300 text-gray-900 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500" 
                       placeholder="Enter name" required>
            </div>

            <!-- Price Field -->
            <div>
                <label for="price" class="block text-sm font-medium text-gray-700">Price</label>
                <input type="number" id="price" name="price"  value="{{ $product->price }}"
                       class="mt-1 block w-full px-3 py-2 bg-gray-50 border border-gray-300 text-gray-900 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500" 
                       placeholder="Enter price" required>
            </div>
            </div>
            <label for="type" class="block text-sm font-medium text-gray-700">Type</label>
                <select name="type" id="type"
                class="mt-1 block w-full px-3 py-2 bg-gray-50 border border-gray-300 text-gray-900 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                placeholder="Select type" required >
                        @if ($product->type=='Tuition')
                        <option value="Tuition">Tuition</option>
                        <option value="Miscellaneous">Miscellaneous</option>
                        <option value="Other_Charges">Other Charges</option>
                </select>

        <!-- Submit Button -->
        <div class="mt-6 flex justify-center">
            <button type="submit" 
                    class="w-1/2 bg-green-500 text-white font-bold py-2 px-4 rounded-lg shadow-md hover:bg-green-600 focus:ring-2 focus:ring-green-400 focus:outline-none">
                Update Purpose
            </button>
        </div>
    </form>
</div>

@endsection
