<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\LocalizedStringBuilder;
use Commercetools\Base\Builder;

/**
 * @implements Builder<MyShoppingListSetTextLineItemDescriptionAction>
 */
final class MyShoppingListSetTextLineItemDescriptionActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $textLineItemId;

    /**
     * @var LocalizedString|?LocalizedStringBuilder
     */
    private $description;

    /**
     * @return null|string
     */
    public function getTextLineItemId()
    {
        return $this->textLineItemId;
    }

    /**
     * @return null|LocalizedString
     */
    public function getDescription()
    {
        return $this->description instanceof LocalizedStringBuilder ? $this->description->build() : $this->description;
    }

    /**
     * @return $this
     */
    public function withTextLineItemId(?string $textLineItemId)
    {
        $this->textLineItemId = $textLineItemId;

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
    public function withDescriptionBuilder(?LocalizedStringBuilder $description)
    {
        $this->description = $description;

        return $this;
    }

    public function build(): MyShoppingListSetTextLineItemDescriptionAction
    {
        return new MyShoppingListSetTextLineItemDescriptionActionModel(
            $this->textLineItemId,
            ($this->description instanceof LocalizedStringBuilder ? $this->description->build() : $this->description)
        );
    }

    public static function of(): MyShoppingListSetTextLineItemDescriptionActionBuilder
    {
        return new self();
    }
}
