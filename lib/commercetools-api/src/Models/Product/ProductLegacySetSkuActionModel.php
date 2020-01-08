<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Base\JsonObjectModel;

final class ProductLegacySetSkuActionModel extends JsonObjectModel implements ProductLegacySetSkuAction
{
    const DISCRIMINATOR_VALUE = 'legacySetSku';

    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?string
     */
    protected $sku;

    /**
     * @var ?int
     */
    protected $variantId;

    public function __construct(
        string $sku = null,
        int $variantId = null
    ) {
        $this->sku = $sku;
        $this->variantId = $variantId;
        $this->action = static::DISCRIMINATOR_VALUE;
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ProductUpdateAction::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * @return null|string
     */
    public function getSku()
    {
        if (is_null($this->sku)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ProductLegacySetSkuAction::FIELD_SKU);
            if (is_null($data)) {
                return null;
            }
            $this->sku = (string) $data;
        }

        return $this->sku;
    }

    /**
     * @return null|int
     */
    public function getVariantId()
    {
        if (is_null($this->variantId)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(ProductLegacySetSkuAction::FIELD_VARIANT_ID);
            if (is_null($data)) {
                return null;
            }
            $this->variantId = (int) $data;
        }

        return $this->variantId;
    }

    public function setSku(?string $sku): void
    {
        $this->sku = $sku;
    }

    public function setVariantId(?int $variantId): void
    {
        $this->variantId = $variantId;
    }
}
