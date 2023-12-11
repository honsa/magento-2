<?php
/**
 PostFinance Checkout Magento 2
 *
 * This Magento 2 extension enables to process payments with PostFinance Checkout (https://postfinance.ch/en/business/products/e-commerce/postfinance-checkout-all-in-one.html).
 *
 * @package PostFinanceCheckout_Payment
 * @author wallee AG (https://postfinance.ch/en/business/products/e-commerce/postfinance-checkout-all-in-one.html)
 * @license http://www.apache.org/licenses/LICENSE-2.0  Apache Software License (ASL 2.0)

 */
namespace PostFinanceCheckout\Payment\Model\ResourceModel\RefundJob;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use PostFinanceCheckout\Payment\Model\RefundJob;
use PostFinanceCheckout\Payment\Model\ResourceModel\RefundJob as ResourceModel;

/**
 * Refund job resource collection.
 */
class Collection extends AbstractCollection
{

    /**
     *
     * @var string
     */
    protected $_idFieldName = 'entity_id';

    /**
     * Event prefix
     *
     * @var string
     */
    protected $_eventPrefix = 'postfinancecheckout_payment_refund_job_resource_collection';

    /**
     * Event object
     *
     * @var string
     */
    protected $_eventObject = 'job_collection';

    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init(RefundJob::class, ResourceModel::class);
    }

    /**
     * Filters the collection by space.
     *
     * @param int $spaceId
     * @return $this
     */
    public function addSpaceFilter($spaceId)
    {
        $this->addFieldToFilter('main_table.space_id', $spaceId);
        return $this;
    }
}