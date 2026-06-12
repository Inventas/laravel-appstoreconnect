<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\BetaAppLocalizations;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * betaAppLocalizations_getInstance
 */
class BetaAppLocalizationsGetInstance extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/betaAppLocalizations/{$this->id}";
    }

    /**
     * @param  array<int, string>|null  $fieldsbetaAppLocalizations
     * @param  array<int, string>|null  $fieldsapps
     * @param  array<int, string>|null  $include
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldsbetaAppLocalizations = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsapps = null,
        /** @var array<int, string>|null */
        protected ?array $include = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter([
            'fields[betaAppLocalizations]' => $this->fieldsbetaAppLocalizations,
            'fields[apps]' => $this->fieldsapps,
            'include' => $this->include,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
