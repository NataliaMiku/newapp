          
        $(document).foundation();
            (function($){ 
             jQuery.fn.animateEl = function(time,c,d)
             { 
                var o = $(this); 
                o.removeClass().addClass(c);
                 o.queue(function()
                 {
                    setTimeout(function()
                    { o.dequeue(); 
                      o.removeClass().addClass(d);
                    }, time);
                    clearInterval(time);
                 });
             };
            })(jQuery);
                     
            $("#animated-orbit").on("after-slide-change.fndtn.orbit", function(event) {
                //console.info('slide start');
                //for all slides  
                $('.banner-title h1').animateEl(500,'fadeOut animated','fadeInDown animated');
                $('.banner-title h2').animateEl(500,'fadeOut animated','fadeInUp animated');
                $('#slide1 .canvas-laptop').animateEl(1000,'fadeOutDownBig animated','fadeInUpBig delay-03s animated');
                 
                //images slide1                     
                $('#slide1 #canvas-ipad').animateEl(0,'bounceOutLeft animated','bounceInLeft animated delay-03s');
                $('#slide1 #canvas-iphone').animateEl(0,'fadeOut animated','fadeIn animated delay-03s');
                $('#slide1 #canvas-coffee').animateEl(0,'rotateOutUpRight animated','rotateInUpRight animated delay-03s');
                $('#slide1 #canvas-tablet').animateEl(0,'fadeOut animated','fadeIn animated delay-03s');         
                $('#slide1 #canvas-pen').animateEl(0,'fadeOutUpBig animated','fadeInUpBig animated delay-03s');
                //images slide2  
                $('#slide2 #canvas-notebook').animateEl(0,'fadeOut animated','bounceInLeft animated');
                $('#slide2 #canvas-glasses').animateEl(0,'fadeOut animated','fadeIn animated');
                $('#slide2 #canvas-pen-ball').animateEl(0,'fadeOut animated','fadeIn animated');
                $('#slide2 #canvas-pencil').animateEl(0,'fadeOut animated','fadeIn animated');
                $('#slide2 #canvas-razor').animateEl(0,'fadeOut animated','rotateInUpRight animated');
                $('#slide2 #canvas-wood').animateEl(0,'fadeOut animated','rotateInUpRight animated');
                $('#slide2 #canvas-envelop').animateEl(0,'fadeOut animated','fadeIn animated');
                $('#slide2 #canvas-packet').animateEl(0,'fadeOut animated','fadeInUpBig animated');
                $('#slide2 #canvas-calc').animateEl(0,'fadeOut animated','rotateInUpRight delay-05s animated');
                //images slide3
                $('#slide3 #canvas-diary').animateEl(0,'fadeOut animated','bounceInRight animated');
                $('#slide3 #canvas-sticky').animateEl(0,'fadeOut animated','fadeIn animated');
                $('#slide3 #canvas-iphone-gray').animateEl(0,'fadeOut animated','fadeIn animated');
                $('#slide3 #canvas-memory').animateEl(0,'fadeOut animated','rotateInUpRight animated');
                $('#slide3 #canvas-camera').animateEl(0,'fadeOut animated','rotateInUpLeft animated');

                    
            });