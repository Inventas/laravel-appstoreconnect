<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AppPricePoints;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * appPricePointsV3_equalizations_getToManyRelationship
 */
class AppPricePointsV3EqualizationsGetToManyRelationship extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v3/appPricePoints/{$this->id}/relationships/equalizations";
    }

    public function __construct(
        protected string $id,
        protected ?int $limit = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter(['limit' => $this->limit], static fn (mixed $value): bool => $value !== null);
    }
}
