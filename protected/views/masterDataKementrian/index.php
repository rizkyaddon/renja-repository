<?php
/* @var $this RoleController */
/* @var $dataProvider CActiveDataProvider */
?>

<h3>Master Data Kementrian<a style="margin-left: 15px;" href="<?=Yii::app()->getBaseUrl(true)?>/index.php/masterDataKementrian/create" id="tambah-master" class="btn btn-primary">tambah master data Kementrian</a></h3> 

<div class="table-wrap">
       <?php echo $this->renderPartial('//site/navbarMasterData', array('masterid' => $masterid), false, true)?>  
       <?php echo $this->renderPartial('//masterDataKementrian/masterDataKementrianAjax', array('masters' => $masters), false, true); ?>
</div>


