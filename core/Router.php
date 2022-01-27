<?php 

class Router
{
	protected $routes = [];

	public function define($route)
	{
		$this->routes = $route;
	}

	public function direct($url) 
	{
		if(array_key_exists($url, $this->routes)){
			return $this->routes[$url]; 
		}
		throw new Exception('No route found');
	}
	// Cliff Hanger
	public static function load($file)
	{
		$routes = new static;

		require $file;

		return $routes;
	}
}