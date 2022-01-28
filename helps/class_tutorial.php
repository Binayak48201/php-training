// Vocabuloary for oop  class

// Class
// object 
// instantiate 
// method 
// property

// function test($a,$b = ''){
// 	return $a;
// }
// dd(test(1));

$this-> special variable that's always available inside an object's scope, and it refers to the current object.

__construct
-> Contains 2 underscore
->in php 2 underscore denotes magic method
->special function that's called when we instantiate an object

:: (Static propery & Method)
A static property or method is one that can bbe used without instantiating the object,
Also called scope resolution operation
Static property is variable that belings to a class only, not an object
We can't refer to $this inside a static method.
Syntax
Classname::function()



class Team 
{
	public $name; 

	public $members = []; 

	public function __construct($name,$members) // Magic Method.
	{
		$this->name = $name;
		$this->members = $members;
	}

	public function add($name) //method
	{
		return $this->members[] = $name;
	}

	public static function start(...$parms)
	{
		return new static(...$parms); //Argument  unpacking
	}
}
// $collection = Team::start('PHP',[
// 	'John',
// 	'jane'
// ]);
// $collection = new Team('PHP',[
// 	'John',
// 	'jane'
// ]); //instantiate an object

// $collection->add('Binayak');

// dd($collection);

// array_merge(array1)
// array_filter(input)

class Post
{
	public $title;

	public $publised;

	public function __construct($title,$published) 
	{
		$this->title = $title;
		$this->published = $published;
	}
}
$posts = [
	new Post('My First Post',true,1,2,1,1,1,1,1,1,1,1,1,1,1),
	new Post('My Second Post',true),
	new Post('My Third Post',true),
	new Post('My Fourth Post',false),
	new Post('My Fifth Post',false)
];

// $ubpublishedPosts = array_filter($posts,function($post){
// 	return ! $post->published ;
// });


// $publishedPosts = array_filter($posts,function($post){
// 	return $post->published ;
// });
// dd($posts);

$test = array_map(function($post){
	$post->published = true;

	return $post;
},$posts);

dd($test);
