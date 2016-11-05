<?php  
use yii\widgets\ActiveForm;
//use yii\bootstrap\ActiveForm;
use yii\widgets\LinkPager;
use yii\helpers\Html;
use yii\helpers\Url;
?>	
	<head>
		<meta charset="utf-8" />
		<title>后台管理</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<!-- basic styles -->
		<!-- <link href="assets/css/bootstrap.min.css" rel="stylesheet" /> -->
		 <?=Html::cssFile('@web/assets/css/bootstrap.min.css')?>
		<!-- <link rel="stylesheet" href="assets/css/font-awesome.min.css" /> -->
		 <?=Html::cssFile('@web/assets/css/font-awesome.min.css')?>

		<!--[if IE 7]>
		  <link rel="stylesheet" href="assets/css/font-awesome-ie7.min.css" />
		<![endif]-->

		<!-- page specific plugin styles -->

		<!-- fonts -->
		<!-- ace styles -->
		 <?=Html::cssFile('@web/assets/css/ace.min.css')?>
		 <?=Html::cssFile('@web/assets/css/ace-rtl.min.css')?>
		 <?=Html::cssFile('@web/assets/css/ace-skins.min.css')?>

		<!-- <link rel="stylesheet" href="assets/css/ace.min.css" />
		<link rel="stylesheet" href="assets/css/ace-rtl.min.css" />
		<link rel="stylesheet" href="assets/css/ace-skins.min.css" />
 -->
		<!--[if lte IE 8]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->

		 <!-- <script src="assets/js/ace-extra.min.js"></script> -->
         <?=Html::jsFile('@web/assets/js/ace-extra.min.js')?>
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

		<!--[if lt IE 9]>
		<script src="assets/js/html5shiv.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->
	</head>