<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AgeRatingDeclarationUpdateRequestDataAttributes
 */
class AgeRatingDeclarationUpdateRequestDataAttributes extends SpatieData
{
    public function __construct(
        public bool|Optional|null $advertising = new Optional,
        public string|Optional|null $alcoholTobaccoOrDrugUseOrReferences = new Optional,
        public string|Optional|null $contests = new Optional,
        public bool|Optional|null $gambling = new Optional,
        public string|Optional|null $gamblingSimulated = new Optional,
        public string|Optional|null $gunsOrOtherWeapons = new Optional,
        public bool|Optional|null $healthOrWellnessTopics = new Optional,
        public KidsAgeBand|Optional $kidsAgeBand = new Optional,
        public bool|Optional|null $lootBox = new Optional,
        public string|Optional|null $medicalOrTreatmentInformation = new Optional,
        public bool|Optional|null $messagingAndChat = new Optional,
        public bool|Optional|null $parentalControls = new Optional,
        public string|Optional|null $profanityOrCrudeHumor = new Optional,
        public bool|Optional|null $ageAssurance = new Optional,
        public string|Optional|null $sexualContentGraphicAndNudity = new Optional,
        public string|Optional|null $sexualContentOrNudity = new Optional,
        public string|Optional|null $horrorOrFearThemes = new Optional,
        public string|Optional|null $matureOrSuggestiveThemes = new Optional,
        public bool|Optional|null $unrestrictedWebAccess = new Optional,
        public bool|Optional|null $userGeneratedContent = new Optional,
        public string|Optional|null $violenceCartoonOrFantasy = new Optional,
        public string|Optional|null $violenceRealisticProlongedGraphicOrSadistic = new Optional,
        public string|Optional|null $violenceRealistic = new Optional,
        public string|Optional|null $ageRatingOverride = new Optional,
        public string|Optional|null $ageRatingOverrideV2 = new Optional,
        public string|Optional|null $koreaAgeRatingOverride = new Optional,
        public string|Optional|null $developerAgeRatingInfoUrl = new Optional,
    ) {}
}
