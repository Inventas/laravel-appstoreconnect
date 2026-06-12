<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\ReviewSubmissions;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * reviewSubmissions_items_getToManyRelated
 */
class ReviewSubmissionsItemsGetToManyRelated extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/reviewSubmissions/{$this->id}/items";
    }

    /**
     * @param  array<int, string>|null  $fieldsreviewSubmissionItems
     * @param  array<int, string>|null  $fieldsappStoreVersions
     * @param  array<int, string>|null  $fieldsappCustomProductPageVersions
     * @param  array<int, string>|null  $fieldsappStoreVersionExperiments
     * @param  array<int, string>|null  $fieldsappEvents
     * @param  array<int, string>|null  $fieldsbackgroundAssetVersions
     * @param  array<int, string>|null  $fieldsgameCenterAchievementVersions
     * @param  array<int, string>|null  $fieldsgameCenterActivityVersions
     * @param  array<int, string>|null  $fieldsgameCenterChallengeVersions
     * @param  array<int, string>|null  $fieldsgameCenterLeaderboardSetVersions
     * @param  array<int, string>|null  $fieldsgameCenterLeaderboardVersions
     * @param  array<int, string>|null  $include
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldsreviewSubmissionItems = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsappStoreVersions = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsappCustomProductPageVersions = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsappStoreVersionExperiments = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsappEvents = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsbackgroundAssetVersions = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsgameCenterAchievementVersions = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsgameCenterActivityVersions = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsgameCenterChallengeVersions = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsgameCenterLeaderboardSetVersions = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsgameCenterLeaderboardVersions = null,
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
            'fields[reviewSubmissionItems]' => $this->fieldsreviewSubmissionItems,
            'fields[appStoreVersions]' => $this->fieldsappStoreVersions,
            'fields[appCustomProductPageVersions]' => $this->fieldsappCustomProductPageVersions,
            'fields[appStoreVersionExperiments]' => $this->fieldsappStoreVersionExperiments,
            'fields[appEvents]' => $this->fieldsappEvents,
            'fields[backgroundAssetVersions]' => $this->fieldsbackgroundAssetVersions,
            'fields[gameCenterAchievementVersions]' => $this->fieldsgameCenterAchievementVersions,
            'fields[gameCenterActivityVersions]' => $this->fieldsgameCenterActivityVersions,
            'fields[gameCenterChallengeVersions]' => $this->fieldsgameCenterChallengeVersions,
            'fields[gameCenterLeaderboardSetVersions]' => $this->fieldsgameCenterLeaderboardSetVersions,
            'fields[gameCenterLeaderboardVersions]' => $this->fieldsgameCenterLeaderboardVersions,
            'limit' => $this->limit,
            'include' => $this->include,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
