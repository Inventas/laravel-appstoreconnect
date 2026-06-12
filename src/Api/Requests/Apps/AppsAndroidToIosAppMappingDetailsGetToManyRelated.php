<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\Apps;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * apps_androidToIosAppMappingDetails_getToManyRelated
 */
class AppsAndroidToIosAppMappingDetailsGetToManyRelated extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/apps/{$this->id}/androidToIosAppMappingDetails";
    }

    /**
     * @param  array<int, string>|null  $fieldsandroidToIosAppMappingDetails
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldsandroidToIosAppMappingDetails = null,
        protected ?int $limit = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter(['fields[androidToIosAppMappingDetails]' => $this->fieldsandroidToIosAppMappingDetails, 'limit' => $this->limit], static fn (mixed $value): bool => $value !== null);
    }
}
