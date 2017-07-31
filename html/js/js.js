$(function() {
            var swiper = new Swiper(".swiper-container", {
                pagination: ".swiper-pagination",
                paginationClickable: true,
                prevButton: ".swiper-button-prev",
                nextButton: ".swiper-button-next",
                keyboardControl: true, //键盘控制
                autoplay: 1000,
                loop: true,
                autoplayDisableOnInteraction: true, //点击pagination或者滑动的时候，就停止不动了

            });

            $(".circle").mouseover(function() {
                $(this).css("border", "4px  solid  Crimson");

            });

            $(".circle").mouseout(function() {
                $(this).css("border", "3px solid lightgray");
            });


       var hh = $('#bg1').height() / 2;
        console.log(hh+'ssss');
        $('.right1').css({
            'height': hh
        });
        $('.right2').css({
            'height':hh
        });

        $(window).resize(function() {
       var hh = $('#bg1').height() / 2;
        console.log(hh+'ssssjkhjk');
            // console.log($(window).width());  \
            console.log(hh)
            $('.right1').css({
                'height': hh
            });
            $('.right2').css({
                'height': hh
            });

        })


          
        $('#bg1').hover(function(){
        	$('.ami').stop().animate({
        		'margin-left':'-100%'
        	})
        },function(){
        	$('.ami').stop().animate({
        		'margin-left':'0'
        	})
        })

           $('#bg2').hover(function(){
            $('.right1').stop().animate({
                'margin-left':'-100%'
            })
        },function(){
            $('.right1').stop().animate({
                'margin-left':'0'
            })
        })



            $('#bg3').hover(function(){
            $('.d1').stop().animate({
                'margin-left':'-100%'
            })
        },function(){
            $('.d1').stop().animate({
                'margin-left':'0'
            })
        })

        
         $('#bg4').hover(function(){
            $('.d2').stop().animate({
                'margin-left':'-100%'
            })
        },function(){
            $('.d2').stop().animate({
                'margin-left':'0'
            })
        })


  


        })
