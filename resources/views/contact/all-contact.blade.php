<x-app-layout>
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold mb-4">Contact List</h1>

        <table class="min-w-full bg-white">
            <thead>
            <tr>
                <th class="py-2 px-4 border-b">ID</th>
                <th class="py-2 px-4 border-b">Name</th>
                <th class="py-2 px-4 border-b">Email</th>
                <th class="py-2 px-4 border-b">Message</th>
                <th class="py-2 px-4 border-b">Created At</th>
                <th class="py-2 px-4 border-b">Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($contacts as $contact)
                <tr>
                    <td class="py-2 px-4 border-b">{{ $contact->id }}</td>
                    <td class="py-2 px-4 border-b">{{ $contact->name }}</td>
                    <td class="py-2 px-4 border-b">{{ $contact->email }}</td>
                    <td class="py-2 px-4 border-b">{{ Str::limit($contact->message, 20) }}</td>
                    <td class="py-2 px-4 border-b">{{ $contact->created_at }}</td>
                    <td class="py-2 px-4 border-b">
                        <a href="{{ route('contacts.show', $contact->id) }}" class="text-blue-500">View</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

</x-app-layout>
