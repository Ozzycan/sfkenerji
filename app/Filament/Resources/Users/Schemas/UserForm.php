<?php

namespace App\Filament\Resources\Users\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class UserForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Yönetici Bilgileri')
                    ->description('Yöneticinin adını, e-posta adresini ve şifresini belirleyin.')
                    ->schema([
                        TextInput::make('name')
                            ->label('Ad Soyad')
                            ->placeholder('Örn: Ahmet Yılmaz')
                            ->required(),
                        TextInput::make('email')
                            ->label('E-posta Adresi')
                            ->email()
                            ->placeholder('Örn: ahmet@sfkenerji.com.tr')
                            ->required()
                            ->unique(ignoreRecord: true),
                        TextInput::make('password')
                            ->label('Şifre')
                            ->password()
                            ->placeholder('Şifreyi değiştirmek istemiyorsanız boş bırakın')
                            ->dehydrated(fn ($state) => filled($state))
                            ->required(fn (string $context): bool => $context === 'create'),
                    ])
                    ->columns(2)
            ]);
    }
}
