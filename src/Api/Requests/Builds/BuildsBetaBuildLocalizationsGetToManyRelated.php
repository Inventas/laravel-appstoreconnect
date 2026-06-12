<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\Builds;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * builds_betaBuildLocalizations_getToManyRelated
 */
class BuildsBetaBuildLocalizationsGetToManyRelated extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/builds/{$this->id}/betaBuildLocalizations";
    }

    /**
     * @param  array<int, string>|null  $fieldsbetaBuildLocalizations
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldsbetaBuildLocalizations = null,
        protected ?int $limit = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter(['fields[betaBuildLocalizations]' => $this->fieldsbetaBuildLocalizations, 'limit' => $this->limit], static fn (mixed $value): bool => $value !== null);
    }
}
