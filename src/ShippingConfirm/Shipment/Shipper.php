<?php
/**
 * @author: James Murray <jaimz@vertigolabs.org>
 * @copyright:
 * @date: 9/1/2014
 * @time: 2:23 PM
 */

namespace VertigoLabs\UPSAPI\ShippingConfirm\Shipment;


use VertigoLabs\UPSAPI\ShippingConfirm\Shipment\Shipper\Address;

class Shipper
{
	/**
	 * @var string
	 */
	private $name;
	/**
	 * @var string
	 */
	private $attentionName;
	/**
	 * @var string
	 */
	private $shipperNumber;
	/**
	 * @var string
	 */
	private $taxIdenticationNumber;
	/**
	 * @var string
	 */
	private $phoneNumber;
	/**
	 * @var string
	 */
	private $faxNumber;
	/**
	 * @var string
	 */
	private $emailAddress;
	/**
	 * @var Address
	 */
	private $address;
} 