<h2>Creating a new Happy Puppy application.</h2>
your app name is the same as your folder name
all your files will be namespaced to your app name
<p>This tutorial requires that you've <?php echo link_to("installed Happy Puppy", "/Installing/install") ?></p>
<p>1) Create a folder in your apps folder.  Name it with your app name (must be all lowercase).  For this example I'll use the name myapp</p>
<p>2) Create a file in your "myapp" folder named myappApplication.php.  You can copy the sampleApplication.php file from the sample application that comes with Happy Puppy, or you can put this content inside:</p>
<pre>
&lt;?php
namespace myapp;
class myappApplication extends \HappyPuppy\Application
{
}

?&gt;
</pre>
<p>If you copied sampleApplication.php, be sure to change the namespace and classname to use your apps name instead of sample.</p>
<p>There are a couple of special methods you can add to this class.</p>
<p>First, you may add a method called __init.  Happy Puppy will run this function whenever a route is requested belonging to the myapp application.  It's a good place to store code which will be called on every request.</p>
<p>Second, you may add a method named defaultController.  This method must return a string with a controller's name.  Routes without a controller name will use this one.</p>
<p>3) Add your application's name to the $_ENV["config"]["apps"] array in config/hp.config</p>
<pre class="code">$_ENV["config"]["apps"] = array("happypuppytools", "doc", "sample", "myapp");</pre>
<p>4) Create three folders under the myapp folder: "models", "controllers" and "views".</p>
<p>5) Create a file inside of the controllers folder, name HelloController.php</p>
<p>Open the file up in a text editor and add the following contents</p>
<pre>
&lt;?php

namespace myapp;
class HelloController extends \HappyPuppy\Controller
{
}

?&gt;
</pre>
<p>6) Add a function to the HelloController named world.  This function will just spit out the text hello world and render it on the screen.</p>
<pre>
&lt;?php

namespace myapp;
class HelloController extends \HappyPuppy\Controller
{
	public function world(){
		$this-&gt;renderText("Hello World!");
	}
}

?&gt;
</pre>
<p>7) Navigate to <a href="<?php echo rawurl_from_app("myapp", "hello", "world") // Note: rawurl is normally not used?>">the action you just created</a></p>
<p>8) If you saw "Hello World!" in your browser, great!  You are now ready to <?php echo link_to("learn more about views", "/Views/Basics")?></p>
<p>If you didn't see "Hello World", copy your error text and issue a ticket to the <a href="https://github.com/daveroberts/happypuppy/issues">github issue tracker</a>.  I read every issue I receive.</p>