<h1>PHP Includes - IncludeOnce</h1>
<p>
  This PHP file demonstrates the capability to include another PHP file at runtime.
</p>

<hr/>

<pre>
  If it was `include`, or `include_once`, and if the included file does not exist,
  PHP produces a warning and continues with the execution of the rest of the parent script.

  <font style="background-color: yellow; color: black;">
    [29-Nov-2024 11:10:37 Europe/Berlin] <b>PHP Warning:</b>  include_once():
    Failed opening '06_StringOperations-0.php' for inclusion (include_path='.:/Applications/XAMPP/xamppfiles/lib/php')
    in /Applications/XAMPP/xamppfiles/htdocs/rbac-implementation-php/practices/01_01_php-basics/09_01_includeFiles-includeOnce.php on line 32
  </font>
</pre>

<h2>Including the String Operations PHP file - Existing</h2>

<div id="includeFile"

  style="background-color: teal; font-family: Verdana; color: white; font-size: 15px; width: 400px; height: 150px;">
  <?php
  include_once '06_StringOperations.php';
  ?>
</div>

<h2>Including the String Operations PHP file - Non Existing</h2>

<div id="includeFile"

  style="background-color: teal; font-family: Verdana; color: white; font-size: 15px; width: 400px; height: 150px;">
  <?php
  include_once '06_StringOperations-0.php';
  ?>
</div>

<p>
  The continuing contents of the parent PHP script.
</p>
