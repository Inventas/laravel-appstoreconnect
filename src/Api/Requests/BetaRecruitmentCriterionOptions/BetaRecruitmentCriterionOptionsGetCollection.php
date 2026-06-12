<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\BetaRecruitmentCriterionOptions;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * betaRecruitmentCriterionOptions_getCollection
 */
class BetaRecruitmentCriterionOptionsGetCollection extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/v1/betaRecruitmentCriterionOptions';
    }

    /**
     * @param  array<int, string>|null  $fieldsbetaRecruitmentCriterionOptions
     */
    public function __construct(
        /** @var array<int, string>|null */
        protected ?array $fieldsbetaRecruitmentCriterionOptions = null,
        protected ?int $limit = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter(['fields[betaRecruitmentCriterionOptions]' => $this->fieldsbetaRecruitmentCriterionOptions, 'limit' => $this->limit], static fn (mixed $value): bool => $value !== null);
    }
}
