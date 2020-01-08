<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Base\Builder;

/**
 * @implements Builder<MyShoppingListChangeTextLineItemQuantityAction>
 */
final class MyShoppingListChangeTextLineItemQuantityActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $textLineItemId;

    /**
     * @var ?int
     */
    private $quantity;

    /**
     * @return null|string
     */
    public function getTextLineItemId()
    {
        return $this->textLineItemId;
    }

    /**
     * @return null|int
     */
    public function getQuantity()
    {
        return $this->quantity;
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
    public function withQuantity(?int $quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    public function build(): MyShoppingListChangeTextLineItemQuantityAction
    {
        return new MyShoppingListChangeTextLineItemQuantityActionModel(
            $this->textLineItemId,
            $this->quantity
        );
    }

    public static function of(): MyShoppingListChangeTextLineItemQuantityActionBuilder
    {
        return new self();
    }
}
