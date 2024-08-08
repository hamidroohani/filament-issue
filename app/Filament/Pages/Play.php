<?php

namespace App\Filament\Pages;

use Filament\Forms\Components\Radio;
use Filament\Forms\Components\Wizard;
use Filament\Forms\Form;
use Filament\Forms\Get;
use Filament\Forms\Set;
use Filament\Notifications\Notification;
use Filament\Pages\Page;
use Illuminate\Support\HtmlString;

class Play extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.play';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Wizard::make([
                    Wizard\Step::make('name')->schema([Radio::make('name'),]),
                    Wizard\Step::make('name1')->schema([Radio::make('name'),]),
                    Wizard\Step::make('name2')->schema([Radio::make('name'),]),
                    Wizard\Step::make('name4')->schema([Radio::make('name'),]),
                    Wizard\Step::make('name3')->schema([Radio::make('name'),]),
                    Wizard\Step::make('name5')->schema([Radio::make('name'),]),
                    Wizard\Step::make('name6')->schema([Radio::make('name'),]),
                    Wizard\Step::make('name7')->schema([Radio::make('name'),]),
                    Wizard\Step::make('name8')->schema([Radio::make('name'),]),
                    Wizard\Step::make('name9')->schema([Radio::make('name'),]),
                    Wizard\Step::make('name14')->schema([Radio::make('name'),]),
                    Wizard\Step::make('name44')->schema([Radio::make('name'),]),
                    Wizard\Step::make('name22')->schema([Radio::make('name'),]),
                    Wizard\Step::make('name10')->schema([Radio::make('name'),]),
                    Wizard\Step::make('name12')->schema([Radio::make('name'),]),
                    Wizard\Step::make('name23')->schema([Radio::make('name'),]),
                    Wizard\Step::make('name45')->schema([Radio::make('name'),]),
                    Wizard\Step::make('name66')->schema([Radio::make('name'),]),
                    Wizard\Step::make('name88')->schema([Radio::make('name'),]),
                    Wizard\Step::make('name77')->schema([Radio::make('name'),]),
                    Wizard\Step::make('name85')->schema([Radio::make('name'),]),
                    ])
                ]);
    }
}
