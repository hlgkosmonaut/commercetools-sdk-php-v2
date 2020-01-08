<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Review;

use Commercetools\Api\Models\Common\CreatedBy;
use Commercetools\Api\Models\Common\CreatedByBuilder;
use Commercetools\Api\Models\Common\LastModifiedBy;
use Commercetools\Api\Models\Common\LastModifiedByBuilder;
use Commercetools\Api\Models\Customer\CustomerReference;
use Commercetools\Api\Models\Customer\CustomerReferenceBuilder;
use Commercetools\Api\Models\State\StateReference;
use Commercetools\Api\Models\State\StateReferenceBuilder;
use Commercetools\Api\Models\Type\CustomFields;
use Commercetools\Api\Models\Type\CustomFieldsBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\JsonObject;
use DateTimeImmutable;

/**
 * @implements Builder<Review>
 */
final class ReviewBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $id;

    /**
     * @var ?int
     */
    private $version;

    /**
     * @var ?DateTimeImmutable
     */
    private $createdAt;

    /**
     * @var ?DateTimeImmutable
     */
    private $lastModifiedAt;

    /**
     * @var LastModifiedBy|?LastModifiedByBuilder
     */
    private $lastModifiedBy;

    /**
     * @var CreatedBy|?CreatedByBuilder
     */
    private $createdBy;

    /**
     * @var ?string
     */
    private $key;

    /**
     * @var ?string
     */
    private $uniquenessValue;

    /**
     * @var ?string
     */
    private $locale;

    /**
     * @var ?string
     */
    private $authorName;

    /**
     * @var ?string
     */
    private $title;

    /**
     * @var ?string
     */
    private $text;

    /**
     * @var ?JsonObject
     */
    private $target;

    /**
     * @var ?bool
     */
    private $includedInStatistics;

    /**
     * @var ?int
     */
    private $rating;

    /**
     * @var StateReference|?StateReferenceBuilder
     */
    private $state;

    /**
     * @var CustomerReference|?CustomerReferenceBuilder
     */
    private $customer;

    /**
     * @var CustomFields|?CustomFieldsBuilder
     */
    private $custom;

    /**
     * <p>The unique ID of the review.</p>.
     *
     * @return null|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * <p>The current version of the review.</p>.
     *
     * @return null|int
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * @return null|DateTimeImmutable
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @return null|DateTimeImmutable
     */
    public function getLastModifiedAt()
    {
        return $this->lastModifiedAt;
    }

    /**
     * <p>Present on resources updated after 1/02/2019 except for events not tracked.</p>.
     *
     * @return null|LastModifiedBy
     */
    public function getLastModifiedBy()
    {
        return $this->lastModifiedBy instanceof LastModifiedByBuilder ? $this->lastModifiedBy->build() : $this->lastModifiedBy;
    }

    /**
     * <p>Present on resources created after 1/02/2019 except for events not tracked.</p>.
     *
     * @return null|CreatedBy
     */
    public function getCreatedBy()
    {
        return $this->createdBy instanceof CreatedByBuilder ? $this->createdBy->build() : $this->createdBy;
    }

    /**
     * <p>User-specific unique identifier for the review.</p>.
     *
     * @return null|string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @return null|string
     */
    public function getUniquenessValue()
    {
        return $this->uniquenessValue;
    }

    /**
     * @return null|string
     */
    public function getLocale()
    {
        return $this->locale;
    }

    /**
     * @return null|string
     */
    public function getAuthorName()
    {
        return $this->authorName;
    }

    /**
     * @return null|string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @return null|string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * <p>Identifies the target of the review.
     * Can be a Product or a Channel</p>.
     *
     * @return null|JsonObject
     */
    public function getTarget()
    {
        return $this->target;
    }

    /**
     * <p>Indicates if this review is taken into account in the ratings statistics of the target.
     * A review is per default used in the statistics, unless the review is in a state that does not have the role <code>ReviewIncludedInStatistics</code>.
     * If the role of a State is modified after the calculation of this field, the calculation is not updated.</p>.
     *
     * @return null|bool
     */
    public function getIncludedInStatistics()
    {
        return $this->includedInStatistics;
    }

    /**
     * <p>Number between -100 and 100 included.</p>.
     *
     * @return null|int
     */
    public function getRating()
    {
        return $this->rating;
    }

    /**
     * @return null|StateReference
     */
    public function getState()
    {
        return $this->state instanceof StateReferenceBuilder ? $this->state->build() : $this->state;
    }

    /**
     * <p>The customer who created the review.</p>.
     *
     * @return null|CustomerReference
     */
    public function getCustomer()
    {
        return $this->customer instanceof CustomerReferenceBuilder ? $this->customer->build() : $this->customer;
    }

    /**
     * @return null|CustomFields
     */
    public function getCustom()
    {
        return $this->custom instanceof CustomFieldsBuilder ? $this->custom->build() : $this->custom;
    }

    /**
     * @return $this
     */
    public function withId(?string $id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return $this
     */
    public function withVersion(?int $version)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * @return $this
     */
    public function withCreatedAt(?DateTimeImmutable $createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * @return $this
     */
    public function withLastModifiedAt(?DateTimeImmutable $lastModifiedAt)
    {
        $this->lastModifiedAt = $lastModifiedAt;

        return $this;
    }

    /**
     * @return $this
     */
    public function withLastModifiedBy(?LastModifiedBy $lastModifiedBy)
    {
        $this->lastModifiedBy = $lastModifiedBy;

        return $this;
    }

    /**
     * @return $this
     */
    public function withCreatedBy(?CreatedBy $createdBy)
    {
        $this->createdBy = $createdBy;

        return $this;
    }

    /**
     * @return $this
     */
    public function withKey(?string $key)
    {
        $this->key = $key;

        return $this;
    }

    /**
     * @return $this
     */
    public function withUniquenessValue(?string $uniquenessValue)
    {
        $this->uniquenessValue = $uniquenessValue;

        return $this;
    }

    /**
     * @return $this
     */
    public function withLocale(?string $locale)
    {
        $this->locale = $locale;

        return $this;
    }

    /**
     * @return $this
     */
    public function withAuthorName(?string $authorName)
    {
        $this->authorName = $authorName;

        return $this;
    }

    /**
     * @return $this
     */
    public function withTitle(?string $title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @return $this
     */
    public function withText(?string $text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * @return $this
     */
    public function withTarget(?JsonObject $target)
    {
        $this->target = $target;

        return $this;
    }

    /**
     * @return $this
     */
    public function withIncludedInStatistics(?bool $includedInStatistics)
    {
        $this->includedInStatistics = $includedInStatistics;

        return $this;
    }

    /**
     * @return $this
     */
    public function withRating(?int $rating)
    {
        $this->rating = $rating;

        return $this;
    }

    /**
     * @return $this
     */
    public function withState(?StateReference $state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * @return $this
     */
    public function withCustomer(?CustomerReference $customer)
    {
        $this->customer = $customer;

        return $this;
    }

    /**
     * @return $this
     */
    public function withCustom(?CustomFields $custom)
    {
        $this->custom = $custom;

        return $this;
    }

    /**
     * @return $this
     */
    public function withLastModifiedByBuilder(?LastModifiedByBuilder $lastModifiedBy)
    {
        $this->lastModifiedBy = $lastModifiedBy;

        return $this;
    }

    /**
     * @return $this
     */
    public function withCreatedByBuilder(?CreatedByBuilder $createdBy)
    {
        $this->createdBy = $createdBy;

        return $this;
    }

    /**
     * @return $this
     */
    public function withStateBuilder(?StateReferenceBuilder $state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * @return $this
     */
    public function withCustomerBuilder(?CustomerReferenceBuilder $customer)
    {
        $this->customer = $customer;

        return $this;
    }

    /**
     * @return $this
     */
    public function withCustomBuilder(?CustomFieldsBuilder $custom)
    {
        $this->custom = $custom;

        return $this;
    }

    public function build(): Review
    {
        return new ReviewModel(
            $this->id,
            $this->version,
            $this->createdAt,
            $this->lastModifiedAt,
            ($this->lastModifiedBy instanceof LastModifiedByBuilder ? $this->lastModifiedBy->build() : $this->lastModifiedBy),
            ($this->createdBy instanceof CreatedByBuilder ? $this->createdBy->build() : $this->createdBy),
            $this->key,
            $this->uniquenessValue,
            $this->locale,
            $this->authorName,
            $this->title,
            $this->text,
            $this->target,
            $this->includedInStatistics,
            $this->rating,
            ($this->state instanceof StateReferenceBuilder ? $this->state->build() : $this->state),
            ($this->customer instanceof CustomerReferenceBuilder ? $this->customer->build() : $this->customer),
            ($this->custom instanceof CustomFieldsBuilder ? $this->custom->build() : $this->custom)
        );
    }

    public static function of(): ReviewBuilder
    {
        return new self();
    }
}
