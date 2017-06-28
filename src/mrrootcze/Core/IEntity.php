<?php

namespace Mrrootcze\Core;

/**
 * Interface for every normalized entity
 * Normalized entity contains
 * @package Mrrootcze\Core
 * @author Lukas Korinek
 */
interface IEntity
{

	/**
	 * Gets unique identifier of the entity
	 * @return int
	 */
	public function getId() : int;

	/**
	 * Gets creation date of the entity
	 * @return \DateTime
	 */
	public function getDateCreated() : \DateTime;
}
