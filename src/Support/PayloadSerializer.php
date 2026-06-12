<?php

namespace Inventas\AppStoreConnectKit\Support;

use BackedEnum;
use ReflectionObject;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Optional;
use UnitEnum;

class PayloadSerializer
{
    /**
     * @return array<string, mixed>
     */
    public static function serialize(mixed $payload): array
    {
        $serialized = self::serializeValue($payload);

        if (! is_array($serialized)) {
            throw new \InvalidArgumentException('Payload serialization must produce an array.');
        }

        return $serialized;
    }

    private static function serializeValue(mixed $value): mixed
    {
        if ($value instanceof BackedEnum) {
            return $value->value;
        }

        if ($value instanceof UnitEnum) {
            return $value->name;
        }

        if ($value instanceof Optional) {
            return $value;
        }

        if (is_array($value)) {
            return array_map(self::serializeValue(...), $value);
        }

        if (is_object($value)) {
            return self::serializeObject($value);
        }

        return $value;
    }

    /**
     * @return array<string, mixed>
     */
    private static function serializeObject(object $payload): array
    {
        $reflection = new ReflectionObject($payload);
        $serialized = [];

        foreach ($reflection->getProperties(\ReflectionProperty::IS_PUBLIC) as $property) {
            if (! $property->isInitialized($payload)) {
                continue;
            }

            $value = $property->getValue($payload);

            if ($value instanceof Optional) {
                continue;
            }

            $serialized[self::serializedPropertyName($property)] = self::serializeValue(
                $value,
            );
        }

        return $serialized;
    }

    private static function serializedPropertyName(\ReflectionProperty $property): string
    {
        $attributes = $property->getAttributes(MapName::class);

        if ($attributes === []) {
            return $property->getName();
        }

        $mapName = $attributes[0]->newInstance();

        return (string) $mapName->output;
    }
}
