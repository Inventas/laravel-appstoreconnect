<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\Actors;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * actors_getCollection
 */
class ActorsGetCollection extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/v1/actors';
    }

    /**
     * @param  array<int, string>  $filterid
     * @param  array<int, string>|null  $fieldsactors
     */
    public function __construct(
        /** @var array<int, string> */
        protected array $filterid,
        /** @var array<int, string>|null */
        protected ?array $fieldsactors = null,
        protected ?int $limit = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter(['filter[id]' => $this->filterid, 'fields[actors]' => $this->fieldsactors, 'limit' => $this->limit], static fn (mixed $value): bool => $value !== null);
    }
}
