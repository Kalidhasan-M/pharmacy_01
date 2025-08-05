<x-filament-panels::page>
    <div class="grid grid-cols-1 gap-4 md:grid-cols-2 lg:grid-cols-3">
        <x-filament::section>
            <div class="flex items-center justify-between">
                <div>
                    <h3 class="text-lg font-medium text-gray-900 dark:text-white">
                        Welcome, {{ auth()->user()->name }}!
                    </h3>
                    <p class="text-sm text-gray-600 dark:text-gray-400">
                        This is your user dashboard
                    </p>
                </div>
                <div class="h-12 w-12 rounded-full bg-blue-100 dark:bg-blue-900 flex items-center justify-center">
                    <x-heroicon-o-user class="h-6 w-6 text-blue-600 dark:text-blue-400" />
                </div>
            </div>
        </x-filament::section>

        <x-filament::section>
            <div class="text-center">
                <h3 class="text-lg font-medium text-gray-900 dark:text-white mb-2">
                    Quick Actions
                </h3>
                <div class="space-y-2">
                    <x-filament::button variant="outline" disabled>
                        Settings (Coming Soon)
                    </x-filament::button>
                    <x-filament::button variant="outline" disabled>
                        Notifications (Coming Soon)
                    </x-filament::button>
                </div>
            </div>
        </x-filament::section>

        <x-filament::section>
            <div>
                <h3 class="text-lg font-medium text-gray-900 dark:text-white mb-2">
                    Account Info
                </h3>
                <div class="space-y-1 text-sm text-gray-600 dark:text-gray-400">
                    <p><strong>Email:</strong> {{ auth()->user()->email }}</p>
                    <p><strong>Member since:</strong> {{ auth()->user()->created_at->format('M Y') }}</p>
                </div>
            </div>
        </x-filament::section>
    </div>
</x-filament-panels::page> 