<?php
/**
 * @author: James Murray <jaimz@vertigolabs.org>
 * @copyright:
 * @date: 9/1/2014
 * @time: 2:13 PM
 */

namespace VertigoLabs\UPSAPI\ShippingConfirm\Request;


class TransactionReference
{
	/**
	 * @var string
	 */
	private $customerContext;

	function __construct($customerContext)
	{
		$this->customerContext = $customerContext;
	}

	/**
	 * @return string
	 */
	public function getCustomerContext()
	{
		return $this->customerContext;
	}

	/**
	 * @param string $customerContext
	 */
	public function setCustomerContext($customerContext)
	{
		$this->customerContext = $customerContext;
	}


}