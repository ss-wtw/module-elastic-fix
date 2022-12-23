<?php
/**
 * 
 * @category  SixtySeven
 * @package   SixtySeven_ElasticFix
 */

namespace SixtySeven\ElasticFix\Plugin\CatalogSearch\Model\Adapter\Mysql\Filter;


class AliasResolver
{ 
	/**
	 * add stock status filter case to Filter Alias Resolver
	 * as Amasty elastic search added new join into stock status which is causing conflict beacuse stock stauts join already been allied to main query
	 * @param  \Magento\CatalogSearch\Model\Adapter\Mysql\Filter\AliasResolver $subject [description]
	 * @param  [type]                                                          $result  [description]
	 * @return string                                                                   [description]
	 */
    public function afterGetAlias(\Magento\CatalogSearch\Model\Adapter\Mysql\Filter\AliasResolver $subject, $result)
    { 
    	/**
    	 * add stock_status_filter case to getAlias method
    	 */
        if($result=="stock_status_filter"){
        	$result = "stock_index";
        }
        return $result;
    
    }
}
