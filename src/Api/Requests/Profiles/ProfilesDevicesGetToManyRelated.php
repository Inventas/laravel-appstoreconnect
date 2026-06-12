<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\Profiles;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * profiles_devices_getToManyRelated
 */
class ProfilesDevicesGetToManyRelated extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/profiles/{$this->id}/devices";
    }

    /**
     * @param  array<int, string>|null  $fieldsdevices
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldsdevices = null,
        protected ?int $limit = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter(['fields[devices]' => $this->fieldsdevices, 'limit' => $this->limit], static fn (mixed $value): bool => $value !== null);
    }
}
