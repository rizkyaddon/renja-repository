<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <title>Admin MOS Template</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="Copyright" content="arirusmanto.com" />
        <meta name="description" content="Admin MOS Template" />
        <meta name="keywords" content="Admin Page" />
        <meta name="author" content="Ari Rusmanto" />
        <meta name="language" content="Bahasa Indonesia" />
        <!-- OOIOIIOIOIO -->
        <link rel="shortcut icon" href="stylesheet/img/devil-icon.png" /> <!--Pemanggilan gambar favicon-->

        <!-- blueprint CSS framework -->
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
        <!--[if lt IE 8]>
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
        <![endif]-->

        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/mos-style.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/jquery.treeview.css" />

        <?php
        Yii::app()->getClientScript()->registerCoreScript('jquery.ui');
        Yii::app()->clientScript->registerCssFile(
                Yii::app()->clientScript->getCoreScriptUrl() . '/jui/css/base/jquery-ui.css');
        ?>

        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/inlineEdit.js" type="text/javascript"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.treeview.js" type="text/javascript"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.treeview.async.js" type="text/javascript"></script>

        <script type="text/javascript">
            function initTrees() {
                $("#black").treeview({
                    url: "source.php"
                })
		
                $("#mixed").treeview({
                    url: "source.php",
                    // add some additional, dynamic data and request with POST
			
                });
            }
            $(document).ready(function(){
                initTrees();
		
            });
        </script>
        <title><?php echo CHtml::encode($this->pageTitle); ?></title>
    </head>

    <body>

        <div id="header">
            <div class="inHeader">
                <div class="mosAdmin">
                    Hallo, Mas Administrator<br>
                        <a href="">Lihat website</a> | <a href="">Help</a> | <a href="login.html">Keluar</a>
                </div>
                <div class="clear"></div>
            </div>
        </div>

        <div id="wrapper">
            <div id="leftBar">
                <ul id="mixed">
                    <li><span>Kementrian Komunikasi dan Informatika</span>
                        <ul>
                            <li><span>Sekretariat Jenderal</span>
                                <ul>
                                    <li><span>Biro Perencanaan</span></li>
                                    <li><span>Biro Kepegawaian dan Organisasi</span></li>
                                    <li><span>Biro Keuangan</span></li>
                                    <li><span>Biro Hukum</span></li>
                                    <li><span>Biro Umum</span></li>
                                    <li><span>Pusat Data</span></li>
                                    <li><span>Pusat Kerjasama Internasional</span></li>
                                    <li><span>Pusat Pelayanan Informasi</span></li>
                                    <li><span>Pusat Diklat Pegawai</span></li>
                                </ul>
                            </li>
                            <li><span>Item 1.1</span></li>
                        </ul>
                    </li>
                </ul>
            </div>

            <div id="rightContent">
                <h3>Dashboard</h3>
                <div class="quoteOfDay">
                    <b>Quote of the day :</b><br />
                    <i style="color: #5b5b5b;">"If you think you can, you really can"</i>
                </div>
                <div class="shortcutHome">
                    <a href=""><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/posting.png" /><br />Tambah Posting</a>
                </div>
                <div class="shortcutHome">
                    <a href=""><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/photo.png" /><br />Upload Foto</a>
                </div>
                <div class="shortcutHome">
                    <a href=""><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/halaman.png" /><br />Tambah Halaman</a>
                </div>
                <div class="shortcutHome">
                    <a href=""><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/template.png" /><br />Pengaturan Template</a>
                </div>
                <div class="shortcutHome">
                    <a href=""><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/quote.png" /><br />Tambah QOD</a>
                </div>
                <div class="shortcutHome">
                    <a href=""><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/bukutamu.png" /><br />Data Buku Tamu</a>
                </div>

                <div class="clear"></div>

                <div class="smallRightWrapper">
                    <?php echo $content; ?>
                </div>
            </div>
        </div>       
        <div class="clear"></div>
        <div id="footer">
            &copy; 2013 MOS css template | <a href="#">renja.kominfo.com</a> |
            design <a href="http://arirusmanto.com" target="_blank">arirusmanto.com</a><br />
            redesign <a href="#">Rizky Ramadhan</a> | Silahkan baca <a
                href="lisensi.txt" target="_blank">Lisensi</a>
        </div>


    </body>
</html>
