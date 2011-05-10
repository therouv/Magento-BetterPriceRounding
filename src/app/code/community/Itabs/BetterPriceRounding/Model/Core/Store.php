<?php
require_once 'Mage/Core/Model/Store.php';
/**
 * This class rounds the price correct to four decimal places
 * 
 * @category  Itabs
 * @package   Itabs_BetterPriceRounding
 * @author    ITABS GmbH / Rouven Alexander Rieker <rouven.rieker@itabs.de>
 * @copyright 2011 ITABS GmbH (http://www.itabs.de/). All rights served.
 * @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 * @version   $Id:$
 */
class Itabs_BetterPriceRounding_Model_Core_Store 
    extends Mage_Core_Model_Store
{
	/**
	 * Constructor
	 */
	protected function _construct()
    {
    	parent::_construct();
    }

    /**
     * Round price correct to four decimal places
     *
     * @param mixed $price
     * @return double
     */
    public function roundPrice($price)
    {
        return round($price, 4);
    }
}