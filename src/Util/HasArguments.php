<?php
/**
 * Created by PhpStorm.
 * User: Mystro Ken
 * Date: 18/06/2017
 * Time: 15:26
 */

namespace WordPruss\Util;


Trait HasArguments {

	/**
	 * Arguments array
	 * @var array
	 */
	protected $arguments = [];

	/**
	 * Defaults arguments
	 * @var array
	 */
	protected $defaults = [];

	/**
	 * Gets all arguments array.
	 *
	 * @return array
	 */
	public function getArguments() {
		return $this->arguments;
	}

	/**
	 * Sets the value of arguments array.
	 *
	 * @param array $arguments
	 * @return self
	 */
	public function setArguments( $arguments ) {
		$this->arguments = $arguments;

		return $this;
	}

	/**
	 * Gets the value of an argument.
	 *
	 * @param $argument
	 * @return mixed
	 */
	public function getArgument( $argument ){
		return $this->arguments[$argument];
	}

	/**
	 * Sets the value of an argument.
	 *
	 * @param $argument
	 * @param $value
	 * @return self
	 */
	public function setArgument( $argument, $value ){
		$this->arguments[$argument] = $value;

		return $this;
	}

	/**
	 * Gets the value of defaults arguments.
	 *
	 * @return array
	 */
	public function getDefaults() {
		return $this->defaults;
	}

	/**
	 * Sets the value of defaults arguments.
	 *
	 * @param array $defaults
	 * @return self
	 */
	public function setDefaults( $defaults ) {
		$this->defaults = $defaults;

		return $this;
	}


	/**
	 * Gets the default value of an argument.
	 *
	 * @param $argument
	 * @return mixed
	 */
	public function getDefault( $argument ){
		return $this->defaults[$argument];
	}

	/**
	 * Sets a default value to an argument.
	 *
	 * @param $argument
	 * @param $value
	 * @return self
	 */
	public function setDefault( $argument, $value ){
		$this->defaults[$argument] = $value;

		return $this;
	}


}