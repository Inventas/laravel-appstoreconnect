<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AppInfos;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * appInfos_getInstance
 */
class AppInfosGetInstance extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/appInfos/{$this->id}";
    }

    /**
     * @param  array<int, string>|null  $fieldsappInfos
     * @param  array<int, string>|null  $fieldsapps
     * @param  array<int, string>|null  $fieldsageRatingDeclarations
     * @param  array<int, string>|null  $fieldsappInfoLocalizations
     * @param  array<int, string>|null  $fieldsappCategories
     * @param  array<int, string>|null  $include
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldsappInfos = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsapps = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsageRatingDeclarations = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsappInfoLocalizations = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsappCategories = null,
        /** @var array<int, string>|null */
        protected ?array $include = null,
        protected ?int $limitappInfoLocalizations = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter([
            'fields[appInfos]' => $this->fieldsappInfos,
            'fields[apps]' => $this->fieldsapps,
            'fields[ageRatingDeclarations]' => $this->fieldsageRatingDeclarations,
            'fields[appInfoLocalizations]' => $this->fieldsappInfoLocalizations,
            'fields[appCategories]' => $this->fieldsappCategories,
            'include' => $this->include,
            'limit[appInfoLocalizations]' => $this->limitappInfoLocalizations,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
