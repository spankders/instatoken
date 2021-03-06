<?php

declare ( strict_types = 1 );

namespace Ch0c01dxyz\InstaToken\Objects;

/**
 * @author Egar Rizki <ch0c01d.xyz@gmail.com>
 */
class TagName
{
	/**
	 * @var tagName
	 */
	protected $tagName;

	/**
	 * Tag Name constructor
	 *
	 * @param string $tn
	 */
	public function __construct ( string $tn )
	{
		$this->tagName = $tn;
	}

	/**
	 * @return string
	 */
	public function __toString () : string
	{
		return $this->tagName;
	}
}