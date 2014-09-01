<?php
/**
 * @author: James Murray <jaimz@vertigolabs.org>
 * @copyright:
 * @date: 9/1/2014
 * @time: 2:24 PM
 */

namespace VertigoLabs\UPSAPI\ShippingConfirm\Shipment\SoldTo;


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
}