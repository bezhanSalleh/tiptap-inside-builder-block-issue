<?php

namespace App\TiptapBlocks;

use Filament\Forms\Components\Select;
use FilamentTiptapEditor\TiptapBlock;
use Filament\Forms\Components\TextInput;

class TitleBlock extends TiptapBlock
{
    public string $preview = 'tiptap-blocks.previews.title-block';

    public string $rendered = 'tiptap-blocks.rendered.title-block';

    public string $width = 'xl';

    public bool $slideOver = true;

    public ?string $icon = 'heroicon-o-film';

    public function getFormSchema(): array
    {
        return [
            TextInput::make('title'),
            TextInput::make('color'),
            Select::make('side')
                ->options([
                    'Hero' => 'Hero',
                    'Villain' => 'Villain',
                ])
                ->default('Hero')
        ];
    }
}
