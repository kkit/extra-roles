<?php

declare(strict_types=1);

namespace App\Orchid\Layouts\User;

use App\Models\Owner;
use Orchid\Screen\Field;
use Orchid\Screen\Fields\Select;
use Orchid\Screen\Layouts\Rows;

class UserOwnerLayout extends Rows
{
    /**
     * The screen's layout elements.
     *
     * @return Field[]
     */
    public function fields(): array
    {
        return [
            Select::make('user.owner_id')
                ->fromModel(Owner::class, 'name')
                ->empty()
                ->required()
                ->title('Отдел')
                ->help('Укажите отдел, к которому должна принадлежать эта учетная запись'),
        ];
    }
}
