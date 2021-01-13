<?php
namespace Custom\Notifyme\Block;

use Custom\Notifyme\Model\Status;

/**
 * Notifyme Block
 */

class Notifyme extends \Magento\Framework\View\Element\Template
{

    protected $_coreRegistry;
    protected $_scopeConfig;
    protected $_storeManager;

    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Magento\Framework\Registry $coreRegistry,
        array $data = []
    ) {
        parent::__construct($context, $data);
        $this->_coreRegistry = $coreRegistry;
        $this->_scopeConfig = $context->getScopeConfig();
        $this->_storeManager = $context->getStoreManager();
    }
}
