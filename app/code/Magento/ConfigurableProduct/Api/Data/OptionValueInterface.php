<?php
/**
 *
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\ConfigurableProduct\Api\Data;

interface OptionValueInterface extends \Magento\Framework\Api\ExtensibleDataInterface
{
    /**
     * @return float|null
     */
    public function getPricingValue();

    /**
     * @param float $pricingValue
     * @return $this
     */
    public function setPricingValue($pricingValue);

    /**
     * @return int|null
     */
    public function getIsPercent();

    /**
     * @param int $isPercent
     * @return $this
     */
    public function setIsPercent($isPercent);

    /**
     * @return int
     */
    public function getValueIndex();

    /**
     * @param int $valueIndex
     * @return $this
     */
    public function setValueIndex($valueIndex);
}
