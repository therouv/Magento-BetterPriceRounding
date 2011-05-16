<?php
/**
 * This class adds a fix for precentage price additions..
 * 
 * @category  Itabs
 * @package   Itabs_BetterPriceRounding
 * @author    ITABS GmbH / Rouven Alexander Rieker <rouven.rieker@itabs.de>
 * @copyright 2011 ITABS GmbH (http://www.itabs.de/). All rights served.
 * @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 * @version   $Id:$
 */
class Itabs_BetterPriceRounding_Model_Product_Option_Type_Select
    extends Mage_Catalog_Model_Product_Option_Type_Select
{
    /**
     * Return final chargable price for option
     *
     * @param float   $price     Price of option
     * @param boolean $isPercent Price type - percent or fixed
     * @param float   $basePrice For percent price type
     * 
     * @return float Rounded price
     */
    protected function _getChargableOptionPrice($price, $isPercent, $basePrice)
    {
        if ($isPercent) {
            $price = ($basePrice * $price / 100);
        }
        $price = round($price, 2);
        return $price;
    }
}