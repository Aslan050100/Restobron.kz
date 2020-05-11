

/*
 $(document).ready(function () {
        jQuery("#form1").submit(function () {
          var formNm = jQuery('#form1');
          var formData = new FormData(this);
          jQuery.ajax({
            type: "POST"
                    , url: "/templates/Potboiler/PostFile.php"
                    , cache: false
                    , contentType: false
                    , processData: false
                    , data: formData
                    , success: function (data) {
                        jQuery(formNm).html(data);
                    }
                    , error: function (jqXHR, text, error) {
                        jQuery(formNm).html(error);
                    }
          }).done(function () {
            $(this).find("input").val("");
            jQuery("#form1").trigger("reset");
        });
          return false;
        });
      });
 */

/*
//фикс меню
      jQuery(document).ready(function(){
        jQuery(function(jQuery){
          var content_height = jQuery('#me').offset().top;
          jQuery(window).scroll(function() {
            var top = jQuery(document).scrollTop();
            if (top > content_height) jQuery('#me').addClass('fixed');
            else jQuery('#me').removeClass('fixed');

          });
        });
      })
*/
      // плавное меню :D
      //например stroyzem.kz
 /*     jQuery(document).ready(function( $ ){
        $("#me, #fmenu").on("click","a", function (event) {
          //отменяем стандартную обработку нажатия по ссылке
          event.preventDefault();

          //забираем идентификатор бока с атрибута href
          var id  = $(this).attr('href'),

              //узнаем высоту от начала страницы до блока на который ссылается якорь
              top = $(id).offset().top;

          //анимируем переход на расстояние - top за 1500 мс
          $('body,html').animate({scrollTop: top}, 1500);
        });
      });
*/
      // маска
   /*       $(function () {
                    $("#te").mask("+7 (999) 999-9999");
                  });*/