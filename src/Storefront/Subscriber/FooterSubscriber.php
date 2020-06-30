<?php declare(strict_types=1);

namespace SwagShopFinder\Storefront\Subscriber;

use SwagShopFinder\Core\Content\ShopFinder\ShopFinderCollection;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Shopware\Storefront\Pagelet\Footer\FooterPageletLoadedEvent;
use Shopware\Core\System\SystemConfig\SystemConfigService;
use Shopware\Core\Framework\DataAbstractionLayer\EntityRepositoryInterface;
use Shopware\Core\Framework\DataAbstractionLayer\Search\Criteria;
use Shopware\Core\Framework\DataAbstractionLayer\Search\Filter\EqualsFilter;
use Shopware\Core\Framework\Context;


/**
 *
 */
class FooterSubscriber implements EventSubscriberInterface
{

    public function __construct(SystemConfigService $systemConfigService, EntityRepositoryInterface $shopFinderRepository)
    {
        $this->systemConfigService = $systemConfigService;
        $this->shopFinderRepository = $shopFinderRepository;
    }

    public static function getSubscribedEvents()
    {
        return [
            FooterPageletLoadedEvent::class => 'onFooterPageletLoaded'
        ];
    }

    public function onFooterPageletLoaded(FooterPageletLoadedEvent $event): void
    {

        if(!$this->systemConfigService->get('SwagShopFinder.config.showInstorefront')) {
          return;
        }

        $shops = $this->fetchShops($event->getContext());

        $event->getPagelet()->addExtension('swag_shop_finder', $shops);
    }

    private function fetchShops(Context $getContext)
    {
        $criteria = new Criteria();
        $criteria->addAssociation('country');
        $criteria->addFilter(new EqualsFilter('active', '1'));
        $criteria->setLimit(5);

        /** @var ShopFinderCollection $shopFinderCollection **/
        $shopFinderCollection = $this->shopFinderRepository->search($criteria, $getContext)->getEntities();
        return $shopFinderCollection;
    }
}
