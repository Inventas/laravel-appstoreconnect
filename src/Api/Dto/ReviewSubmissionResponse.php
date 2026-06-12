<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * ReviewSubmissionResponse
 */
class ReviewSubmissionResponse extends SpatieData
{
    /**
     * @param  array<int, Actor|AppStoreVersion|App|ReviewSubmissionItem>|Optional  $included
     */
    public function __construct(
        public ReviewSubmission $data,
        public DocumentLinks $links,
        /** @var array<int, Actor|AppStoreVersion|App|ReviewSubmissionItem>|Optional */
        public array|Optional $included = new Optional,
    ) {}
}
