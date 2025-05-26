@extends('layouts.app')

@section('title', 'Users')

@section('content')
<main class="mx-5">
    <div class="card m-5 p-5">
        <h3 class="font-medium text-2xl text-center lg:text-start">All Users</h3>
    </div>

    <div class="overflow-x-auto">
        <table class="min-w-full bg-white border border-gray-200 rounded-lg shadow-lg">
            <thead class="bg-gray-100">
                <tr>
                    <th class="px-6 py-3 text-left text-sm font-semibold text-gray-600 uppercase">First Name</th>
                    <th class="px-6 py-3 text-left text-sm font-semibold text-gray-600 uppercase">Last Name</th>
                    <th class="px-6 py-3 text-left text-sm font-semibold text-gray-600 uppercase">Username</th>
                    <th class="px-6 py-3 text-left text-sm font-semibold text-gray-600 uppercase">Email</th>
                    <th class="px-6 py-3 text-left text-sm font-semibold text-gray-600 uppercase">Gender</th>
                    <th class="px-6 py-3 text-left text-sm font-semibold text-gray-600 uppercase">Role</th>
                    <th class="px-6 py-3 text-left text-sm font-semibold text-gray-600 uppercase">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($users as $user)
                    <tr class="border-b border-gray-200 hover:bg-gray-50">
                        <td class="px-6 py-4 text-gray-800">{{ $user->firstname }}</td>
                        <td class="px-6 py-4 text-gray-800">{{ $user->lastname }}</td>
                        <td class="px-6 py-4 text-gray-800">{{ $user->username ?? 'N/A' }}</td>
                        <td class="px-6 py-4 text-gray-800">{{ $user->email }}</td>
                        <td class="px-6 py-4 text-gray-800">{{ ucfirst($user->gender) }}</td>
                        <td class="px-6 py-4 text-gray-800">{{ $user->role ? ucfirst($user->role->role) : 'None' }}</td>
                        <td class="px-6 py-4">
                            <div class="flex gap-2">
                                <button 
                                    onclick="confirmAction('delete', {{ $user->id }})" 
                                    class="btn bg-red-500 text-white px-3 py-1 rounded-lg hover:bg-red-600"
                                    title="Delete User">
                                    Delete
                                </button>
                                <button 
                                    onclick="confirmAction('make-admin', {{ $user->id }})" 
                                    class="btn bg-blue-500 text-white px-3 py-1 rounded-lg hover:bg-blue-600 {{ $user->role && $user->role->role === 'admin' ? 'opacity-50 cursor-not-allowed' : '' }}"
                                    {{ $user->role && $user->role->role === 'admin' ? 'disabled' : '' }}
                                    title="Make Admin">
                                    Make Admin
                                </button>
                                <button 
                                    onclick="confirmAction('make-supervisor', {{ $user->id }})" 
                                    class="btn bg-green-500 text-white px-3 py-1 rounded-lg hover:bg-green-600 {{ $user->role && $user->role->role === 'supervisor' ? 'opacity-50 cursor-not-allowed' : '' }}"
                                    {{ $user->role && $user->role->role === 'supervisor' ? 'disabled' : '' }}
                                    title="Make Supervisor">
                                    Make Supervisor
                                </button>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" class="px-6 py-4 text-center text-gray-500">No users found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</main>
@endsection

@section('scripts')
<script>
    function confirmAction(action, userId) {
        let message;
        let url;

       switch (action) {
    case 'delete':
        message = 'Are you sure you want to delete this user? This action cannot be undone.';
        url = '{{ route("admin.user.delete", ":id") }}'.replace(':id', userId);
        break;
    case 'make-admin':
        message = 'Are you sure you want to make this user an Admin?';
        url = '{{ route("admin.make-admin", ":id") }}'.replace(':id', userId);
        break;
    case 'make-supervisor':
        message = 'Are you sure you want to make this user a Supervisor?';
        url = '{{ route("admin.make-supervisor", ":id") }}'.replace(':id', userId);
        break;
    default:
        return;
}


        if (confirm(message)) {
            fetch(url, {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    'Content-Type': 'application/json',
                },
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    alert(data.message);
                    location.reload(); // Reload to reflect changes
                } else {
                    alert('Error: ' + data.message);
                }
            })
            .catch(error => {
                alert('An error occurred: ' + error.message);
            });
        }
    }
</script>
@endsection