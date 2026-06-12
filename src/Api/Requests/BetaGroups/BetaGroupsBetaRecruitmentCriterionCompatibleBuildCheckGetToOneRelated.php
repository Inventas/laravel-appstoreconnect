<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\BetaGroups;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * betaGroups_betaRecruitmentCriterionCompatibleBuildCheck_getToOneRelated
 */
class BetaGroupsBetaRecruitmentCriterionCompatibleBuildCheckGetToOneRelated extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/betaGroups/{$this->id}/betaRecruitmentCriterionCompatibleBuildCheck";
    }

    /**
     * @param  array<int, string>|null  $fieldsbetaRecruitmentCriterionCompatibleBuildChecks
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldsbetaRecruitmentCriterionCompatibleBuildChecks = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter(['fields[betaRecruitmentCriterionCompatibleBuildChecks]' => $this->fieldsbetaRecruitmentCriterionCompatibleBuildChecks], static fn (mixed $value): bool => $value !== null);
    }
}
