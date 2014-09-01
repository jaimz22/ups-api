<?php
/**
 * @author: James Murray <jaimz@vertigolabs.org>
 * @copyright:
 * @date: 9/1/2014
 * @time: 2:27 PM
 */

namespace VertigoLabs\UPSAPI\ShippingConfirm\Shipment;


use VertigoLabs\UPSAPI\ShippingConfirm\Shipment\ShipTo\Address;

class ShipTo
{
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
	/**
	 * @var string
	 */
	private $locationId;
} 