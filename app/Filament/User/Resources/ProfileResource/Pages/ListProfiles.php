<?php

namespace App\Filament\User\Resources\ProfileResource\Pages;

use App\Filament\User\Resources\ProfileResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Support\Facades\Auth;

class ListProfiles extends ListRecords
{
    protected static string $resource = ProfileResource::class;

    protected function getHeaderActions(): array
    {
        return [
            // Users can only edit their own profile, not create new ones
        ];
    }

    public function mount(): void
    {
        // Redirect users directly to their profile view
        $user = Auth::user();
        if ($user) {
            $this->redirect(ProfileResource::getUrl('edit', ['record' => $user]));
        }
    }
} 