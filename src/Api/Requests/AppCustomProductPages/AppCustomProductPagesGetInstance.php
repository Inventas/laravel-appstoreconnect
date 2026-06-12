<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AppCustomProductPages;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * appCustomProductPages_getInstance
 */
class AppCustomProductPagesGetInstance extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/appCustomProductPages/{$this->id}";
    }

    /**
     * @param  array<int, string>|null  $fieldsappCustomProductPages
     * @param  array<int, string>|null  $fieldsapps
     * @param  array<int, string>|null  $fieldsappCustomProductPageVersions
     * @param  array<int, string>|null  $include
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldsappCustomProductPages = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsapps = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsappCustomProductPageVersions = null,
        /** @var array<int, string>|null */
        protected ?array $include = null,
        protected ?int $limitappCustomProductPageVersions = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter([
            'fields[appCustomProductPages]' => $this->fieldsappCustomProductPages,
            'fields[apps]' => $this->fieldsapps,
            'fields[appCustomProductPageVersions]' => $this->fieldsappCustomProductPageVersions,
            'include' => $this->include,
            'limit[appCustomProductPageVersions]' => $this->limitappCustomProductPageVersions,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
