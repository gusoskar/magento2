<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Magento\Sales\Model\ResourceModel\Order\Invoice\Grid;

use Magento\Framework\Data\Collection\Db\FetchStrategyInterface as FetchStrategy;
use Magento\Framework\Data\Collection\EntityFactoryInterface as EntityFactory;
use Magento\Framework\Event\ManagerInterface as EventManager;
use Magento\Framework\View\Element\UiComponent\DataProvider\SearchResult;
use Magento\Sales\Model\ResourceModel\Order\Invoice;
use Psr\Log\LoggerInterface as Logger;

class Collection extends SearchResult
{
    /**
     * Initialize dependencies.
     *
     * @param EntityFactory $entityFactory
     * @param Logger        $logger
     * @param FetchStrategy $fetchStrategy
     * @param EventManager  $eventManager
     * @param string        $mainTable
     * @param string        $resourceModel
     */
    public function __construct(
        EntityFactory $entityFactory,
        Logger $logger,
        FetchStrategy $fetchStrategy,
        EventManager $eventManager,
        $mainTable = 'sales_invoice_grid',
        $resourceModel = Invoice::class
    ) {
        parent::__construct($entityFactory, $logger, $fetchStrategy, $eventManager, $mainTable, $resourceModel);
    }
}
