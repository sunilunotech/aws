<!DOCTYPE html>
<html lang="en">
     <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Bootstrap 101 Template</title>
<!-- 

https://getbootstrap.com/docs/3.3/components/ 
https://bootsnipp.com/snippets/Padax
https://bootsnipp.com/snippets/z4Pv1
https://www.sitepoint.com/bootstrap-carousel-with-css3-animations/
https://designmodo.com/free-sliders-bootstrap/
-->

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<body>

<!--nav start here-->
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Brand</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div class="container" id="content" tabindex="-1">

<div class="bs-example" data-example-id="simple-thumbnails"> <div class="row"> <div class="col-md-3 col-xs-6"> <a href="#" class="thumbnail"> <img alt="100%x180" data-src="holder.js/100%x180" style="height: 180px; width: 100%; display: block;" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMTcyIiBoZWlnaHQ9IjE4MCIgdmlld0JveD0iMCAwIDE3MiAxODAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzEwMCV4MTgwCkNyZWF0ZWQgd2l0aCBIb2xkZXIuanMgMi42LjAuCkxlYXJuIG1vcmUgYXQgaHR0cDovL2hvbGRlcmpzLmNvbQooYykgMjAxMi0yMDE1IEl2YW4gTWFsb3BpbnNreSAtIGh0dHA6Ly9pbXNreS5jbwotLT48ZGVmcz48c3R5bGUgdHlwZT0idGV4dC9jc3MiPjwhW0NEQVRBWyNob2xkZXJfMTYyMDUzYmQ4ZDggdGV4dCB7IGZpbGw6I0FBQUFBQTtmb250LXdlaWdodDpib2xkO2ZvbnQtZmFtaWx5OkFyaWFsLCBIZWx2ZXRpY2EsIE9wZW4gU2Fucywgc2Fucy1zZXJpZiwgbW9ub3NwYWNlO2ZvbnQtc2l6ZToxMHB0IH0gXV0+PC9zdHlsZT48L2RlZnM+PGcgaWQ9ImhvbGRlcl8xNjIwNTNiZDhkOCI+PHJlY3Qgd2lkdGg9IjE3MiIgaGVpZ2h0PSIxODAiIGZpbGw9IiNFRUVFRUUiLz48Zz48dGV4dCB4PSI2MC4wNjI1IiB5PSI5NC4zNTkzNzUiPjE3MngxODA8L3RleHQ+PC9nPjwvZz48L3N2Zz4=" data-holder-rendered="true"> </a> </div> <div class="col-md-3 col-xs-6"> <a href="#" class="thumbnail"> <img alt="100%x180" data-src="holder.js/100%x180" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMTcyIiBoZWlnaHQ9IjE4MCIgdmlld0JveD0iMCAwIDE3MiAxODAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzEwMCV4MTgwCkNyZWF0ZWQgd2l0aCBIb2xkZXIuanMgMi42LjAuCkxlYXJuIG1vcmUgYXQgaHR0cDovL2hvbGRlcmpzLmNvbQooYykgMjAxMi0yMDE1IEl2YW4gTWFsb3BpbnNreSAtIGh0dHA6Ly9pbXNreS5jbwotLT48ZGVmcz48c3R5bGUgdHlwZT0idGV4dC9jc3MiPjwhW0NEQVRBWyNob2xkZXJfMTYyMDUzYjYyMjggdGV4dCB7IGZpbGw6I0FBQUFBQTtmb250LXdlaWdodDpib2xkO2ZvbnQtZmFtaWx5OkFyaWFsLCBIZWx2ZXRpY2EsIE9wZW4gU2Fucywgc2Fucy1zZXJpZiwgbW9ub3NwYWNlO2ZvbnQtc2l6ZToxMHB0IH0gXV0+PC9zdHlsZT48L2RlZnM+PGcgaWQ9ImhvbGRlcl8xNjIwNTNiNjIyOCI+PHJlY3Qgd2lkdGg9IjE3MiIgaGVpZ2h0PSIxODAiIGZpbGw9IiNFRUVFRUUiLz48Zz48dGV4dCB4PSI2MC4wNjI1IiB5PSI5NC4zNTkzNzUiPjE3MngxODA8L3RleHQ+PC9nPjwvZz48L3N2Zz4=" data-holder-rendered="true" style="height: 180px; width: 100%; display: block;"> </a> </div> <div class="col-md-3 col-xs-6"> <a href="#" class="thumbnail"> <img alt="100%x180" data-src="holder.js/100%x180" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMTcyIiBoZWlnaHQ9IjE4MCIgdmlld0JveD0iMCAwIDE3MiAxODAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzEwMCV4MTgwCkNyZWF0ZWQgd2l0aCBIb2xkZXIuanMgMi42LjAuCkxlYXJuIG1vcmUgYXQgaHR0cDovL2hvbGRlcmpzLmNvbQooYykgMjAxMi0yMDE1IEl2YW4gTWFsb3BpbnNreSAtIGh0dHA6Ly9pbXNreS5jbwotLT48ZGVmcz48c3R5bGUgdHlwZT0idGV4dC9jc3MiPjwhW0NEQVRBWyNob2xkZXJfMTYyMDUzYjkxMDAgdGV4dCB7IGZpbGw6I0FBQUFBQTtmb250LXdlaWdodDpib2xkO2ZvbnQtZmFtaWx5OkFyaWFsLCBIZWx2ZXRpY2EsIE9wZW4gU2Fucywgc2Fucy1zZXJpZiwgbW9ub3NwYWNlO2ZvbnQtc2l6ZToxMHB0IH0gXV0+PC9zdHlsZT48L2RlZnM+PGcgaWQ9ImhvbGRlcl8xNjIwNTNiOTEwMCI+PHJlY3Qgd2lkdGg9IjE3MiIgaGVpZ2h0PSIxODAiIGZpbGw9IiNFRUVFRUUiLz48Zz48dGV4dCB4PSI2MC4wNjI1IiB5PSI5NC4zNTkzNzUiPjE3MngxODA8L3RleHQ+PC9nPjwvZz48L3N2Zz4=" data-holder-rendered="true" style="height: 180px; width: 100%; display: block;"> </a> </div> <div class="col-md-3 col-xs-6"> <a href="#" class="thumbnail"> <img alt="100%x180" data-src="holder.js/100%x180" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMTcyIiBoZWlnaHQ9IjE4MCIgdmlld0JveD0iMCAwIDE3MiAxODAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzEwMCV4MTgwCkNyZWF0ZWQgd2l0aCBIb2xkZXIuanMgMi42LjAuCkxlYXJuIG1vcmUgYXQgaHR0cDovL2hvbGRlcmpzLmNvbQooYykgMjAxMi0yMDE1IEl2YW4gTWFsb3BpbnNreSAtIGh0dHA6Ly9pbXNreS5jbwotLT48ZGVmcz48c3R5bGUgdHlwZT0idGV4dC9jc3MiPjwhW0NEQVRBWyNob2xkZXJfMTYyMDUzYmNjNGQgdGV4dCB7IGZpbGw6I0FBQUFBQTtmb250LXdlaWdodDpib2xkO2ZvbnQtZmFtaWx5OkFyaWFsLCBIZWx2ZXRpY2EsIE9wZW4gU2Fucywgc2Fucy1zZXJpZiwgbW9ub3NwYWNlO2ZvbnQtc2l6ZToxMHB0IH0gXV0+PC9zdHlsZT48L2RlZnM+PGcgaWQ9ImhvbGRlcl8xNjIwNTNiY2M0ZCI+PHJlY3Qgd2lkdGg9IjE3MiIgaGVpZ2h0PSIxODAiIGZpbGw9IiNFRUVFRUUiLz48Zz48dGV4dCB4PSI2MC4wNjI1IiB5PSI5NC4zNTkzNzUiPjE3MngxODA8L3RleHQ+PC9nPjwvZz48L3N2Zz4=" data-holder-rendered="true" style="height: 180px; width: 100%; display: block;"> </a> </div> </div> </div>




<div class="row">
  <div class="col-xs-6 col-md-3">



<?php
/* Prepare variables */
$defaults_object_or_array_from_db = NULL;

$item = new stdClass;
$item->id = 33;
$item->description = '';

$years = range(intval(date('Y')), intval(date('Y')) + 20);
$months = array_map(function ($n) {
        return str_pad($n, 2, '0', STR_PAD_LEFT);
}, range(1, 12));

$exp_month_options = array_combine($months, $months);
$cc_exp_month = '05';

$exp_year_options = array_combine($years, $years);
$cc_exp_year = intval(date('Y')) + 5;

$input_span = 'pull-left ';

/* Build form */
echo $this->form_builder->build_form_horizontal(
                array(
                                array(/* HIDDEN */
                                                'id' => 'id',
                                                'type' => 'hidden',
                                                'value' => $item->id
                                ),
                                array(/* INPUT */
                                                'id' => 'color',
                                                'placeholder' => 'Item Color',
                                                'input_addons' => array(
                                                                'pre' => 'color: #',
                                                                'post' => ';'
                                                ),
                                                'help' => 'this is a help block'
                                ),
                                array(/* DROP DOWN */
                                                'id' => 'published',
                                                'type' => 'dropdown',
                                                'options' => array(
                                                                '1' => 'Published',
                                                                '2' => 'Disabled'
                                                )
                                ),
                                array(/* TEXTAREA */
                                                'id' => 'description',
                                                'type' => 'textarea',
                                                'class' => 'wysihtml5',
                                                'placeholder' => 'Item Description (HTML or rich text)',
                                                'value' => html_entity_decode($item->description)
                                ),
                                array(/* COMBINE */
                                                'id' => 'expiration_date',
                                                'type' => 'combine', /* use `combine` to put several input inside the same block */
                                                'elements' => array(
                                                                        array(
                                                                                'id' => 'cc_exp_month',
                                                                                'label' => 'Expiration Date',
                                                                                'autocomplete' => 'cc-exp-month',
                                                                                'type' => 'dropdown',
                                                                                'options' => $exp_month_options,
                                                                                'class' => $input_span . 'required input-small',
                                                                                'required' => '',
                                                                                'data-items' => '4',
                                                                                'pattern' => '\d{1,2}',
                                                                                'style' => 'width: auto;',
                                                                                'value' => (isset($cc_exp_month) ? $cc_exp_month : '')
                                                                        ),
                                                                        array(
                                                                                'id' => 'cc_exp_year',
                                                                                'label' => 'Expiration Date',
                                                                                'autocomplete' => 'cc-exp-year',
                                                                                'type' => 'dropdown',
                                                                                'options' => $exp_year_options,
                                                                                'class' => $input_span . 'required input-small',
                                                                                'required' => '',
                                                                                'data-items' => '4',
                                                                                'pattern' => '\d{4}',
                                                                                'style' => 'width: auto; margin-left: 5px;',
                                                                                'value' => (isset($cc_exp_year) ? $cc_exp_year : '')
                                                                        )
                                                                )
                                ),
                                array(/* DATE */
                                                'id' => 'date',
                                                'type' => 'date'
                                ),
                                array(/* CHECKBOX */
                                                'id' => 'checkbox_group',
                                                'label' => 'Checkboxes',
                                                'type' => 'checkbox',
                                                'options' => array(
                                                                array(
                                                                                'id' => 'checkbox1',
                                                                                'value' => 1
                                                                                // If no label is set, the value will be used
                                                                ),
                                                                array(
                                                                                'id' => 'checkbox2',
                                                                                'value' => 2,
                                                                                'label' => 'Two'
                                                                )
                                                )
                                ),
                                array(/* RADIO */
                                                'id' => 'radio_group',
                                                'label' => 'Radio buttons',
                                                'type' => 'radio',
                                                'options' => array(
                                                                array(
                                                                                'id' => 'radio_button_yes',
                                                                                'value' => 1,
                                                                                'label' => 'Yes'
                                                                ),
                                                                array(
                                                                                'id' => 'radio_button_no',
                                                                                'value' => 0,
                                                                                'label' => 'No'
                                                                )
                                                )
                                ),
                                array(/* SUBMIT */
                                                'id' => 'submit',
                                                'type' => 'submit'
                                )
                ), $defaults_object_or_array_from_db);

echo $this->form_builder->close_form();
?>

</div>


 <!-- The main page content -->
  </div>
</body>
