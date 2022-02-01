<?php 

class Collection
{
	protected array $items;

	public function __construct(array $item)
	{
		$this->items = $item;
	}
	public function sum($key)
	{
		return array_sum(array_map(function($item) use ($key){
			return $item->$key; 
		}, $this->items));
	}
}

class VideoCollection extends Collection
{
	public function length()
	{
		return $this->sum('length');
	}
}

class video
{
	public  $title;
	public  $length;
	public function __construct($title,$length)
	{
		$this->title = $title;
		$this->length = $length;
	}
}

$videos = new VideoCollection([
	new video('Some video',100),
	new video('Some video2',200),
	new video('Some video3',300),
]);

var_dump($videos->length());
