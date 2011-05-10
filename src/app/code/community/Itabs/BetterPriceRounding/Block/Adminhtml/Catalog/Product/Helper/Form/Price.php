<?php
require_once 'Mage/Adminhtml/Block/Catalog/Product/Helper/Form/Price.php';
/**
 * This class provides a overwritten method which rounds correct to four places
 * which is neccessary to have correct prices/numbers.
 * 
 * @category  Itabs
 * @package   Itabs_BetterPriceRounding
 * @author    ITABS GmbH / Rouven Alexander Rieker <rouven.rieker@itabs.de>
 * @copyright 2011 ITABS GmbH (http://www.itabs.de/). All rights served.
 * @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 * @version   $Id:$
 */
class Itabs_BetterPriceRounding_Block_Adminhtml_Catalog_Product_Helper_Form_Price 
    extends Mage_Adminhtml_Block_Catalog_Product_Helper_Form_Price
{	
    /**
     * Returns a number_formatted number rounded correct to four decimal places
     * 
     * @param Varien_Object $index
     * @return float $value
     */
    public function getEscapedValue($index=null)
    {
        $value = $this->getValue();
        if (!is_numeric($value)) {
            return null;
        }
        return number_format($value, 4, null, '');
    }
}