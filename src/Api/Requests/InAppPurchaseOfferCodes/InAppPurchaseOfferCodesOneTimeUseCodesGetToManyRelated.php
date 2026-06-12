<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\InAppPurchaseOfferCodes;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * inAppPurchaseOfferCodes_oneTimeUseCodes_getToManyRelated
 */
class InAppPurchaseOfferCodesOneTimeUseCodesGetToManyRelated extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/inAppPurchaseOfferCodes/{$this->id}/oneTimeUseCodes";
    }

    /**
     * @param  array<int, string>|null  $fieldsinAppPurchaseOfferCodeOneTimeUseCodes
     * @param  array<int, string>|null  $fieldsactors
     * @param  array<int, string>|null  $include
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldsinAppPurchaseOfferCodeOneTimeUseCodes = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsactors = null,
        protected ?int $limit = null,
        /** @var array<int, string>|null */
        protected ?array $include = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter([
            'fields[inAppPurchaseOfferCodeOneTimeUseCodes]' => $this->fieldsinAppPurchaseOfferCodeOneTimeUseCodes,
            'fields[actors]' => $this->fieldsactors,
            'limit' => $this->limit,
            'include' => $this->include,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
