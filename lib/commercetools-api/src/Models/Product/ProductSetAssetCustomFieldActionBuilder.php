<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Base\Builder;
use Commercetools\Base\JsonObject;

/**
 * @implements Builder<ProductSetAssetCustomFieldAction>
 */
final class ProductSetAssetCustomFieldActionBuilder implements Builder
{
    /**
     * @var ?int
     */
    private $variantId;

    /**
     * @var ?string
     */
    private $sku;

    /**
     * @var ?bool
     */
    private $staged;

    /**
     * @var ?string
     */
    private $assetId;

    /**
     * @var ?string
     */
    private $assetKey;

    /**
     * @var ?string
     */
    private $name;

    /**
     * @var ?JsonObject
     */
    private $value;

    /**
     * @return null|int
     */
    public function getVariantId()
    {
        return $this->variantId;
    }

    /**
     * @return null|string
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * @return null|bool
     */
    public function getStaged()
    {
        return $this->staged;
    }

    /**
     * @return null|string
     */
    public function getAssetId()
    {
        return $this->assetId;
    }

    /**
     * @return null|string
     */
    public function getAssetKey()
    {
        return $this->assetKey;
    }

    /**
     * @return null|string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return null|JsonObject
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @return $this
     */
    public function withVariantId(?int $variantId)
    {
        $this->variantId = $variantId;

        return $this;
    }

    /**
     * @return $this
     */
    public function withSku(?string $sku)
    {
        $this->sku = $sku;

        return $this;
    }

    /**
     * @return $this
     */
    public function withStaged(?bool $staged)
    {
        $this->staged = $staged;

        return $this;
    }

    /**
     * @return $this
     */
    public function withAssetId(?string $assetId)
    {
        $this->assetId = $assetId;

        return $this;
    }

    /**
     * @return $this
     */
    public function withAssetKey(?string $assetKey)
    {
        $this->assetKey = $assetKey;

        return $this;
    }

    /**
     * @return $this
     */
    public function withName(?string $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return $this
     */
    public function withValue(?JsonObject $value)
    {
        $this->value = $value;

        return $this;
    }

    public function build(): ProductSetAssetCustomFieldAction
    {
        return new ProductSetAssetCustomFieldActionModel(
            $this->variantId,
            $this->sku,
            $this->staged,
            $this->assetId,
            $this->assetKey,
            $this->name,
            $this->value
        );
    }

    public static function of(): ProductSetAssetCustomFieldActionBuilder
    {
        return new self();
    }
}
