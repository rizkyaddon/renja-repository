<?php
/* @var $this RoleController */
/* @var $dataProvider CActiveDataProvider */
?>

<h3>Master Data Program<a style="margin-left: 15px;" href="<?=Yii::app()->getBaseUrl(true)?>/index.php/masterdataprogram/create/masterid/<?=$masterid?>" id="tambah-master" class="btn btn-primary">tambah master data program</a></h3> 

<div class="table-wrap">
<?php echo $this->renderPartial('//site/navbarMasterData', array('masterid' => $masterid)); ?>    
<?php echo $this->renderPartial('//masterDataProgram/masterDataProgramAjax', array('masters' => $masters, 'masterid' => $masterid), false, true); ?>
       
</div>

<!-- Your custom menu with dropdown-menu as default styling -->
<!--<div class="context-menu tex">
       <ul class="dropdown-menu" role="menu" style="top: -100px;">
              <li><div class="tes" tabindex="-1">Tambah Sasaran Program</div></li>
              <li><a tabindex="-1" href="#">Another action</a></li>
              <li><a tabindex="-1" href="#">Something else here</a></li>
              
       </ul>
       <script>
              $('.tes').click(function(){
                     alert('tes');
              }); 
       </script>
</div>-->

<ul id="tambah-sasaran" class="context-menu dropdown-menu">
    <li><a class="sas" style="cursor: pointer">Tambah Sasaran</a></li>
    <li><a style="cursor: pointer">Hapus Program Ini</a></li>
</ul>

<ul id="tambah-indikator-utama" class="context-menu dropdown-menu">
    <li><a class="iku" style="cursor: pointer">Tambah Indikator Utama</a></li>
    <li><a style="cursor: pointer">Hapus Sasaran Program Ini</a></li>
</ul>

