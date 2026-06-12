<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Requests\BetaRecruitmentCriterionOptions\BetaRecruitmentCriterionOptionsGetCollection;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class BetaRecruitmentCriterionOptions extends BaseResource
{
    /**
     * @param  array<int, string>|null  $fieldsbetaRecruitmentCriterionOptions
     */
    public function betaRecruitmentCriterionOptionsGetCollection(
        ?array $fieldsbetaRecruitmentCriterionOptions = null,
        ?int $limit = null,
    ): Response {
        return $this->connector->send(new BetaRecruitmentCriterionOptionsGetCollection($fieldsbetaRecruitmentCriterionOptions, $limit));
    }
}
