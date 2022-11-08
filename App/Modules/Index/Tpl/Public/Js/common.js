$(document).ready(function () {
    $("#navmenu ul li:has(ul)").hover(function () {
        $(this).children("a").css({ color: "#fff" });
        if ($(this).find("li").length > 0) {
            $(this).children("ul").stop(true, true).slideDown(400)
        }
    }, function () {
        $(this).children("a").css({ color: "#E8E9F2" });
        $(this).children("ul").stop(true, true).slideUp("fast")
    });
})

//页面加载提示
jQuery(function(){
	jQuery('#loading-one').empty().append('页面加载完毕.').parent().fadeOut('slow');
});

//图片
$(function() {
	$("#article_content img").lazyload({
	effect : "fadeIn"
	});
});

//引用
$(function(){
    $("h4.backs").bind("click",function(){
	    var $content = $(this).next("div.track");
	    if($content.is(":visible")){
			$content.hide("200");
		}else{
			$content.show("200");
		}
	})
})

$(document).ready(function () {
    getsiteID = $('div.site_nav1, div.site_nav2').attr('id');
    $('div.site_nav dl a').each(function () {
        getNavClass = $(this).attr('class');
        if (getNavClass == getsiteID) {
            $('div.site_nav dl a').removeClass('cur');
            $(this).addClass('cur')
        }
    });
	
	if ($.browser.msie) {
		$("#divLogin").append("<a id=\"showbtn\" style=\"cursor:pointer;\" href=\"/wp-login.php\">登录</a>");
	}
	else{
		$("#divLogin").append("<a id=\"showbtn\" style=\"cursor:pointer;\" onclick=\"showid('smallLay');\">登录</a>");
	}
	
    $('div.hot_box a.title, div.index_art li a, ul.content_list a').hover(function () {
        $(this).animate({ paddingLeft: "20px" }, 300);
    }, function () {
        $(this).animate({ paddingLeft: "8px" }, 300);
    }); 
	 $('div.hot_box a.title, div.index_art li a, ul.content_title_list a').hover(function () {
        $(this).animate({ paddingLeft: "20px" }, 300);
    }, function () {
        $(this).animate({ paddingLeft: "0px" }, 300);
    }); 
	$('div.topcommentlist ul li span a').hover(function () {
        $(this).animate({ paddingLeft: "15px" }, 300);
    }, function () {
        $(this).animate({ paddingLeft: "3px" }, 300);
    }); 
    $("div.tip_trigger a.img").hover(function () {
        $(this).parent('div.tip_trigger').css({ 'background': '#e23a0a', 'z-index': '1000' });
        $('#h_coolsite .block').show();
        tip = $(this).siblings('.tip');
        tip.show();
    }, function () {
        $(this).parent('div.tip_trigger').css({ 'background': 'none', 'z-index': '0' });
        $('#h_coolsite .block').hide(); tip.hide();
    })
	//Tab分类列表选项卡
	$('#postviewlist:eq(0) .tit strong').each(function(i){
		$(this).click(function(){
			$(this).addClass('on').siblings('strong').removeClass('on');
			$($('#postviewlist:eq(0) ul')[i]).fadeIn().siblings('ul').hide();
		})
	})
	//Tab分类列表选项卡
	$('#tabviewlist:eq(0) .tit strong').each(function(i){
		$(this).click(function(){
			$(this).addClass('on').siblings('strong').removeClass('on');
			$($('#tabviewlist:eq(0) ul')[i]).fadeIn().siblings('ul').hide();
		})
	})
	//Tab分类列表选项卡
	$('#postcommentlist:eq(0) .tit strong').each(function(i){
		$(this).click(function(){
			$(this).addClass('on').siblings('strong').removeClass('on');
			$($('#postcommentlist:eq(0) ul')[i]).fadeIn().siblings('ul').hide();
		})
	})
});

//set_avatar
$(document).ready(function () {
    $('#respond').hover(function () {
        $(this).find('.set_avatar').stop(true, true).fadeIn();
    }, function () {
        $(this).find('.set_avatar').stop(true, true).fadeOut();
    });
});

eval(function (p, a, c, k, e, d) { e = function (c) { return (c < a ? '' : e(parseInt(c / a))) + ((c = c % a) > 35 ? String.fromCharCode(c + 29) : c.toString(36)) }; if (!''.replace(/^/, String)) { while (c--) { d[e(c)] = k[c] || e(c) } k = [function (e) { return d[e] } ]; e = function () { return '\\w+' }; c = 1 }; while (c--) { if (k[c]) { p = p.replace(new RegExp('\\b' + e(c) + '\\b', 'g'), k[c]) } } return p } ('(5($){$.J.L=5(r){8 1={d:0,A:0,b:"h",v:"N",3:4};6(r){$.D(1,r)}8 m=9;6("h"==1.b){$(1.3).p("h",5(b){8 C=0;m.t(5(){6(!$.k(9,1)&&!$.l(9,1)){$(9).z("o")}j{6(C++>1.A){g B}}});8 w=$.M(m,5(f){g!f.e});m=$(w)})}g 9.t(5(){8 2=9;$(2).c("s",$(2).c("i"));6("h"!=1.b||$.k(2,1)||$.l(2,1)){6(1.u){$(2).c("i",1.u)}j{$(2).K("i")}2.e=B}j{2.e=x}$(2).T("o",5(){6(!9.e){$("<V />").p("X",5(){$(2).Y().c("i",$(2).c("s"))[1.v](1.Z);2.e=x}).c("i",$(2).c("s"))}});6("h"!=1.b){$(2).p(1.b,5(b){6(!2.e){$(2).z("o")}})}})};$.k=5(f,1){6(1.3===E||1.3===4){8 7=$(4).F()+$(4).O()}j{8 7=$(1.3).n().G+$(1.3).F()}g 7<=$(f).n().G-1.d};$.l=5(f,1){6(1.3===E||1.3===4){8 7=$(4).I()+$(4).U()}j{8 7=$(1.3).n().q+$(1.3).I()}g 7<=$(f).n().q-1.d};$.D($.P[\':\'],{"Q-H-7":"$.k(a, {d : 0, 3: 4})","R-H-7":"!$.k(a, {d : 0, 3: 4})","S-y-7":"$.l(a, {d : 0, 3: 4})","q-y-7":"!$.l(a, {d : 0, 3: 4})"})})(W);', 62, 62, '|settings|self|container|window|function|if|fold|var|this||event|attr|threshold|loaded|element|return|scroll|src|else|belowthefold|rightoffold|elements|offset|appear|bind|left|options|original|each|placeholder|effect|temp|true|of|trigger|failurelimit|false|counter|extend|undefined|height|top|the|width|fn|removeAttr|lazyload|grep|show|scrollTop|expr|below|above|right|one|scrollLeft|img|jQuery|load|hide|effectspeed'.split('|'), 0, {}));

//tab
$(document).ready(function () {
    $('.com_cont:not(:first)').hide();
    $('#new_art').show();
    $("ul.sj_nav li a").click(function () {
        var content_show = $(this).attr("title");
        $("ul.sj_nav li a").removeClass("active");
        $(this).addClass("active");
        $('.com_cont').hide();
        $("#" + content_show).show();
        return false;
    });
});

//RSS Drop
$(document).ready(function () {
    $("#my-feed").hover(function () {
        $(this).children("a").css({"border-color":"#BBB",color:"#444"});
		$(this).children("a").children("span").css({opacity: 1});
		$(this).children("div").css({display:"block"});
    }, function () {
		$(this).children("a").css({"border-color":"#CCC",color:"#666"});
		$(this).children("a").children("span").css({opacity: 0.8});
		$(this).children("div").css({display:"none"});
    });
	$("#my-qun").hover(function () {
        $(this).children("a").css({"border-color":"#BBB",color:"#444"});
		$(this).children("a").children("span").css({opacity: 1});
		$(this).children("div").css({display:"block"});
    }, function () {
		$(this).children("a").css({"border-color":"#CCC",color:"#666"});
		$(this).children("a").children("span").css({opacity: 0.8});
		$(this).children("div").css({display:"none"});
    });
});


//updown
jQuery(document).ready(function ($) {
    $body = (window.opera) ? (document.compatMode == "CSS1Compat" ? $("html") : $("body")) : $("html,body");
    $("#shang").mouseover(function () { up() }).mouseout(function () { clearTimeout(fq) }).click(function () { $body.animate({ scrollTop: 0 }, 400) }); $("#xia").mouseover(function () { dn() }).mouseout(function () { clearTimeout(fq) }).click(function () { $body.animate({ scrollTop: $(document).height() }, 400) }); $("#comt").click(function () { $body.animate({ scrollTop: $("#comments").offset().top }, 400) });
}); function up() { $wd = $(window); $wd.scrollTop($wd.scrollTop() - 1); fq = setTimeout("up()", 50) }; function dn() { $wd = $(window); $wd.scrollTop($wd.scrollTop() + 1); fq = setTimeout("dn()", 50) };


// 登录
function showid(idname) {
    var isIE = (document.all) ? true : false;
    var isIE6 = isIE && ([/MSIE (\d)\.0/i.exec(navigator.userAgent)][0][1] == 6);
    var newbox = document.getElementById(idname);
    newbox.style.zIndex = "9999";
    newbox.style.display = "block";
    newbox.style.position = !isIE6 ? "fixed" : "absolute";
    newbox.style.top = newbox.style.left = "50%";
    newbox.style.marginTop = -newbox.offsetHeight / 2 + "px";
    newbox.style.marginLeft = -newbox.offsetWidth / 2 + "px";
    var layer = document.createElement("div");
    layer.id = "layer";
    layer.style.width = layer.style.height = "100%";
    layer.style.position = !isIE6 ? "fixed" : "absolute";
    layer.style.top = layer.style.left = 0;
    layer.style.backgroundColor = "#000";
    layer.style.zIndex = "9990";
    layer.style.opacity = "0.6";
    document.body.appendChild(layer);
    var sel = document.getElementsByTagName("select");
    for (var i = 0; i < sel.length; i++) {
        sel[i].style.visibility = "hidden";
    }
    function layer_iestyle() {
        layer.style.width = Math.max(document.documentElement.scrollWidth, document.documentElement.clientWidth)
+ "px";
        layer.style.height = Math.max(document.documentElement.scrollHeight, document.documentElement.clientHeight) +
"px";
    }
    function newbox_iestyle() {
        newbox.style.marginTop = document.documentElement.scrollTop - newbox.offsetHeight / 2 + "px";
        newbox.style.marginLeft = document.documentElement.scrollLeft - newbox.offsetWidth / 2 + "px";
    }
    if (isIE) { layer.style.filter = "alpha(opacity=30)"; }
    if (isIE6) {
        layer_iestyle()
        newbox_iestyle();
        window.attachEvent("onscroll", function () {
            newbox_iestyle();
        })
        window.attachEvent("onresize", layer_iestyle)
    }
    layer.onclick = function () {
        newbox.style.display = "none"; layer.style.display = "none"; for (var i = 0; i < sel.length; i++) {
            sel[i].style.visibility = "visible";
        }
    }
}

// 文字滚动
(function ($) {
    $.fn.extend({
        Scroll: function (opt, callback) {
            if (!opt) var opt = {};
            var _this = this.eq(0).find("ul:first");
            var lineH = _this.find("li:first").height(),
			line = opt.line ? parseInt(opt.line, 10) : parseInt(this.height() / lineH, 10),
			speed = opt.speed ? parseInt(opt.speed, 10) : 7000, //卷动速度，数值越大，速度越慢（毫秒）
			timer = opt.timer ? parseInt(opt.timer, 10) : 7000; //滚动的时间间隔（毫秒）
            if (line == 0) line = 1;
            var upHeight = 0 - line * lineH;
            scrollUp = function () {
                _this.animate({
                    marginTop: upHeight
                }, speed, function () {
                    for (i = 1; i <= line; i++) {
                        _this.find("li:first").appendTo(_this);
                    }
                    _this.css({ marginTop: 0 });
                });
            }
            _this.hover(function () {
                clearInterval(timerID);
            }, function () {
                timerID = setInterval("scrollUp()", timer);
            }).mouseout();
        }
    })
})(jQuery);

function tabChange(obj, id) {
    var arrayli = obj.parentNode.getElementsByTagName("li"); //获取li数组
    var arrayul = document.getElementById(id).getElementsByTagName("ul"); //获取ul数组
    for (i = 0; i < arrayul.length; i++) {
        if (obj == arrayli[i]) {
            arrayli[i].className = "current";
            arrayul[i].className = "";
        }
        else {
            arrayli[i].className = "";
            arrayul[i].className = "hidden";
        }
    }
}


// 评论贴图
function embedImage() {
	var URL = prompt('请输入图片 URL 地址:', 'http://');
	if (URL) {
		document.getElementById('comment').value = document.getElementById('comment').value + '[img]' + URL + '[/img]';
	}
}

// 邮件

function initrequest(url){
	var http_request = false;
	//initialize vars
	var email=document.wr.email.value;
	var name=document.wr.name.value;
	var message=document.wr.message.value;
	var website=document.wr.website.value;
	var hint="";
	var msg="姓名: "+name+" \n网址: "+website+" \n邮箱: "+email+"\n\n"+"\n"+"邮件内容:\n"+message;
   	
	var passData="email="+email+"&name="+name+"&message="+msg;

	if (window.XMLHttpRequest) { // Mozilla, Safari, ...
        http_request = new XMLHttpRequest();
            if (http_request.overrideMimeType) {
                http_request.overrideMimeType('text/xml');
            }
        } else if (window.ActiveXObject) { // IE
            try {
                http_request = new ActiveXObject("Msxml2.XMLHTTP");
            } catch (e) {
                try {
                    http_request = new ActiveXObject("Microsoft.XMLHTTP");
                } catch (e) {}
            }
        }
        if (!http_request) {
            alert('Error: Unable to initialize class');
            return false;
        }
        http_request.onreadystatechange = function() { sendrequest(http_request); };
        http_request.open('POST', url, true);
       	http_request.setRequestHeader('Content-Type','application/x-www-form-urlencoded; charset=UTF-8');
		if (email && name && message)
		{
			http_request.send(passData);

		}else 
		{
			if (!email)
			{
				hint+="请填写电子邮件地址<br />";			
			}
			if (!name)
			{
				hint+="请填写您的昵称<br />";			
			}
			if (!message)
			{
				hint+="请填写您的留言<br />";			
			}
			
			document.getElementById('hint').innerHTML=hint;	
			
		}
}

function sendrequest(http_request) {
	if (http_request.readyState == 4) {
		if (http_request.status == 200) {
			document.getElementById('hint').innerHTML = http_request.responseText;	
			document.getElementById('form_name').value = '';
			document.getElementById('form_email').value = '';
			document.getElementById('form_website').value = '';
			document.getElementById('form_message').value = '';
		} 
		else {
			HideIndicator()
			document.getElementById('hint').innerHTML = '邮件没有发送成功，请稍后再试。谢谢！';
		}
	}
}