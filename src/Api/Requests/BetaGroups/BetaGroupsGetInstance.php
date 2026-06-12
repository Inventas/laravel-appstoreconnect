<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\BetaGroups;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * betaGroups_getInstance
 */
class BetaGroupsGetInstance extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/betaGroups/{$this->id}";
    }

    /**
     * @param  array<int, string>|null  $fieldsbetaGroups
     * @param  array<int, string>|null  $fieldsapps
     * @param  array<int, string>|null  $fieldsbuilds
     * @param  array<int, string>|null  $fieldsbetaTesters
     * @param  array<int, string>|null  $fieldsbetaRecruitmentCriteria
     * @param  array<int, string>|null  $include
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldsbetaGroups = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsapps = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsbuilds = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsbetaTesters = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsbetaRecruitmentCriteria = null,
        /** @var array<int, string>|null */
        protected ?array $include = null,
        protected ?int $limitbetaTesters = null,
        protected ?int $limitbuilds = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter([
            'fields[betaGroups]' => $this->fieldsbetaGroups,
            'fields[apps]' => $this->fieldsapps,
            'fields[builds]' => $this->fieldsbuilds,
            'fields[betaTesters]' => $this->fieldsbetaTesters,
            'fields[betaRecruitmentCriteria]' => $this->fieldsbetaRecruitmentCriteria,
            'include' => $this->include,
            'limit[betaTesters]' => $this->limitbetaTesters,
            'limit[builds]' => $this->limitbuilds,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
