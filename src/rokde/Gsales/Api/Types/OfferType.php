<?php namespace Rokde\Gsales\Api\Types;

use Rokde\Gsales\Api\Contracts\IdentifierInterface;
use Rokde\Gsales\Api\Contracts\OfferStatus;
use Rokde\Gsales\Api\Types\Offer\Base as OfferBase;
use Rokde\Gsales\Api\Types\Offer\Position;
use Rokde\Gsales\Api\Types\Offer\Sum as OfferSum;

/**
 * Class OfferType
 *
 * @package Rokde\Gsales\Api\Types
 */
class OfferType extends Type implements IdentifierInterface
{
	/**
	 * @var OfferBase
	 */
	private $base;

	/**
	 * @var Position[]
	 */
	private $pos;

	/**
	 * @var OfferSum
	 */
	private $summ;

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
	 * @param OfferSum $sum
	 *
	 * @return $this
	 */
	public function setSum(OfferSum $sum)
	{
		$this->summ = $sum;

		return $this;
	}

	/**
	 * @return OfferSum
	 */
	public function getSum()
	{
		return $this->summ;
	}

	/**
	 * @param OfferBase $base
	 *
	 * @return $this
	 */
	public function setBase(OfferBase $base)
	{
		$this->base = $base;

		return $this;
	}

	/**
	 * @return OfferBase
	 */
	public function getBase()
	{
		return $this->base;
	}

	/**
	 * sets positions
	 *
	 * @param \Rokde\Gsales\Api\Types\Offer\Position[] $pos
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
	 * @return \Rokde\Gsales\Api\Types\Offer\Position[]
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

	/**
	 * is the offer open
	 *
	 * @return bool
	 */
	public function isOpen()
	{
		return $this->getBase()->getStatus() === OfferStatus::OPEN;
	}

	/**
	 * is the offer paid
	 *
	 * @return bool
	 */
	public function isPaid()
	{
		return $this->getBase()->getStatus() >= OfferStatus::BILLED;
	}
}
