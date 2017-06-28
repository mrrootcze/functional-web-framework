<?php

use Doctrine\ORM;

/**
 * Trait which basically implements the IEntity interface
 */
trait TEntity
{
	/**
	 * Undocumented variable
	 *
	 * @var [type]
	 */
	private $id;

	/**
	 * @ORM\Column(name="date_created", type="datetime")
	 * @Assert\Type(\DateTime)
	 * @var \DateTime
	 */
	private $dateCreated;

	public function getId() : int
	{
		return $this->id;
	}

	public function getDateCreated() : \DateTime
	{
		return $this->dateCreated;
	}

	public function __construct(array $args)
	{
		$this->dateCreated = new \DateTime();

		foreach($args as $variable => $value)
		{
			if(is_function($this->{'set' . ucfirst($variable)}))
			{
				$this->$variable = $value;
				continue;
			}

			$class = get_class($this);
			throw new \InvalidArgumentException("Variable '{ $variable }' does not exist or is not publicly assignable on the entity '{ $class }'");
		}
	}
}

