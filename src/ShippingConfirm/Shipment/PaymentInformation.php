<?php
/**
 * @author: James Murray <jaimz@vertigolabs.org>
 * @copyright:
 * @date: 9/1/2014
 * @time: 2:37 PM
 */

namespace VertigoLabs\UPSAPI\ShippingConfirm\Shipment;


use VertigoLabs\UPSAPI\ShippingConfirm\Shipment\PaymentInformation\BillThirdParty;
use VertigoLabs\UPSAPI\ShippingConfirm\Shipment\PaymentInformation\FreightCollect;
use VertigoLabs\UPSAPI\ShippingConfirm\Shipment\PaymentInformation\PrePaid;

class PaymentInformation
{
	/**
	 * @var PrePaid
	 */
	private $prePaid;
	/**
	 * @var BillThirdParty
	 */
	private $billThirdParty;
	/**
	 * @var FreightCollect
	 */
	private $freightCollect;
	/**
	 * @var bool
	 */
	private $consigneeBilled;
} 