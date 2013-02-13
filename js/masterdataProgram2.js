$('.kode_program').each(function(){
       $(this).editable();
});
$('.program').each(function(){
       $(this).editable();
});

$('.sasaran_program').each(function(){
       $(this).editable();
});

$('.iku').each(function(){
       $(this).editable();
});

$('.unit').each(function(){
       $(this).editable({
              source: [
              {
                     id: 6, 
                     text: 'Inspektorat Jenderal'
              },

              {
                     id: 7, 
                     text: 'Direktorat Jenderal Sumber Daya dan Perangkat Pos dan Informatik'
              },

              {
                     id: 8, 
                     text: 'Direktorat Jenderal Aplikasi dan Informatika'
              }
              ],
              select2: {
                     multiple: false
              }
       });
});
      
$('td').each(function(){
       $(this).contextmenu();       
});      
       
$('.hapus-master').each(function(){
       $(this).click(function(ev){
              ev.preventDefault();
              $.get(this.href,function(html){
                     $('.table-wrap').html(html);
              });
  
       });
});

$(function(){
       $('#tambah-sasaran a.sas').click(function(ev){
              ev.preventDefault();
              var $m = $(this).closest('.context-menu');    
              var url = $($m.data('e').target).attr('url-tambah');
//              alert(url);
              $.get(url,function(html){
                     $('.table-wrap').html(html);
              });
       });
       
       $('#tambah-indikator-utama a.iku').click(function(ev){
              ev.preventDefault();
              var $m = $(this).closest('.context-menu');    
              var url = $($m.data('e').target).attr('url-tambah');
//              alert(url);
              $.get(url,function(html){
                     
                     $('.table-wrap').html(html);
              });
       });
})
