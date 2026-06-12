<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Dto\BetaRecruitmentCriterionCreateRequest;
use Inventas\AppStoreConnectKit\Api\Dto\BetaRecruitmentCriterionUpdateRequest;
use Inventas\AppStoreConnectKit\Api\Requests\BetaRecruitmentCriteria\BetaRecruitmentCriteriaCreateInstance;
use Inventas\AppStoreConnectKit\Api\Requests\BetaRecruitmentCriteria\BetaRecruitmentCriteriaDeleteInstance;
use Inventas\AppStoreConnectKit\Api\Requests\BetaRecruitmentCriteria\BetaRecruitmentCriteriaUpdateInstance;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class BetaRecruitmentCriteria extends BaseResource
{
    public function betaRecruitmentCriteriaCreateInstance(
        BetaRecruitmentCriterionCreateRequest $payload,
    ): Response {
        return $this->connector->send(new BetaRecruitmentCriteriaCreateInstance($payload));
    }

    public function betaRecruitmentCriteriaDeleteInstance(string $id): Response
    {
        return $this->connector->send(new BetaRecruitmentCriteriaDeleteInstance($id));
    }

    public function betaRecruitmentCriteriaUpdateInstance(
        string $id,
        BetaRecruitmentCriterionUpdateRequest $payload,
    ): Response {
        return $this->connector->send(new BetaRecruitmentCriteriaUpdateInstance($id, $payload));
    }
}
