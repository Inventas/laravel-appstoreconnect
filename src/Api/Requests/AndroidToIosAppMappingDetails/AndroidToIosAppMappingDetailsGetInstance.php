<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AndroidToIosAppMappingDetails;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * androidToIosAppMappingDetails_getInstance
 */
class AndroidToIosAppMappingDetailsGetInstance extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/androidToIosAppMappingDetails/{$this->id}";
    }

    /**
     * @param  array<int, string>|null  $fieldsandroidToIosAppMappingDetails
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldsandroidToIosAppMappingDetails = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter(['fields[androidToIosAppMappingDetails]' => $this->fieldsandroidToIosAppMappingDetails], static fn (mixed $value): bool => $value !== null);
    }
}
