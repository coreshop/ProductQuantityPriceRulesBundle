<?php
/**
 * CoreShop.
 *
 * This source file is subject to the GNU General Public License version 3 (GPLv3)
 * For the full copyright and license information, please view the LICENSE.md and gpl-3.0.txt
 * files that are distributed with this source code.
 *
 * @copyright  Copyright (c) CoreShop GmbH (https://www.coreshop.org)
 * @license    https://www.coreshop.org/license     GPLv3 and CCL
 */

declare(strict_types=1);

namespace CoreShop\Bundle\ProductQuantityPriceRulesBundle\Form\Type;

use CoreShop\Bundle\RuleBundle\Form\Type\RuleConditionCollectionType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProductQuantityPriceRuleConditionCollectionType extends RuleConditionCollectionType
{
    public function configureOptions(OptionsResolver $resolver): void
    {
        parent::configureOptions($resolver);

        $resolver->setDefault('entry_type', ProductQuantityPriceRuleConditionType::class);
    }

    public function getBlockPrefix(): string
    {
        return 'coreshop_product_quantity_price_rule_condition_collection';
    }
}
