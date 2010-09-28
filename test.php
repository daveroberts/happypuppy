<pre>
<?php
/** 
* A test class
*
* @param  foo bar
* @return baz
*/
class TestClass
{
    /** WTF */
    function bar()
    {
        return 3;
    }
}

$rc = new ReflectionClass('TestClass');
$hello = $rc->getMethod('bar')->getDocComment();
print($hello);
?>
</pre>