<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\BetaRecruitmentCriteria;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * betaRecruitmentCriteria_deleteInstance
 */
class BetaRecruitmentCriteriaDeleteInstance extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/v1/betaRecruitmentCriteria/{$this->id}";
    }

    public function __construct(
        protected string $id,
    ) {}
}
