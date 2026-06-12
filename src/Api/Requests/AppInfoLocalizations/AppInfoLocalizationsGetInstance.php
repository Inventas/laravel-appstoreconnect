<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AppInfoLocalizations;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * appInfoLocalizations_getInstance
 */
class AppInfoLocalizationsGetInstance extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/appInfoLocalizations/{$this->id}";
    }

    /**
     * @param  array<int, string>|null  $fieldsappInfoLocalizations
     * @param  array<int, string>|null  $fieldsappInfos
     * @param  array<int, string>|null  $include
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldsappInfoLocalizations = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsappInfos = null,
        /** @var array<int, string>|null */
        protected ?array $include = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter([
            'fields[appInfoLocalizations]' => $this->fieldsappInfoLocalizations,
            'fields[appInfos]' => $this->fieldsappInfos,
            'include' => $this->include,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
