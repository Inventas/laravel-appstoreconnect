<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\Actors;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * actors_getInstance
 */
class ActorsGetInstance extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/actors/{$this->id}";
    }

    /**
     * @param  array<int, string>|null  $fieldsactors
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldsactors = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter(['fields[actors]' => $this->fieldsactors], static fn (mixed $value): bool => $value !== null);
    }
}
