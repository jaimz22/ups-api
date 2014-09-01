<?php
/**
 * @author: James Murray <jaimz@vertigolabs.org>
 * @copyright:
 * @date: 9/1/2014
 * @time: 2:28 PM
 */

namespace VertigoLabs\UPSAPI\ShippingConfirm\Shipment\ShipTo;


class Address
{
	/**
	 * @var string
	 */
	private $addressLine1;
	/**
	 * @var string
	 */
	private $addressLine2;
	/**
	 * @var string
	 */
	private $addressLine3;
	/**
	 * @var string
	 */
	private $city;
	/**
	 * @var string
	 */
	private $stateProvinceCode;
	/**
	 * @var string
	 */
	private $postalCode;
	/**
	 * @var string
	 */
	private $countryCode;
	/**
	 * @var bool
	 */
	private $residentialAddress;
} 