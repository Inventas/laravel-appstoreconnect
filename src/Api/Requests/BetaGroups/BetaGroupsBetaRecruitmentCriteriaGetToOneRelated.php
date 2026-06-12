<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\BetaGroups;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * betaGroups_betaRecruitmentCriteria_getToOneRelated
 */
class BetaGroupsBetaRecruitmentCriteriaGetToOneRelated extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/betaGroups/{$this->id}/betaRecruitmentCriteria";
    }

    /**
     * @param  array<int, string>|null  $fieldsbetaRecruitmentCriteria
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldsbetaRecruitmentCriteria = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter(['fields[betaRecruitmentCriteria]' => $this->fieldsbetaRecruitmentCriteria], static fn (mixed $value): bool => $value !== null);
    }
}
