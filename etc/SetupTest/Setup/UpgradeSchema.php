<?php
namespace PiotrJaworski\SetupTest\Setup;

use \Magento\Framework\Setup\UpgradeSchemaInterface;
use \Magento\Framework\Setup\SchemaSetupInterface;
use \Magento\Framework\Setup\ModuleContextInterface;


class UpgradeSchema implements UpgradeSchemaInterface {
    
    protected $logger;
    
    public function __construct(\Psr\Log\LoggerInterface $logger) {
        $this->logger = $logger;
    }

    public function upgrade(SchemaSetupInterface $setup, ModuleContextInterface $context){
        
        $this->logger->addDebug('*****************************   Setup - Upgrade 5');
        mail('piotrjaworski@hotmail.com','** Setup - Upgrade 4','');
    }
}