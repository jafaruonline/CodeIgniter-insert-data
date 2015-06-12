<html>
<head>
<link rel="stylesheet" type="text/css" 
      href="<?php echo "$base/$css"?>">
</head>
<body>
<div id="header">
<? $this->load->view('books_header'); ?>
</div>
<div id="menu">
<? $this->load->view('books_menu'); ?>
</div>

<? echo form_open('books/input'); ?>
<? echo $title; ?>: 
<? echo form_input('title'); ?>
</br>
<? echo $author; ?>: 
<? echo form_input('author'); ?>
</br>
<? echo $publisher; ?>: 
<? echo form_input('publisher'); ?>
</br>
<? echo $year; ?>: 
<? echo form_dropdown('year',$years); ?>
</br>
<? echo $available; ?>: 
<? echo form_checkbox('available','yes',TRUE); ?>
</br>
<? echo $summary; ?>: 
<? echo form_textarea('summary'); ?>
</br>
<? echo form_submit('mysubmit','Submit!');  ?>
<? echo form_close(); ?>

<div id="footer">
<? $this->load->view('books_footer'); ?>
</div>

</body>
</html>