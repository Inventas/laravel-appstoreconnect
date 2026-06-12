<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\Apps;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * apps_alternativeDistributionKey_getToOneRelated
 */
class AppsAlternativeDistributionKeyGetToOneRelated extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/apps/{$this->id}/alternativeDistributionKey";
    }

    /**
     * @param  array<int, string>|null  $fieldsalternativeDistributionKeys
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldsalternativeDistributionKeys = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter(['fields[alternativeDistributionKeys]' => $this->fieldsalternativeDistributionKeys], static fn (mixed $value): bool => $value !== null);
    }
}
