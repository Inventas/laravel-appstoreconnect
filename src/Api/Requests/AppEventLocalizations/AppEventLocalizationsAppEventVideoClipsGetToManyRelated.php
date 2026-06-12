<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AppEventLocalizations;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * appEventLocalizations_appEventVideoClips_getToManyRelated
 */
class AppEventLocalizationsAppEventVideoClipsGetToManyRelated extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/appEventLocalizations/{$this->id}/appEventVideoClips";
    }

    /**
     * @param  array<int, string>|null  $fieldsappEventVideoClips
     * @param  array<int, string>|null  $fieldsappEventLocalizations
     * @param  array<int, string>|null  $include
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldsappEventVideoClips = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsappEventLocalizations = null,
        protected ?int $limit = null,
        /** @var array<int, string>|null */
        protected ?array $include = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter([
            'fields[appEventVideoClips]' => $this->fieldsappEventVideoClips,
            'fields[appEventLocalizations]' => $this->fieldsappEventLocalizations,
            'limit' => $this->limit,
            'include' => $this->include,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
