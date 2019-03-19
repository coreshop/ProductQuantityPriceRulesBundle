<?php
/**
 * CoreShop.
 *
 * This source file is subject to the GNU General Public License version 3 (GPLv3)
 * For the full copyright and license information, please view the LICENSE.md and gpl-3.0.txt
 * files that are distributed with this source code.
 *
 * @copyright  Copyright (c) 2015-2019 Dominik Pfaffenbauer (https://www.pfaffenbauer.at)
 * @license    https://www.coreshop.org/license     GNU General Public License version 3 (GPLv3)
 */

namespace CoreShop\Bundle\ProductQuantityPriceRulesBundle\Templating\Helper;

use CoreShop\Component\ProductQuantityPriceRules\Exception\NoPriceFoundException;
use CoreShop\Component\ProductQuantityPriceRules\Exception\NoRuleFoundException;
use CoreShop\Component\ProductQuantityPriceRules\Model\ProductQuantityPriceRuleInterface;
use CoreShop\Component\ProductQuantityPriceRules\Model\QuantityRangeInterface;
use CoreShop\Component\ProductQuantityPriceRules\Model\QuantityRangePriceAwareInterface;

interface ProductQuantityPriceRuleRangesHelperInterface
{
    /**
     * @param QuantityRangePriceAwareInterface $product
     * @param array                            $context
     *
     * @return bool
     */
    public function hasActiveQuantityPriceRuleRanges(QuantityRangePriceAwareInterface $product, array $context);

    /**
     * @param QuantityRangePriceAwareInterface $product
     * @param array                            $context
     *
     * @throws NoRuleFoundException
     * @return ProductQuantityPriceRuleInterface
     */
    public function getQuantityPriceRule(QuantityRangePriceAwareInterface $product, array $context);

    /**
     * @param QuantityRangePriceAwareInterface $product
     * @param array                            $context
     *
     * @throws NoRuleFoundException
     * @return array
     */
    public function getQuantityPriceRuleRanges(QuantityRangePriceAwareInterface $product, array $context);


}
