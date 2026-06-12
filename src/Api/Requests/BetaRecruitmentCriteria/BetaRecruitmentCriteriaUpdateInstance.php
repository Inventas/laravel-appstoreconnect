<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\BetaRecruitmentCriteria;

use Inventas\AppStoreConnectKit\Api\Dto\BetaRecruitmentCriterionUpdateRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * betaRecruitmentCriteria_updateInstance
 */
class BetaRecruitmentCriteriaUpdateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PATCH;

    public function resolveEndpoint(): string
    {
        return "/v1/betaRecruitmentCriteria/{$this->id}";
    }

    public function __construct(
        protected string $id,
        protected BetaRecruitmentCriterionUpdateRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
