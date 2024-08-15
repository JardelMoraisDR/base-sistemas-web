<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\Tabs\Tab;
use Filament\Forms\Components\FileUpload;

class Preferences extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-cog';
    protected static ?string $navigationGroup = 'Configurações';
    protected static string $view = 'filament.pages.preferences';

    protected function getFormSchema(): array
    {
        return [
            Tabs::make('Preferences')
                ->tabs([
                    Tab::make('Informações')
                        ->schema([
                            FileUpload::make('logo')
                                ->label('Logo')
                                ->image()
                                ->directory('logos')
                                ->imageCropAspectRatio('1:1')
                                ->imageResizeTargetWidth('100')
                                ->imageResizeTargetHeight('100'),
                            TextInput::make('cnpj')
                                ->label('CNPJ'),
                                // ->mask(fn (TextInput\Mask $mask) => $mask->pattern('00.000.000/0000-00')),
                            TextInput::make('telefone')
                                ->label('Telefone')
                                ->tel(),
                                // ->mask(fn (TextInput\Mask $mask) => $mask->pattern('(00) 00000-0000')),
                            TextInput::make('email')
                                ->label('E-mail')
                                ->email(),
                        ]),
                    Tab::make('Assinatura')
                        ->schema([
                            // Campos para Assinatura
                        ]),
                    Tab::make('Horários')
                        ->schema([
                            // Campos para Horários
                        ]),
                    Tab::make('Endereço')
                        ->schema([
                            // Campos para Endereço
                        ]),
                    Tab::make('Regras Cardápio')
                        ->schema([
                            // Campos para Regras Cardápio
                        ]),
                ]),
        ];
    }
}
