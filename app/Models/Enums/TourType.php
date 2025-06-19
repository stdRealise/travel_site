<?php

namespace App\Models\Enums;

enum TourType: int
{
    case GROUP = 1;
    case MINIGROUP = 2;
    case INDIVIDUAL = 3;

    public static function keys(): array
    {
        return array_map(
            fn (self $type) => $type->value,
            static::cases()
        );
    }

    public function name(): string
    {
        return match($this) {
            static::GROUP => 'Группа',
            static::MINIGROUP => 'Мини-группа',
            static::INDIVIDUAL => 'Индивидуальный',
        };
    }
}
