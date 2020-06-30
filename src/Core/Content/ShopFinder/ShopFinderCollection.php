<?php declare(strict_types=1);

namespace SwagShopFinder\Core\Content\ShopFinder;

use Shopware\Core\Framework\DataAbstractionLayer\EntityCollection;

/**
 * @method void              add(CustomEntity $entity)
 * @method void              set(string $key, CustomEntity $entity)
 * @method ShopFinderCollection[]    getIterator()
 * @method ShopFinderCollection[]    getElements()
 * @method ShopFinderCollection|null get(string $key)
 * @method ShopFinderCollection|null first()
 * @method ShopFinderCollection|null last()
 */
class ShopFinderCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return ShopFinderEntity::class;
    }
}
