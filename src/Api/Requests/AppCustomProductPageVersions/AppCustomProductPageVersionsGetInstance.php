<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AppCustomProductPageVersions;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * appCustomProductPageVersions_getInstance
 */
class AppCustomProductPageVersionsGetInstance extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/appCustomProductPageVersions/{$this->id}";
    }

    /**
     * @param  array<int, string>|null  $fieldsappCustomProductPageVersions
     * @param  array<int, string>|null  $fieldsappCustomProductPages
     * @param  array<int, string>|null  $fieldsappCustomProductPageLocalizations
     * @param  array<int, string>|null  $include
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldsappCustomProductPageVersions = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsappCustomProductPages = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsappCustomProductPageLocalizations = null,
        /** @var array<int, string>|null */
        protected ?array $include = null,
        protected ?int $limitappCustomProductPageLocalizations = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter([
            'fields[appCustomProductPageVersions]' => $this->fieldsappCustomProductPageVersions,
            'fields[appCustomProductPages]' => $this->fieldsappCustomProductPages,
            'fields[appCustomProductPageLocalizations]' => $this->fieldsappCustomProductPageLocalizations,
            'include' => $this->include,
            'limit[appCustomProductPageLocalizations]' => $this->limitappCustomProductPageLocalizations,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
