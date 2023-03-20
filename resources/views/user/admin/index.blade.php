<x-app-layout>
    <x-slot name="header">
        <div class="w-full inline-flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('user/view/admin/index.header.name') }}
            </h2>
            <x-primary-button>
                {{ __('user/view/admin/index.header.create_user_button') }}
            </x-primary-button>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div>

                    </div>
                    <div>
                        <table class="w-full table-auto pb-60">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th><div class="sr-only"></div></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $user)
                                    <tr>
                                        <td>{{ $user->id }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td class="text-right">
                                            <x-dropdown>
                                                <x-slot:trigger>
                                                    <x-secondary-button>
                                                        Options
                                                    </x-secondary-button>
                                                </x-slot:trigger>
                                                <x-slot:content href="{{ route('users:index') }}">
                                                    <x-dropdown-link>
                                                        Show
                                                    </x-dropdown-link>
                                                </x-slot:content>
                                            </x-dropdown>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
