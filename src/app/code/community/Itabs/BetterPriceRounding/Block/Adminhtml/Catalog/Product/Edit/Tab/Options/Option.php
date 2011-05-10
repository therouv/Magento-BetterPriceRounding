<?php
require_once 'Mage/Adminhtml/Block/Catalog/Product/Edit/Tab/Options/Option.php';
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
class Itabs_BetterPriceRounding_Block_Adminhtml_Catalog_Product_Edit_Tab_Options_Option 
    extends Mage_Adminhtml_Block_Catalog_Product_Edit_Tab_Options_Option
{
    /**
     * Returns a number_formatted number rounded correct to four decimal places
     * 
     * @param float $value
     * @param string $type
     * @return float $value
     */
    public function getPriceValue($value, $type)
    {
        if ($type == 'percent') {
            return number_format($value, 4, null, '');
        } elseif ($type == 'fixed') {
            return number_format($value, 4, null, '');
        }
    }	
}