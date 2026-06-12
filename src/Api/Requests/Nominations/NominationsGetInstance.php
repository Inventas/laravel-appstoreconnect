<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\Nominations;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * nominations_getInstance
 */
class NominationsGetInstance extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/nominations/{$this->id}";
    }

    /**
     * @param  array<int, string>|null  $fieldsnominations
     * @param  array<int, string>|null  $fieldsapps
     * @param  array<int, string>|null  $fieldsactors
     * @param  array<int, string>|null  $fieldsappEvents
     * @param  array<int, string>|null  $fieldsterritories
     * @param  array<int, string>|null  $include
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldsnominations = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsapps = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsactors = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsappEvents = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsterritories = null,
        /** @var array<int, string>|null */
        protected ?array $include = null,
        protected ?int $limitinAppEvents = null,
        protected ?int $limitrelatedApps = null,
        protected ?int $limitsupportedTerritories = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter([
            'fields[nominations]' => $this->fieldsnominations,
            'fields[apps]' => $this->fieldsapps,
            'fields[actors]' => $this->fieldsactors,
            'fields[appEvents]' => $this->fieldsappEvents,
            'fields[territories]' => $this->fieldsterritories,
            'include' => $this->include,
            'limit[inAppEvents]' => $this->limitinAppEvents,
            'limit[relatedApps]' => $this->limitrelatedApps,
            'limit[supportedTerritories]' => $this->limitsupportedTerritories,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
