<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\BetaRecruitmentCriteria;

use Inventas\AppStoreConnectKit\Api\Dto\BetaRecruitmentCriterionCreateRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * betaRecruitmentCriteria_createInstance
 */
class BetaRecruitmentCriteriaCreateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/v1/betaRecruitmentCriteria';
    }

    public function __construct(
        protected BetaRecruitmentCriterionCreateRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
