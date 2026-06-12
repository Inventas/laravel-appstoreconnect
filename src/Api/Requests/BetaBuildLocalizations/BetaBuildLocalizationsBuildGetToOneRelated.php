<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\BetaBuildLocalizations;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * betaBuildLocalizations_build_getToOneRelated
 */
class BetaBuildLocalizationsBuildGetToOneRelated extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/betaBuildLocalizations/{$this->id}/build";
    }

    /**
     * @param  array<int, string>|null  $fieldsbuilds
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldsbuilds = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter(['fields[builds]' => $this->fieldsbuilds], static fn (mixed $value): bool => $value !== null);
    }
}
