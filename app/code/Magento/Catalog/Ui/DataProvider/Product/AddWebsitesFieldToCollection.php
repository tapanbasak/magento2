<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\Catalog\Ui\DataProvider\Product;

use Magento\Framework\Data\Collection;
use Magento\Ui\DataProvider\AddFieldToCollectionInterface;

/**
 * Class AddFieldToCollection
 */
class AddWebsitesFieldToCollection implements AddFieldToCollectionInterface
{
    /**
     * {@inheritdoc}
     */
    public function addField(Collection $collection, $field, $alias = null)
    {
        $collection->addWebsiteNamesToResult();
    }
}
