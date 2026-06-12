<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\InAppPurchaseOfferCodeCustomCodes;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * inAppPurchaseOfferCodeCustomCodes_getInstance
 */
class InAppPurchaseOfferCodeCustomCodesGetInstance extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/inAppPurchaseOfferCodeCustomCodes/{$this->id}";
    }

    /**
     * @param  array<int, string>|null  $fieldsinAppPurchaseOfferCodeCustomCodes
     * @param  array<int, string>|null  $fieldsactors
     * @param  array<int, string>|null  $include
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldsinAppPurchaseOfferCodeCustomCodes = null,
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
            'fields[inAppPurchaseOfferCodeCustomCodes]' => $this->fieldsinAppPurchaseOfferCodeCustomCodes,
            'fields[actors]' => $this->fieldsactors,
            'include' => $this->include,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
