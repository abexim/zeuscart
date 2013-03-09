<?php
/**
* GNU General Public License.

* This file is part of ZeusCart V2.3.

* ZeusCart V2.3 is free software: you can redistribute it and/or modify
* it under the terms of the GNU General Public License as published by
* the Free Software Foundation, either version 3 of the License, or
* (at your option) any later version.
* 
* ZeusCart V2.3 is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
* GNU General Public License for more details.
* 
* You should have received a copy of the GNU General Public License
* along with Foobar. If not, see <http://www.gnu.org/licenses/>.
*
*/
class Model_MNewProducts
{
var $output = array();	
 	/**
	* This function is used to Display the New Product Page
 	*/
	function newProducts()
	{
		include_once('classes/Core/CNewProducts.php');
		include_once('classes/Display/DNewProducts.php');
		include('classes/Core/CKeywordSearch.php');
  		include('classes/Display/DKeywordSearch.php');
		include('classes/Core/CProductDetail.php');
		include('classes/Display/DProductDetail.php');
		include('classes/Core/CHome.php');
		include('classes/Core/CAddCart.php');
		include('classes/Display/DAddCart.php');
		
		include_once('classes/Core/CCurrencySettings.php');
		Core_CCurrencySettings::getDefaultCurrency();
		
		$output['cartSnapShot'] = Core_CAddCart::cartSnapShot();
		$output['sitelogo']=Core_CHome::getLogo();
		$output['pagetitle']=Core_CHome::pageTitle();
		$output['timezone']=Core_CHome::setTimeZone();	
		$output['currentDate']=date('D,M d,Y - h:i A');
		$output['signup']=Display_DUserRegistration::signUp();
		$output['skinname']=Core_CHome::skinName();
		$output['googleanalytics']=Core_CHome::getGoogleAnalyticsCode();
		$output['dropdowncat']=Core_CKeywordSearch::categoryDropDown();
		$default=new Core_CNewProducts();
		$output['newproducts']=$default->newProducts();
		$output['currencysettings']=Core_CUserRegistration::showCurrencySettings();
		Bin_Template::createTemplate('products.html',$output);
	}
	/**
	* This function is used to Display the  Product list  Page
 	*/
	function viewProducts()
	{
		if($_GET['action']=='')
		{
			include_once('classes/Core/CNewProducts.php');
			include_once('classes/Display/DNewProducts.php');
			include('classes/Core/CKeywordSearch.php');
			include('classes/Display/DKeywordSearch.php');
			include('classes/Core/CProductDetail.php');
			include('classes/Core/CUserRegistration.php');
			include('classes/Display/DUserRegistration.php');
			include('classes/Display/DProductDetail.php');
			include('classes/Core/CHome.php');
			include('classes/Core/CAddCart.php');
			include('classes/Display/DAddCart.php');
			
			include_once('classes/Core/CCurrencySettings.php');
			Core_CCurrencySettings::getDefaultCurrency();
			
			$output['cartSnapShot'] = Core_CAddCart::cartSnapShot();
			$output['sitelogo']=Core_CHome::getLogo();
			$output['pagetitle']=Core_CHome::pageTitle();
			$output['timezone']=Core_CHome::setTimeZone();	
			$output['currentDate']=date('D,M d,Y - h:i A');
			$output['headermenu'] = Core_CUserRegistration::showHeaderMenu();
			$output['currencysettings']=Core_CUserRegistration::showCurrencySettings();
			$output['skinname']=Core_CHome::skinName();
			$output['googleanalytics']=Core_CHome::getGoogleAnalyticsCode();
			$output['dropdowncat']=Core_CKeywordSearch::categoryDropDown();
			$output['categorytree'] = Core_CProductDetail::showCategoryTree();
			$default=new Core_CNewProducts();
			$output['viewproducts']=$default->viewProducts();
			
			Bin_Template::createTemplate('listtheproduct.html',$output);
		}
		else
		{
			include_once('classes/Core/CNewProducts.php');
			include_once('classes/Display/DNewProducts.php');
			include('classes/Core/CKeywordSearch.php');
			include('classes/Display/DKeywordSearch.php');
			include('classes/Core/CProductDetail.php');
			include('classes/Core/CUserRegistration.php');
			include('classes/Display/DUserRegistration.php');
			include('classes/Display/DProductDetail.php');
			include('classes/Core/CHome.php');
			include('classes/Core/CAddCart.php');
			include('classes/Display/DAddCart.php');
			
			include_once('classes/Core/CCurrencySettings.php');
			Core_CCurrencySettings::getDefaultCurrency();
			
			$output['cartSnapShot'] = Core_CAddCart::cartSnapShot();
			$output['sitelogo']=Core_CHome::getLogo();
			$output['pagetitle']=Core_CHome::pageTitle();
			$output['timezone']=Core_CHome::setTimeZone();	
			$output['currentDate']=date('D,M d,Y - h:i A');
			$output['headermenu'] = Core_CUserRegistration::showHeaderMenu();
			$output['currencysettings']=Core_CUserRegistration::showCurrencySettings();
			$output['skinname']=Core_CHome::skinName();
			$output['googleanalytics']=Core_CHome::getGoogleAnalyticsCode();
			$output['dropdowncat']=Core_CKeywordSearch::categoryDropDown();
			$output['categorytree'] = Core_CProductDetail::showCategoryTree();
			$default=new Core_CNewProducts();
			$output['gridviewproducts']=$default->viewProducts();
			
			Bin_Template::createTemplate('grid_list_product.html',$output);
		}

	}

}
?>