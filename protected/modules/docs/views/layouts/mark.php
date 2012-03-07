<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php echo $this->meta_title; ?></title>

<meta http-equiv="X-UA-Compatible" content="IE=Edge"/>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>


<!--стили сайта-->
<?php
Yii::app()->bootstrap->init();
$assets = Yii::app()->getModule('docs')->assetsUrl();
Yii::app()->clientScript->registerCssFile($assets . '/css/styles.css');
?>


<style type="text/css">
body{
    padding-top:    60px;
    padding-bottom: 40px;
}
.sidebar-nav{
    padding: 9px 0;
}

body{
    font:       normal 10pt Arial, Helvetica, sans-serif;
    background: #fff;
    color:      #555;
    text-align: left;
}

a, a:visited{
    color:           #306495;
    text-decoration: none;
}

a:hover{
    color:           #73471b;
    text-decoration: underline;
}

h1, h2, h3, h4, h5, h6{
    font-weight: bold;
    font-family: Calibri, Helvetica, Arial, sans-serif;
}
blockquote{
    background: #FBE6F2;
    border:     1px solid #D893A1;
    color:      #333;
    margin:     10px 0 5px 0;
    padding:    10px;
}
h1{
    font-size: 1.6em;
    margin:    1em 0 .5em;
}

h2{
    font-size: 1.5em;
    margin:    1.07em 0 .535em;
}

h3{
    font-size: 1.4em;
    margin:    1.14em 0 .57em;
}

h4{
    font-size: 1.3em;
    margin:    1.23em 0 .615em;
}

h5{
    font-size: 1.2em;
    margin:    1.33em 0 .67em;
}

h6{
    font-size: 1.1em;
    margin:    1.6em 0 .8em;
}

strong{
    font-weight: bold;
}

table{
    width:           auto;
    border-collapse: collapse;
}
thead{
    background: #eee;
}
th{
    padding:     2px 5px;
    text-align:  center;
    border:      1px solid #999;
    color:       #3C578C;
    font-weight: bold;
}
tr{
    min-height: 20px;
}
td{
    border:  1px solid #999;
    padding: 4px 6px;
}
::selection{
    background: #d3dfee;
    color:      #000;
}

::-moz-selection{
    background: #d3dfee;
    color:      #000;
}

acronym, abbr{
    cursor: help;
}

label{
    cursor: pointer;
}

hr{
    height:           1px;
    color:            #bbb;
    background-color: #bbb;
    border:           none;
}

#content{
    width:      980px;
    margin:     0 auto;
    text-align: left;
    background: #fff;
}

    /* guide content */
div.image{
    -moz-border-radius:    7px;
    -webkit-border-radius: 7px;
    -khtml-border-radius:  7px;
    border-radius:         7px;
    margin:                10px 0;
    border:                3px solid #eee;
    text-align:            center;
}

div.image > p{
    background:  #eee;
    margin:      0;
    font-weight: bold;
    display:     block;
}

#content ul{
    list-style: disc inside;
}

#content ol{
    list-style: decimal inside;
}

#content li{
    line-height: 160%;
    text-align:  left;
}

#content ul li ul{
    list-style-type: none;
    margin:          0 0 0 20px;
}

#content ul, #content ol{
    margin:  0 0 1em 2em;
    padding: 0;
}

#content ul p, #content ol p{
    display: inline;
}

#content p{
    line-height:   170%;
    margin-bottom: 1em;
}

span.type{
    float:         left;
    font-size:     1em;
    padding-right: 0.5em;
    font-weight:   bold;
}

    /* code */
pre{
    display:       block;
    padding:       1em;
    background:    #fcfcfc;
    border-top:    1px solid #eee;
    border-bottom: 1px solid #eee;
    font-size:     10pt;
    font-family:   Consolas, "Courier New", Courier, monospace;
    margin:        1em 0;
    line-height:   130%;
}

code{
    padding:               0;
    border-radius:         0;
    -webkit-border-radius: 0;
    background:            none;
    border:                none;
    border-bottom:         1px dotted #ccc;
    color:                 #555;
    font-size:             10pt;
    font-family:           Consolas, "Courier New", Courier, monospace;
    line-height:           130%;
}

    /* --- code highlighting --- */

    /* html-code */
.html-hl-brackets,
.html-hl-reserved{
    color: #0000e6;
}

.html-hl-var,
.html-hl-quotes,
.html-hl-string{
    color: #009933;
}

.html-hl-code{
    color: #000020;
}

    /* php-code */
.php-hl-inlinetags{
    font-weight: bold;
}

.php-hl-comment{
    color: #777;
}

.php-hl-quotes,
.php-hl-string{
    color: #009933;
}

.php-hl-var{
    color: #6d3206;
}

.php-hl-reserved{
    color: #00e;
}

    /* css-code */
.css-hl-identifier{
    color: #007c00;
}

.css-hl-reserved{
    color: #0000e6;
}

    /* css-sql */
.sql-hl-reserved{
    color: #0000e6;
}

.sql-hl-identifier{
    color: #007c00;
}

.sql-hl-var{
    color: #0000e6;
}

.sql-hl-quotes, .sql-hl-string{
    color: #007c00;
}

    /*menu*/
.sidebar{
    position: fixed;
    width:    200px;
}

.center{
    padding: 0 0 0 200px
}

</style>


</head>
<body>
<script type="text/javascript">
    $(document).ready(function()
    {
        $('#toogle-menu a').click(function()
        {
            $('#header').slideToggle(400);
        });
    });
</script>
<?php
$items = array();
$i = new RecursiveIteratorIterator(new RecursiveDirectoryIterator(Yii::getPathOfAlias('docs.views.documentation')));
$i = new RecursiveDirectoryIterator(Yii::getPathOfAlias('docs.views.documentation'));

for ($i->rewind(); $i->valid(); $i->next())
{
    $item=$i->current();
    if (!$i->hasChildren())
    {
        continue;
    }
    $active_folder = false;
    $tmp = array();
    foreach ($i->getChildren() as $child)
    {
        list($file) = explode('.',$child->getFileName());
        $active = isset($_GET['alias']) && ($_GET['alias'] == $file) ? true : false;
        $active_folder = $active_folder || $active;
        $tmp[] = array(
            'label'       => $file,
            'itemOptions' => array(),
            'active'      => $active,
            'url'         => Yii::app()->createUrl('/docs/documentation/index', array('alias'=>$file, 'folder'=>$item->getFileName()))
        );
    }
    if ($active_folder)
    {
        $items[] = array(
            'label'       => $item->getFileName(),
            'itemOptions' => array('class'=> 'nav-header'),
        );
        $items = array_merge($items, $tmp);
    }
    else
    {
        $items[] = array(
            'label'       => $item->getFileName(),
            'items'       => $tmp,
            'itemOptions' => array('class'=> 'nav-header'),
        );
    }
}

//foreach (Documentation::model()->orderByLft()->findAll() as $doc)
//{
//    if ($doc->depth == 1)
//    {
//        continue;
//    }
//    $tmp = array(
//        'label'       => $doc->title,
//        'itemOptions' => $doc->depth > 2 ? array() : array('class'=> 'nav-header'),
//        'active'      => isset($_GET['alias']) && ($_GET['alias'] == $doc->alias) ? true : false,
//    );
//    if ($doc->depth > 2)
//    {
//        $tmp['url'] = $doc->href;
//    }
//    $items[] = $tmp;
//}

?>
<div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container-fluid">

            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <a class="brand" href="/">Yii-CMS 2.0</a>

            <div class="nav-collapse">
                <ul class="nav pull-right">
                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
    </div>
</div>


<div class="container-fluid">
    <div class="row-fluid">
        <div class="span3">
            <div class="well sidebar-nav sidebar">
                <?php
                $this->widget('BootMenu', array(
                    'items'       => $items,
                    'type' => BootMenu::TYPE_LIST,
                    'htmlOptions' => array(
                        'id'   => 'sidebar-docs-menu'
                    )
                )) ?>
            </div>
        </div>
        <div class="span9 center">
            <?php echo $content ?>
        </div>
    </div>
</div>


</body>
</html>
