<?php namespace Rokde\Gsales\Api\Types;

use Rokde\Gsales\Api\Contracts\IdentifierInterface;
use Rokde\Gsales\Api\Types\Contract\Base;
use Rokde\Gsales\Api\Types\Contract\Position;
use Rokde\Gsales\Api\Types\Contract\Sum;

/**
 * Class ContractType
 *
 * @package Rokde\Gsales\Api\Types
 */
class ContractType extends Type implements IdentifierInterface
{
	/**
	 * @var Base
	 */
	private $base;

	/**
	 * @var Position[]
	 */
	private $pos;

	/**
	 * @var Sum
	 */
	private $sum;

	/**
	 * returns the id of the offer
	 *
	 * @return int
	 */
	public function getId()
	{
		return $this->getBase()->getId();
	}

	/**
	 * @param Sum $sum
	 *
	 * @return $this
	 */
	public function setSum(Sum $sum)
	{
		$this->sum = $sum;

		return $this;
	}

	/**
	 * @return Sum
	 */
	public function getSum()
	{
		return $this->sum;
	}

	/**
	 * @param Base $base
	 *
	 * @return $this
	 */
	public function setBase(Base $base)
	{
		$this->base = $base;

		return $this;
	}

	/**
	 * @return Base
	 */
	public function getBase()
	{
		return $this->base;
	}

	/**
	 * sets positions
	 *
	 * @param \Rokde\Gsales\Api\Types\Contract\Position[] $pos
	 *
	 * @return $this
	 */
	public function setPositions($pos)
	{
		$this->pos = $pos;

		return $this;
	}

	/**
	 * returns Positions
	 *
	 * @return \Rokde\Gsales\Api\Types\Contract\Position[]
	 */
	public function getPositions()
	{
		return $this->pos;
	}

	/**
	 * adds a position
	 *
	 * @param Position $position
	 *
	 * @return $this
	 */
	public function addPosition(Position $position)
	{
		$this->pos[] = $position;

		return $this;
	}
}
