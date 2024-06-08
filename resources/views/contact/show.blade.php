<x-app-layout>

    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold mb-4">View Contact</h1>

        <div class="bg-white p-6 rounded-lg shadow-md">
            <div class="mb-4">
                <strong>ID:</strong> {{ $contact->id }}
            </div>
            <div class="mb-4">
                <strong>Name:</strong> {{ $contact->name }}
            </div>
            <div class="mb-4">
                <strong>Email:</strong> {{ $contact->email }}
            </div>
            <div class="mb-4">
                <strong>Message:</strong>
                <p>{{ $contact->message }}</p>
            </div>
            <div class="mb-4">
                <strong>Created At:</strong> {{ $contact->created_at }}
            </div>
            <a href="{{ route('contact.all') }}" class="text-blue-500">Back to List</a>
        </div>
    </div>
</x-app-layout>
