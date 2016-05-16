<?php
namespace PiotrJaworski\SetupTest\Setup;

use \Magento\Framework\Setup\InstallSchemaInterface;
use \Magento\Framework\Setup\SchemaSetupInterface;
use \Magento\Framework\Setup\ModuleContextInterface;

class InstallSchema implements InstallSchemaInterface
{

    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context){
        
        mail('piotrjaworski@hotmail.com','** Setup - Install','');
    }
}