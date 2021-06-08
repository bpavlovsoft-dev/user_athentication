<?php
    function do_html_header($title)
    {
?>
<html>
    <head>
        <title><?php echo $title; ?></title>
        <style>
            body {font-family: Arial, Helvetica, sans-serif;
            font-size: 13px;}
            li, td{
                font-family: Arial, Helvetica, sans-serif;
                font-size: 13px;
            }
            hr{
                color: #3333cc; width: 300; text-align: left;
            }
            a{
                color: #000000;
            }
            </style>
    </head>
    <body>
        <img src="bookmark.gif" alt="PHPBookmark logo" border="0"
             align="left" vlign="bottom" height="55" width="57">
        <h1>&nbsp;PHP Bookmark</h1>
        <hr>
    </body>
</html>
<?php
    if($title)
    {
        do_html_header($title);
    }
  }
?>    

