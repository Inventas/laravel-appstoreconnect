<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\Apps;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * apps_builds_getToManyRelated
 */
class AppsBuildsGetToManyRelated extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/apps/{$this->id}/builds";
    }

    /**
     * @param  array<int, string>|null  $fieldsbuilds
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldsbuilds = null,
        protected ?int $limit = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter(['fields[builds]' => $this->fieldsbuilds, 'limit' => $this->limit], static fn (mixed $value): bool => $value !== null);
    }
}
