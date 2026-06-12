<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\Devices;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * devices_getInstance
 */
class DevicesGetInstance extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/devices/{$this->id}";
    }

    /**
     * @param  array<int, string>|null  $fieldsdevices
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldsdevices = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter(['fields[devices]' => $this->fieldsdevices], static fn (mixed $value): bool => $value !== null);
    }
}
