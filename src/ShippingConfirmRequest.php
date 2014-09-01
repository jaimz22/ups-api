<?php
/**
 * @author: James Murray <jaimz@vertigolabs.org>
 * @copyright:
 * @date: 9/1/2014
 * @time: 1:15 PM
 */

namespace VertigoLabs\UPSAPI;


use VertigoLabs\UPSAPI\ShippingConfirm\Request;
use VertigoLabs\UPSAPI\ShippingConfirm\Shipment;

class ShippingConfirmRequest
{
	/**
	 * @var Request
	 */
	protected $request;
	/**
	 * @var Shipment
	 */
	protected $shipment;
	protected $labelSpecification;
	protected $receiptSpecification;
} 