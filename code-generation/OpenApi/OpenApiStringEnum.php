<?php

namespace Inventas\AppStoreConnectKit\CodeGeneration\OpenApi;

use cebe\openapi\spec\Schema;

class OpenApiStringEnum
{
    public static function isSchema(Schema $schema): bool
    {
        return $schema->type === 'string'
            && isset($schema->enum)
            && $schema->enum !== [];
    }

    /**
     * @return array<string, string>
     */
    public static function cases(Schema $schema): array
    {
        $cases = [];

        foreach ($schema->enum ?? [] as $value) {
            if (! is_string($value)) {
                continue;
            }

            $cases[self::caseName($value, array_keys($cases))] = $value;
        }

        return $cases;
    }

    /**
     * @param  list<string>  $usedNames
     */
    public static function caseName(string $value, array $usedNames = []): string
    {
        $name = preg_replace('/[^A-Za-z0-9_]/', '_', $value) ?? '';
        $name = preg_replace('/_+/', '_', $name) ?? '';
        $name = trim($name, '_');
        $name = strtoupper($name);

        if ($name === '') {
            $name = 'VALUE';
        }

        if (preg_match('/^[0-9]/', $name) === 1) {
            $name = "VALUE_{$name}";
        }

        $candidate = $name;
        $suffix = 2;

        while (in_array($candidate, $usedNames, true)) {
            $candidate = "{$name}_{$suffix}";
            $suffix++;
        }

        return $candidate;
    }
}
