<?php
/**
 * @author: James Murray <jaimz@vertigolabs.org>
 * @copyright:
 * @date: 9/1/2014
 * @time: 2:12 PM
 */

namespace VertigoLabs\UPSAPI\ShippingConfirm;

use VertigoLabs\UPSAPI\ShippingConfirm\Request\TransactionReference;

class Request
{
	/**
	 * request action constants
	 */
	const RequestAction_ShipConfirm = 'ShipConfirm';
	/**
	 * request option constants
	 */
	const RequestOption_Validate = 'validate';
	const RequestOption_NonValidate = 'nonvalidate';

	/**
	 * @var string
	 */
	private $requestAction;
	/**
	 * @var string
	 */
	private $requestOption;
	/**
	 * @var TransactionReference
	 */
	private $transactionReference;


}