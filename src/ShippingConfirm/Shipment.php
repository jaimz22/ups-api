<?php
/**
 * @author: James Murray <jaimz@vertigolabs.org>
 * @copyright:
 * @date: 9/1/2014
 * @time: 2:14 PM
 */

namespace VertigoLabs\UPSAPI\ShippingConfirm;


use VertigoLabs\UPSAPI\ShippingConfirm\Shipment\ReturnService;
use VertigoLabs\UPSAPI\ShippingConfirm\Shipment\ShipFrom;
use VertigoLabs\UPSAPI\ShippingConfirm\Shipment\Shipper;
use VertigoLabs\UPSAPI\ShippingConfirm\Shipment\ShipTo;
use VertigoLabs\UPSAPI\ShippingConfirm\Shipment\SoldTo;

class Shipment
{
	/**
	 * @var string
	 */
	private $description;
	/**
	 * @var ReturnService
	 */
	private $returnService;
	/**
	 * @var bool
	 */
	private $documentsOnly;
	/**
	 * @var Shipper
	 */
	private $shipper;
	/**
	 * @var ShipTo
	 */
	private $shipTo;
	/**
	 * @var ShipFrom
	 */
	private $shipFrom;
	/**
	 * @var SoldTo
	 */
	private $soldTo;

	private $paymentInformation;
	private $itemizedPaymentInformation;
	private $goodsNotInFreeCirculation;
	private $rateInformation;
	private $movementReferenceNumber;
	private $referenceNumber;
	private $service;
	private $invoicelineTotal;
	private $shipmentServiceOptions;
	private $package;
} 