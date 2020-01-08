<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CartDiscount;

use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\LocalizedStringBuilder;
use Commercetools\Api\Models\Type\CustomFields;
use Commercetools\Api\Models\Type\CustomFieldsBuilder;
use Commercetools\Base\Builder;
use DateTimeImmutable;

/**
 * @implements Builder<CartDiscountDraft>
 */
final class CartDiscountDraftBuilder implements Builder
{
    /**
     * @var LocalizedString|?LocalizedStringBuilder
     */
    private $name;

    /**
     * @var ?string
     */
    private $key;

    /**
     * @var LocalizedString|?LocalizedStringBuilder
     */
    private $description;

    /**
     * @var CartDiscountValueDraft|?CartDiscountValueDraftBuilder
     */
    private $value;

    /**
     * @var ?string
     */
    private $cartPredicate;

    /**
     * @var CartDiscountTarget|?CartDiscountTargetBuilder
     */
    private $target;

    /**
     * @var ?string
     */
    private $sortOrder;

    /**
     * @var ?bool
     */
    private $isActive;

    /**
     * @var ?DateTimeImmutable
     */
    private $validFrom;

    /**
     * @var ?DateTimeImmutable
     */
    private $validUntil;

    /**
     * @var ?bool
     */
    private $requiresDiscountCode;

    /**
     * @var ?string
     */
    private $stackingMode;

    /**
     * @var CustomFields|?CustomFieldsBuilder
     */
    private $custom;

    /**
     * @return null|LocalizedString
     */
    public function getName()
    {
        return $this->name instanceof LocalizedStringBuilder ? $this->name->build() : $this->name;
    }

    /**
     * <p>User-specific unique identifier for a cart discount.
     * Must be unique across a project.
     * The field can be reset using the Set Key UpdateAction.</p>.
     *
     * @return null|string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @return null|LocalizedString
     */
    public function getDescription()
    {
        return $this->description instanceof LocalizedStringBuilder ? $this->description->build() : $this->description;
    }

    /**
     * @return null|CartDiscountValueDraft
     */
    public function getValue()
    {
        return $this->value instanceof CartDiscountValueDraftBuilder ? $this->value->build() : $this->value;
    }

    /**
     * <p>A valid Cart predicate.</p>.
     *
     * @return null|string
     */
    public function getCartPredicate()
    {
        return $this->cartPredicate;
    }

    /**
     * <p>Must not be set when the <code>value</code> has type <code>giftLineItem</code>, otherwise a CartDiscountTarget must be set.</p>.
     *
     * @return null|CartDiscountTarget
     */
    public function getTarget()
    {
        return $this->target instanceof CartDiscountTargetBuilder ? $this->target->build() : $this->target;
    }

    /**
     * <p>The string must contain a number between 0 and 1.
     * A discount with greater sort order is prioritized higher than a discount with lower sort order.
     * The sort order must be unambiguous among all cart discounts.</p>.
     *
     * @return null|string
     */
    public function getSortOrder()
    {
        return $this->sortOrder;
    }

    /**
     * <p>Only active discount can be applied to the cart.
     * Defaults to <code>true</code>.</p>.
     *
     * @return null|bool
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * @return null|DateTimeImmutable
     */
    public function getValidFrom()
    {
        return $this->validFrom;
    }

    /**
     * @return null|DateTimeImmutable
     */
    public function getValidUntil()
    {
        return $this->validUntil;
    }

    /**
     * <p>States whether the discount can only be used in a connection with a DiscountCode.
     * Defaults to <code>false</code>.</p>.
     *
     * @return null|bool
     */
    public function getRequiresDiscountCode()
    {
        return $this->requiresDiscountCode;
    }

    /**
     * <p>Specifies whether the application of this discount causes the following discounts to be ignored.
     * Defaults to Stacking.</p>.
     *
     * @return null|string
     */
    public function getStackingMode()
    {
        return $this->stackingMode;
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
    public function withName(?LocalizedString $name)
    {
        $this->name = $name;

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
    public function withDescription(?LocalizedString $description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return $this
     */
    public function withValue(?CartDiscountValueDraft $value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * @return $this
     */
    public function withCartPredicate(?string $cartPredicate)
    {
        $this->cartPredicate = $cartPredicate;

        return $this;
    }

    /**
     * @return $this
     */
    public function withTarget(?CartDiscountTarget $target)
    {
        $this->target = $target;

        return $this;
    }

    /**
     * @return $this
     */
    public function withSortOrder(?string $sortOrder)
    {
        $this->sortOrder = $sortOrder;

        return $this;
    }

    /**
     * @return $this
     */
    public function withIsActive(?bool $isActive)
    {
        $this->isActive = $isActive;

        return $this;
    }

    /**
     * @return $this
     */
    public function withValidFrom(?DateTimeImmutable $validFrom)
    {
        $this->validFrom = $validFrom;

        return $this;
    }

    /**
     * @return $this
     */
    public function withValidUntil(?DateTimeImmutable $validUntil)
    {
        $this->validUntil = $validUntil;

        return $this;
    }

    /**
     * @return $this
     */
    public function withRequiresDiscountCode(?bool $requiresDiscountCode)
    {
        $this->requiresDiscountCode = $requiresDiscountCode;

        return $this;
    }

    /**
     * @return $this
     */
    public function withStackingMode(?string $stackingMode)
    {
        $this->stackingMode = $stackingMode;

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
    public function withNameBuilder(?LocalizedStringBuilder $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return $this
     */
    public function withDescriptionBuilder(?LocalizedStringBuilder $description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return $this
     */
    public function withValueBuilder(?CartDiscountValueDraftBuilder $value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * @return $this
     */
    public function withTargetBuilder(?CartDiscountTargetBuilder $target)
    {
        $this->target = $target;

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

    public function build(): CartDiscountDraft
    {
        return new CartDiscountDraftModel(
            ($this->name instanceof LocalizedStringBuilder ? $this->name->build() : $this->name),
            $this->key,
            ($this->description instanceof LocalizedStringBuilder ? $this->description->build() : $this->description),
            ($this->value instanceof CartDiscountValueDraftBuilder ? $this->value->build() : $this->value),
            $this->cartPredicate,
            ($this->target instanceof CartDiscountTargetBuilder ? $this->target->build() : $this->target),
            $this->sortOrder,
            $this->isActive,
            $this->validFrom,
            $this->validUntil,
            $this->requiresDiscountCode,
            $this->stackingMode,
            ($this->custom instanceof CustomFieldsBuilder ? $this->custom->build() : $this->custom)
        );
    }

    public static function of(): CartDiscountDraftBuilder
    {
        return new self();
    }
}
