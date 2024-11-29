<h1>PHP Includes - RequireOnce</h1>
<p>
  This PHP file demonstrates the capability to include another PHP file at runtime.
</p>

<hr/>

<pre>
  If it was `require` or `require_once`, and if the included file does not exist,
  PHP produces a fatal error and stops the execution of the parent script then and there.

  <font style="background-color: yellow; color: red;">
    [29-Nov-2024 11:18:14 Europe/Berlin] PHP Fatal error:
    Uncaught Error: Failed opening required '06_StringOperations-0.php' 
    (include_path='.:/Applications/XAMPP/xamppfiles/lib/php') in
    /Applications/XAMPP/xamppfiles/htdocs/rbac-implementation-php/practices/01_01_php-basics/09_02_includeFiles-requireOnce.php:35
Stack trace:
#0 {main}
  thrown in /Applications/XAMPP/xamppfiles/htdocs/rbac-implementation-php/practices/01_01_php-basics/09_02_includeFiles-requireOnce.php on line 35
  </font>
</pre>

<h2>Including the String Operations PHP file - Existing</h2>

<div id="includeFile"

  style="background-color: teal; font-family: Verdana; color: white; font-size: 15px; width: 400px; height: 150px;">
  <?php
  require_once '06_StringOperations.php';
  ?>
</div>

<h2>Including the String Operations PHP file - Non Existing</h2>

<div id="includeFile"

  style="background-color: teal; font-family: Verdana; color: white; font-size: 15px; width: 400px; height: 150px;">
  <?php
  require_once '06_StringOperations-0.php';
  ?>
</div>

<p>
  The continuing contents of the parent PHP script.
</p>
