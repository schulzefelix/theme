<?php namespace Bkoetsier\Theme\Extension\Head;

use Illuminate\Contracts\Support\Renderable;

class Custom implements Renderable{

    /**
     * @var string
     */
    protected $custom;

    /**
     * @param string $custom
     */
    function __construct($custom)
	{
		$this->custom = $custom;
	}

	/**
	 * Get the evaluated contents of the object.
	 *
	 * @return string
	 */
	public function render()
	{
		return $this->custom;
	}

    /**
     * @return string
     */
    public function getCustom()
    {
        return $this->custom;
    }


}