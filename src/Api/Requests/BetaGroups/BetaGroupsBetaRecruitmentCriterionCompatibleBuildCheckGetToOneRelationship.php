<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\BetaGroups;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * betaGroups_betaRecruitmentCriterionCompatibleBuildCheck_getToOneRelationship
 */
class BetaGroupsBetaRecruitmentCriterionCompatibleBuildCheckGetToOneRelationship extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/betaGroups/{$this->id}/relationships/betaRecruitmentCriterionCompatibleBuildCheck";
    }

    public function __construct(
        protected string $id,
    ) {}
}
