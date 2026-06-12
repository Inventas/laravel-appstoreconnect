<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\BetaGroups;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * betaGroups_betaTesters_getToManyRelated
 */
class BetaGroupsBetaTestersGetToManyRelated extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/betaGroups/{$this->id}/betaTesters";
    }

    /**
     * @param  array<int, string>|null  $fieldsbetaTesters
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldsbetaTesters = null,
        protected ?int $limit = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter(['fields[betaTesters]' => $this->fieldsbetaTesters, 'limit' => $this->limit], static fn (mixed $value): bool => $value !== null);
    }
}
