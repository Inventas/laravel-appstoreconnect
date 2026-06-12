<?php

namespace Inventas\AppStoreConnectKit\JWT;

enum AppStoreConnectKeyType: string
{
    case Team = 'team';
    case Individual = 'individual';

    public static function fromConfig(mixed $value): self
    {
        if ($value instanceof self) {
            return $value;
        }

        if (! is_string($value)) {
            return self::Team;
        }

        return self::tryFrom(strtolower($value)) ?? self::Team;
    }
}
