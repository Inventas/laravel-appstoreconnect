<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AppClips;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * appClips_appClipDefaultExperiences_getToManyRelationship
 */
class AppClipsAppClipDefaultExperiencesGetToManyRelationship extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/appClips/{$this->id}/relationships/appClipDefaultExperiences";
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
