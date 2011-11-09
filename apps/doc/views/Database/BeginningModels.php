<h2>Models</h2>
<p>Models let you manipulate PHP objects to write and read data to the database</p>

<p>Video - playing with models, the basics</p>
<pre>
steps taken in the video:

1) Have a few tables created, show their schema in visio
Student
id
name

Course
id
name
teacher_id

Enrollment
id
student_id
course_id

Teacher
id
name

2) Show how to get all of the Teachers
3) show pretty print then show it on the page in a nicer format
4) When you click on a teacher, you get a page showing the courses that they teach
5) when you click on a course, you get a list of the students enrolled in that course

Next example: forms building off of this

1) Explain no ajax yet
2) create / edit teachers.  Delete will be shown later
3) create / edit courses
4) create / edit students.
5) change enrollment in courses
</pre>
<p>Here's an example</p>
<pre class="sh_php">
$person = new Person();
$person->name = "David";
$person->save();
</pre>
<p>How do we make this magic work?</p>
<p>Create a new file in <span class="code">/apps/<span class="highlight">&lt;yourappname&gt;</span>/models/&lt;name&gt;.php<span><p>
<p>Add this to the file:</p>
<pre class="sh_php">
&lt;?php

namespace <span class="highlight">yourappname</span>;
class Person extends \HappyPuppy\Model
{
	function __construct()
	{
		parent::__construct();
	}
}

?&gt;
</pre>
<p>That's it!  Now you can create, edit, and update people.</p>
<p></p>