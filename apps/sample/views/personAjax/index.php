<h2>Ajax MVC Example</h2>
<p>A nice unobtrusive javascript AJAX example.  Using jQuery, take the Basic MVC example and transform it into full AJAX.  (Go ahead, turn off javascript and this form still functions!</p>
<p><a href="/personAjax/list">Go to the example!</a></p>
<h2>Boring Details</h2>
<p>The reason I did this was that most php AJAX tutorials assume you are using standard one file .php scripts, and do not work with Javascript turned off.  You can follow along in the code in /controllers/personAjaxController.php</p>
<p>Routes can respond to different format types</p>
<p>The URL: /personAjax/list can be:</p>
<table id="formattable">
<thead><tr><th>URL</th><th>returns</th></tr></thead>
<tbody>
<tr><td><a href="/personAjax/list">/personAjax/list</a></td><td><em>Default format</em></td></tr>
<tr><td><a href="/personAjax/list.xml">/personAjax/list.xml</a></td><td>XML format</td></tr>
<tr><td><a href="/personAjax/list.json">/personAjax/list.json</a></td><td>JSON format</td></tr>
</tbody>
</table>
<p>These formats are not set in stone, they are defined in your code.  Here's the code for the /personAjax/list route<p>
<pre>
$this-&gt;new_person = new person();
$this-&gt;people = person::getAll();
$this-&gt;people = array_slice($this-&gt;people, 0, 10);
switch ($this-&gt;responds_to)
{
	case "xml":
		header("Content-type: text/xml"); 
		$this-&gt;renderText(XMLlib::toXML("people", $this-&gt;people));
		break;
	case "json":
		header('Content-Type: text/plain'); // plain text file
		$this-&gt;renderText(json_encode($this-&gt;people));
		break;
}
</pre>
<p>The basic idea is the stuff which interacts with the business layer, retrieving the people, is on the first line.  The code to repsond to different formats is below.  The variable <span class="code">$this-&gt;responds_to</span> is dynamically set based on what's after the dot(.) in your URL</p>
<p>The reason behind adding a format is two-fold.</p>
<ul>
<li>Other programs which want to interact with your data sometimes require an XML or JSON view of your data.  This makes it easy without repeating yourself</li>
<li>For AJAX snippets.  If you click the edit button, Happy Puppy can retrieve the edit form, minus the layout, for you to insert on the current page</li>
</ul>