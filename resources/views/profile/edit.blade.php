<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Profil') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>

                    <!-- Insérez le code pour afficher la photo de profil et le bouton de suppression ici -->
                    @auth
            <!-- Insérez le code pour afficher la photo de profil et le bouton de suppression ici -->
            @if (Auth::user()->profile_photo_path)
                <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                    <div class="max-w-xl">
                        <p class="text-lg font-medium text-gray-900 dark:text-gray-100">{{ __('Photo de profil actuelle') }}</p>
                        <img src="{{ asset('storage/' . Auth::user()->profile_photo_path) }}" alt="Photo de profil" class="mt-2 rounded-lg">
                    </div>
                    <form method="post" action="{{ route('profile.delete-photo') }}">
                        @csrf
                        @method('delete')
                        <button type="submit" class="text-red-600 hover:underline mt-2">{{ __('Supprimer la photo') }}</button>
                    </form>
                </div>
            @else
                <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                    <div class="max-w-xl">
                        <p class="text-lg font-medium text-gray-900 dark:text-gray-100">{{ __('Aucune photo de profil.') }}</p>
                    </div>
                </div>
            @endif
            <!-- Fin du code pour afficher la photo de profil et le bouton de suppression -->
        @endauth

        </div>
    </div>
</x-app-layout>
