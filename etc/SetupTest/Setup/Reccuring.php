<?php
namespace PiotrJaworski\SetupTest\Setup;

use \Magento\Framework\Setup\InstallSchemaInterface;
use \Magento\Framework\Setup\SchemaSetupInterface;
use \Magento\Framework\Setup\ModuleContextInterface;

class Recurring implements \Magento\Framework\Setup\InstallSchemaInterface
{
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        mail('piotrjaworski@hotmail.com','** Setup - Reccuring 1','');
    }
    
    
    public function upgrade(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        mail('piotrjaworski@hotmail.com','** Setup - Reccuring 1','');
    }    
}