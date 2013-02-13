<ul class="nav nav-tabs">
       <li <?php if($this->uniqueid == "masterDataKementrian") echo 'class="active"'?> >
              <a href="<?=Yii::app()->getBaseUrl(true)?>/index.php/masterDataKementrian/index/masterid/<?=$masterid?>">Master Data Kementrian</a>
       </li>
       <li <?php if($this->uniqueid == "masterDataProgram") echo 'class="active"'?> >
              <a href="<?=Yii::app()->getBaseUrl(true)?>/index.php/masterDataProgram/index/masterid/<?=$masterid?>">
                     Master Data Program
              </a>
       </li>
       <li><a href="#">Master Data Kegiatan</a></li>
</ul>