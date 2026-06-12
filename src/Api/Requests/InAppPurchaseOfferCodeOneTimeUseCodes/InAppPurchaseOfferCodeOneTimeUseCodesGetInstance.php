<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\InAppPurchaseOfferCodeOneTimeUseCodes;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * inAppPurchaseOfferCodeOneTimeUseCodes_getInstance
 */
class InAppPurchaseOfferCodeOneTimeUseCodesGetInstance extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/inAppPurchaseOfferCodeOneTimeUseCodes/{$this->id}";
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
            'include' => $this->include,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
