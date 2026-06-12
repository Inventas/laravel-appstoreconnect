<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\BetaGroups;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * betaGroups_betaRecruitmentCriteria_getToOneRelationship
 */
class BetaGroupsBetaRecruitmentCriteriaGetToOneRelationship extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/betaGroups/{$this->id}/relationships/betaRecruitmentCriteria";
    }

    public function __construct(
        protected string $id,
    ) {}
}
