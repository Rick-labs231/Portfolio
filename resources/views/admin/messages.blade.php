@extends('layouts.app')

@section('title', 'Admin - Messages')

@section('content')
    <div class="container mx-auto px-6 py-20">
        <div class="flex justify-between items-center mb-8">
            <h1 class="text-4xl font-bold text-darkgray">Messages Dashboard</h1>
            <form action="{{ route('admin.logout') }}" method="POST">
                @csrf
                <button type="submit" class="px-4 py-2 bg-red-500 text-white rounded-lg hover:bg-red-600 transition">
                    Logout
                </button>
            </form>
        </div>

        @if(session('success'))
            <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-6">
                {{ session('success') }}
            </div>
        @endif

        <div class="overflow-x-auto bg-white rounded-lg shadow-lg">
            @if($messages->count() > 0)
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-linear-to-r from-electric to-neonpurple text-white">
                        <tr>
                            <th class="px-6 py-3 text-left text-sm font-semibold">Name</th>
                            <th class="px-6 py-3 text-left text-sm font-semibold">Email</th>
                            <th class="px-6 py-3 text-left text-sm font-semibold">Phone</th>
                            <th class="px-6 py-3 text-left text-sm font-semibold">Service</th>
                            <th class="px-6 py-3 text-left text-sm font-semibold">Message</th>
                            <th class="px-6 py-3 text-left text-sm font-semibold">Received</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        @foreach($messages as $msg)
                            <tr class="hover:bg-gray-50 transition">
                                <td class="px-6 py-4 text-sm font-medium text-darkgray">{{ $msg->name }}</td>
                                <td class="px-6 py-4 text-sm text-gray-700">
                                    <a href="mailto:{{ $msg->email }}" class="text-electric hover:underline">
                                        {{ $msg->email }}
                                    </a>
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-700">
                                    @if($msg->phone)
                                        <a href="https://wa.me/{{ preg_replace('/\D/', '', $msg->phone) }}" target="_blank"
                                            class="text-green-600 hover:underline">
                                            {{ $msg->phone }}
                                        </a>
                                    @else
                                        <span class="text-gray-400">—</span>
                                    @endif
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-700">{{ $msg->service ?? '—' }}</td>
                                <td class="px-6 py-4 text-sm text-gray-700 max-w-xs">
                                    <div class="truncate" title="{{ $msg->message }}">
                                        {{ Str::limit($msg->message, 50) }}
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-600">
                                    {{ $msg->created_at->format('M d, Y H:i') }}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                <div class="px-6 py-4 border-t">
                    {{ $messages->links() }}
                </div>
            @else
                <div class="p-12 text-center">
                    <p class="text-gray-500 text-lg">No messages yet</p>
                </div>
            @endif
        </div>
    </div>
@endsection
