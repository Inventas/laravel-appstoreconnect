<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\BetaTesters;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * betaTesters_getInstance
 */
class BetaTestersGetInstance extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/betaTesters/{$this->id}";
    }

    /**
     * @param  array<int, string>|null  $fieldsbetaTesters
     * @param  array<int, string>|null  $fieldsapps
     * @param  array<int, string>|null  $fieldsbetaGroups
     * @param  array<int, string>|null  $fieldsbuilds
     * @param  array<int, string>|null  $include
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldsbetaTesters = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsapps = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsbetaGroups = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsbuilds = null,
        /** @var array<int, string>|null */
        protected ?array $include = null,
        protected ?int $limitapps = null,
        protected ?int $limitbetaGroups = null,
        protected ?int $limitbuilds = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter([
            'fields[betaTesters]' => $this->fieldsbetaTesters,
            'fields[apps]' => $this->fieldsapps,
            'fields[betaGroups]' => $this->fieldsbetaGroups,
            'fields[builds]' => $this->fieldsbuilds,
            'include' => $this->include,
            'limit[apps]' => $this->limitapps,
            'limit[betaGroups]' => $this->limitbetaGroups,
            'limit[builds]' => $this->limitbuilds,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
