<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AppClipDefaultExperiences;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * appClipDefaultExperiences_appClipDefaultExperienceLocalizations_getToManyRelationship
 */
class AppClipDefaultExperiencesAppClipDefaultExperienceLocalizationsGetToManyRelationship extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/appClipDefaultExperiences/{$this->id}/relationships/appClipDefaultExperienceLocalizations";
    }

    public function __construct(
        protected string $id,
        protected ?int $limit = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter(['limit' => $this->limit], static fn (mixed $value): bool => $value !== null);
    }
}
