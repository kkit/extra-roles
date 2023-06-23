<?php

if (! function_exists('get_owner_id')) {
    /**
     * @return int|null Возвращает owner_id аутентифицированного пользователя или null, если пользователь с id = 1
     */
    function getOwnerId(): ?int
    {
        if (Auth::id() === 1) {
            return null;
        }

        return Auth::user()->owner_id;
    }
}

