<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Store;

use Commercetools\Api\Models\Channel\ChannelResourceIdentifierCollection;
use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Type\CustomFieldsDraft;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface StoreDraft extends JsonObject
{
    public const FIELD_KEY = 'key';
    public const FIELD_NAME = 'name';
    public const FIELD_LANGUAGES = 'languages';
    public const FIELD_DISTRIBUTION_CHANNELS = 'distributionChannels';
    public const FIELD_SUPPLY_CHANNELS = 'supplyChannels';
    public const FIELD_PRODUCT_SELECTIONS = 'productSelections';
    public const FIELD_CUSTOM = 'custom';

    /**
     * <p>User-specific unique identifier for the store.
     * The <code>key</code> is mandatory and immutable.
     * It is used to reference the store.</p>
     *
     * @return null|string
     */
    public function getKey();

    /**
     * <p>The name of the store</p>
     *
     * @return null|LocalizedString
     */
    public function getName();

    /**
     * @return null|array
     */
    public function getLanguages();

    /**
     * <p>Set of ResourceIdentifiers to a Channel with <code>ProductDistribution</code> role</p>
     *
     * @return null|ChannelResourceIdentifierCollection
     */
    public function getDistributionChannels();

    /**
     * <p>Set of ResourceIdentifiers of Channels with <code>InventorySupply</code> role</p>
     *
     * @return null|ChannelResourceIdentifierCollection
     */
    public function getSupplyChannels();

    /**
     * <p>Set of ResourceIdentifiers of Product Selections along with settings.
     * If <code>productSelections</code> is empty all products in the project are available in this Store.
     * If <code>productSelections</code> is not empty but there exists no <code>active</code> Product Selection then no Product is available in this Store.</p>
     *
     * @return null|ProductSelectionSettingDraftCollection
     */
    public function getProductSelections();

    /**
     * @return null|CustomFieldsDraft
     */
    public function getCustom();

    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void;

    /**
     * @param ?LocalizedString $name
     */
    public function setName(?LocalizedString $name): void;

    /**
     * @param ?array $languages
     */
    public function setLanguages(?array $languages): void;

    /**
     * @param ?ChannelResourceIdentifierCollection $distributionChannels
     */
    public function setDistributionChannels(?ChannelResourceIdentifierCollection $distributionChannels): void;

    /**
     * @param ?ChannelResourceIdentifierCollection $supplyChannels
     */
    public function setSupplyChannels(?ChannelResourceIdentifierCollection $supplyChannels): void;

    /**
     * @param ?ProductSelectionSettingDraftCollection $productSelections
     */
    public function setProductSelections(?ProductSelectionSettingDraftCollection $productSelections): void;

    /**
     * @param ?CustomFieldsDraft $custom
     */
    public function setCustom(?CustomFieldsDraft $custom): void;
}
