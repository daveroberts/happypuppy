<h2>The Basics</h2>
<p>All of these examples are in the 'basics' controller, found in /apps/sample/controllers/basicsController.php</p>
<div class="example">
<p><?php echo  link_to_action('Hello World', 'hello') ?></p>
<pre>
public function hello()
{
  $this-&gt;render_text('Hello World - Simple text example');
}
</pre>
<p>Basic Hello World.  By saying <span class="code">$this-&gt;render_text();</span>, we are telling Happy Puppy not to load a template file.  Alternatively, you can write
<pre>
echo "Hello World";
$this-&gt;text_only = true;
</pre>
<p>This format may be easier for multi-line output (or debugging)</p>
</div>

<div class="example">
<p><?php echo  link_to_action('Simple Layout Example', 'simple'); ?></p>
<pre>
public function simple()
{
  $this-&gt;greeting = "Howdy";
}
</pre>
<p>This is a simple example using a layout file.  The controller creates a variable, $greeting, and this is used by the layout file</p>
<p>The layout file will be your HTML file with your &lt;html&gt;,&lt;head&gt; and &lt;body&gt; sections.  The template will be inserted wherever you place the <span class="code">$content</span> variable</p>
<p>
The template /views/basics/simple.php looks like this:
<pre>
&lt;?= $greeting ?&gt; World
</pre>
<p>
	code placed in simple.head.php will be placed into a variable called <span class="code">$head</span> which can easily be inserted into the HTML &lt;head&gt; section of your layout file
</p>
</div>

<div class="example">
<p><?php echo  link_to("Single argument", '/basics/show/44'); ?></p>
<pre>
public function show($id)
{
  $this-&gtrender_text("Showing ".$id."  Try changing the number 44 in the URL to the word test");
}
</pre>
<p>Specifying parameters is easy</p>
</div>

<div class="example">
<p><?php echo  link_to('Multiple arguments', '/basics/showboth/first/second') ?></p>
<pre>
public function showboth($one, $two)
{
  echo "Arg #1: ($one) Arg #2: ($two)";
  $this-&gt;text_only = true;
}
</pre>
<p>Add as many arguments as you'd like</p>
</div>

<div class="example">
<p><?php echo  link_to("Custom Route", '/2009/01/20/blog/Hope'); ?></p>
<pre>R('(?P&lt;year&gt;[-\w]+)/(?P&lt;month&gt;[-\w]+)/(?P&lt;day&gt;[-\w]+)/blog/(?P&lt;title&gt;[-\w]+)', 'basics', 'blog');</pre>
<pre>
public function blog($year, $month, $day, $title)
{
  $this-&gt;render_text("Year: $year Month: $month Day: $day Title: $title");
}
</pre>
<p>Defining routes are simply calling the method R which takes 3 required parameters plus 2 optional:</p>
<ol>
<li>The regex of your route.  The variables are defined by order.  Your function must maintain this order</li>
<li>The controller to call upon</li>
<li>The function (action) of the controller to call upon</li>
<li><i>Optional: </i>responds_to variable - <span class='code'>$this-&gt;responds_to</span> will be set to the value here.  Default is an empty string.  See MVC Example for more info about responds_to</li>
<li><i>Optional: </i>HTTP Method.  This must match for the route to be accepted.  Defaults to 'GET'</li>
</ol>
<p>Add the route to your routes file.  Include the routes file in your index.php</p>
</div>

<div class="example">
<p><?php echo  link_to_action('Redirected Link', 'redir'); ?></p>
<pre>
public function redir()
{
  $this-&gt;redirect_to('/basics/error');
}
</pre>
<p>Calling $this-&gt;redirect outputs a location header right away, stops processing and redirects the browser.</p>
</div>

<div class="example">
<p><?php echo  link_to_action('Alternative View', 'altview'); ?><p>
<pre>
public function altview()
{
  $this-&gt;view_template = 'views/basics/different.php';
}
</pre>
<p>By default, /basics/altview would look for a template in /app/sample/views/basics/altview.php  This lets you specify a different view file</p>
</div>

<div class="example">
<p><?php echo  link_to_action('Alternative Layout Template', 'altlayout'); ?></p>
<pre>
public function altlayout()
{
  $this-&gt;layout_template = 'views/alternatelayout.php';
}
</pre>
<p>The default layout template is views/layout.php  You can specify a different one here</p>
</div>

<div class="example">
<p><?php echo  link_to_action('No layout template', 'nolayout'); ?></p>
<pre>
public function nolayout()
{
  $this-&gt;layout = false;
}
</pre>
<p>You can also turn it off completely</p>
</div>

<div class="example">
<h3>Static files</h3>
<p>The included .htaccess file will automatically serve up files in your public folder.  For example, placing a file in /var/www/htdocs/public/images/happypuppy.jpg makes it accessible to http://host/images/happypuppy.jpg</p>
<img src="images/happypuppy.jpg" alt="Happy puppies" />
</div>
