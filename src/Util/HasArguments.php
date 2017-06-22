<?php

namespace WordPruss\Util;

/**
 * Trait HasArguments
 *
 * @package WordPruss\Util
 * @author Mystro Ken <mystroken@gmail.com>
 */
Trait HasArguments {

	/**
	 * Arguments.
	 *
	 * @var array
	 */
	protected $arguments = [];

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

		return array_key_exists( $argument, $this->arguments )
			? $this->arguments[$argument]
			: ''
		;
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

		return array_key_exists( $argument, $this->defaults )
			? $this->defaults[$argument]
			: ''
		;
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

	/**
	 * Gets required arguments.
	 *
	 * @return array
	 */
	public function getRequired() {
		return $this->required;
	}

	/**
	 * Set required arguments.
	 *
	 * @param array $required
	 * @return self
	 */
	public function setRequired( $required ) {
		$this->required = $required;
		return $this;
	}

	/**
	 * Makes sure required arguments are present and not empty.
	 *
	 * @throws \InvalidArgumentException
	 */
	protected function checkRequiredArguments(){

		If( !empty($this->required) ){

			foreach( $this->required as $argument ){

				if( !array_key_exists($argument, $this->arguments)
				    OR  empty($this->arguments[$argument])
				){
					throw new \InvalidArgumentException("'{$argument}' is a required argument. It has to be set and valued!");
				}

			}

		}

	}

}
