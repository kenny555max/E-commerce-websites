$(document).ready(function(){
    $(".set-bg").each(function(){
        let bg = $(this).data("setbg");

        $(this).css(
            'background-image', 'url(' + bg + ')'
        )
    });

    $(".banner").owlCarousel({
        items: 1,
        autoplay: true,
        smartSpeed: 1200,
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
        loop: true,
        margin: 0,
        autoHeight: false,
        dots: false,
        nav: true,
        navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>']
    });


    $(".slide-images").owlCarousel({
        items: 3,
        loop: true,
        nav: true,
        navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
        smartSpeed: 1200,
        dots: true,
        autoplay: true,
        margin: 20,
        responsive: {
            1024: {
                items: 3,
                margin: 20
            },
            991: {
                items: 3,
                margin: 20
            },
            767: {
                items: 2,
                margin: 20
            },
            500: {
                items: 2,
                margin: 20
            },
            375: {
                items: 1,
                margin: 20
            }
        }
    })

    $(".logo-carousel").owlCarousel({
        loop: false,
        autoplay: false,
        items: 5,
        responsive: {
            991: {
                items: 4
            },
            767: {
                items: 3
            },
            500: {
                items: 2
            },
            375: {
                items: 2
            }
        }
    });


    $(".navigation-menu").click(function(){
        $("#port-links").slideToggle('slow');
        $("ul ul").css(
            'display', 'none'
        );
    })

    $(".dropdown > a").click(function(e){
        e.preventDefault();
        $("ul ul").slideUp();
        $(this).next().stop(true, false, true).slideToggle();
    });

    $(window).resize(function(){
        if ($(window).width() > 767) {
            $("ul").removeAttr("style");
        }
    });


    $(`.inc`).click(function(){
        let $incVal = $(`.input[data-id='${$(this).data("id")}']`);
        let $price = $(`.price[data-id='${$(this).data("id")}']`);
        let $deal_price = $(".deal_price");
        let $total_price = $(".total_price");

        $.ajax({
            url: "Templates/__ajax.php",
            type: "post",
            data: {
                itemid: $(this).data("id")
            },
            success: function(result) {
                let obj = JSON.parse(result);
                let item_price = obj[0]['item_price'];
                
                if ($incVal.val() < 10) {
                    newVal = parseFloat($incVal.val()) + 1;

                    $incVal.val(newVal);
                    
                    // increase price
                    $price.text(parseInt(item_price * newVal).toFixed(2));     
    
                    let subtotal = parseInt($deal_price.text()) + parseInt(item_price);
                    
                    $deal_price.text(subtotal.toFixed(2));
                    $total_price.text(subtotal.toFixed(2));
                }else{
                    newVal = 10;
                }
                
            }
        });
    });

    $('.dec').click(function(){
        let $incVal = $(`.input[data-id='${$(this).data("id")}']`);
        let $price = $(`.price[data-id='${$(this).data("id")}']`)
        let $deal_price = $(".deal_price");
        let $total_price = $(".total_price");
        
        $.ajax({
            url: "Templates/__ajax.php",
            type: "post",
            data: {
                itemid: $(this).data("id")
            }, success: function(result) {
                let obj = JSON.parse(result);
                let item_price = obj[0]['item_price'];
                
                if ($incVal.val() > 1) {
                    var newVal = parseFloat($incVal.val()) - 1;
                    
                    $incVal.val(newVal);
                    
                    // increase price
                    $price.text(parseInt(item_price * newVal).toFixed(2));
    
                    let subtotal = parseInt($deal_price.text()) - parseInt(item_price);
                    
                    $deal_price.text(subtotal.toFixed(2));
                    $total_price.text(subtotal.toFixed(2));
                    
                }else{
                    newVal = 1;
                }
            }
        });
    })


    $(".discountBtn").click(function(e){
        e.preventDefault();
        let discountInput = $(".discountInput").val();
        let total_price = $(".total_price");

        if (discountInput === "kenny") {
            console.log(total_price.text());
            let total = parseInt(total_price.text() * 0.05);
            total_price.text(parseInt(total_price.text() - total).toFixed(2));
        }else{
            let couponError = $(".coupon-error");

            couponError.css(
                'display', 'block'
            );
        }
    });
});