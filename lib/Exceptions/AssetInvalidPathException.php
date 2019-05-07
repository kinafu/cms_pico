<?php

declare(strict_types=1);

namespace OCA\CMSPico\Exceptions;

class AssetInvalidPathException extends \Exception
{
	/**
	 * AssetInvalidPathException constructor.
	 *
	 * @param \Exception|null $previous
	 */
	public function __construct(\Exception $previous = null)
	{
		if ($previous) {
			parent::__construct($previous->getMessage(), $previous->getCode(), $previous);
		} else {
			parent::__construct();
		}
	}
}