<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AppPricePoints;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * appPricePointsV3_getInstance
 */
class AppPricePointsV3GetInstance extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v3/appPricePoints/{$this->id}";
    }

    /**
     * @param  array<int, string>|null  $fieldsappPricePoints
     * @param  array<int, string>|null  $fieldsapps
     * @param  array<int, string>|null  $fieldsterritories
     * @param  array<int, string>|null  $include
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldsappPricePoints = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsapps = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsterritories = null,
        /** @var array<int, string>|null */
        protected ?array $include = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter([
            'fields[appPricePoints]' => $this->fieldsappPricePoints,
            'fields[apps]' => $this->fieldsapps,
            'fields[territories]' => $this->fieldsterritories,
            'include' => $this->include,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
