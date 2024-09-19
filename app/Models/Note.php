<?php

namespace App\Models;

use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Note extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = ['id'];

    public static function getForm()
    {
        return [
            TextInput::make('title')
                ->columnSpanFull()
                ->required()
                ->maxLength(255),
            RichEditor::make('body')
                ->required()
                ->columnSpanFull(),
        ];
    }

    public function tenant(): BelongsTo
    {
        return $this->belongsTo(Tenant::class);
    }
}
