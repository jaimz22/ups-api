<?php
/**
 * @author: James Murray <jaimz@vertigolabs.org>
 * @copyright:
 * @date: 9/1/2014
 * @time: 2:34 PM
 */

namespace VertigoLabs\UPSAPI\ShippingConfirm\Shipment;


use VertigoLabs\UPSAPI\ShippingConfirm\Shipment\SoldTo\Address;

class SoldTo
{
	/**
	 * @var string
	 */
	private $option;
	/**
	 * @var string
	 */
	private $companyName;
	/**
	 * @var string
	 */
	private $attentionName;
	/**
	 * @var string
	 */
	private $taxIdentificationNumber;
	/**
	 * @var string
	 */
	private $phoneNumber;
	/**
	 * @var Address
	 */
	private $address;
} 