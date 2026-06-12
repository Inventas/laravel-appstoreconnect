<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\Builds;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * builds_icons_getToManyRelated
 */
class BuildsIconsGetToManyRelated extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/builds/{$this->id}/icons";
    }

    /**
     * @param  array<int, string>|null  $fieldsbuildIcons
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldsbuildIcons = null,
        protected ?int $limit = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter(['fields[buildIcons]' => $this->fieldsbuildIcons, 'limit' => $this->limit], static fn (mixed $value): bool => $value !== null);
    }
}
