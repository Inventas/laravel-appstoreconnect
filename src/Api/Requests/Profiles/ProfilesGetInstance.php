<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\Profiles;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * profiles_getInstance
 */
class ProfilesGetInstance extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/profiles/{$this->id}";
    }

    /**
     * @param  array<int, string>|null  $fieldsprofiles
     * @param  array<int, string>|null  $fieldsbundleIds
     * @param  array<int, string>|null  $fieldsdevices
     * @param  array<int, string>|null  $fieldscertificates
     * @param  array<int, string>|null  $include
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldsprofiles = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsbundleIds = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsdevices = null,
        /** @var array<int, string>|null */
        protected ?array $fieldscertificates = null,
        /** @var array<int, string>|null */
        protected ?array $include = null,
        protected ?int $limitcertificates = null,
        protected ?int $limitdevices = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter([
            'fields[profiles]' => $this->fieldsprofiles,
            'fields[bundleIds]' => $this->fieldsbundleIds,
            'fields[devices]' => $this->fieldsdevices,
            'fields[certificates]' => $this->fieldscertificates,
            'include' => $this->include,
            'limit[certificates]' => $this->limitcertificates,
            'limit[devices]' => $this->limitdevices,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
