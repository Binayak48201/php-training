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
