<?php

namespace App\Filament\Resources\UserResource\Pages;

use App\Filament\Resources\UserResource;
use App\Http\Middleware\EnsureUserIsAdminstrator;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Support\Facades\Auth;

class ListUsers extends ListRecords
{
    protected static string $resource = UserResource::class;

    protected function getHeaderActions(): array
    {
        if (Auth::user() && Auth::user()->isAdministrator()) {
            return [
                Actions\CreateAction::make(),
            ];
        }
        return [];
    }
}
