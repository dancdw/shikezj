//下拉刷新
var pid = 1;
var psize = 10;
var next = true;
var GetListUrl = "";
var classifyid = 0;
var needbottom = false;
var timer;

var isAndroid = false;
var isAndroidWeb = false;
var isiOS = false;
var isiOSWeb = false;

var HOME_URL = "http://m.shouzhuanbang.com";

//微信对象，分享
var weixintitle, weixincontent, weixinimg, weixinurl;
var sharetitle = '';
var sharecontent = '';
var shareimg = '';
var shareurl = '';

var isWx = isWeiXin();

$(function () {

    //初始化页面属性
    InitPageInfo();

    if (isWx) {
        $(".ewm-img").show();
    }

    if (isiOSWeb || isiOSWeb) {
        $(".statement").show();
    }

    Date.prototype.format = function (format) //author: meizz
    {
        var o = {
            "M+": this.getMonth() + 1, //month
            "d+": this.getDate(),    //day
            "h+": this.getHours(),   //hour
            "m+": this.getMinutes(), //minute
            "s+": this.getSeconds(), //second
            "q+": Math.floor((this.getMonth() + 3) / 3),  //quarter
            "S": this.getMilliseconds() //millisecond
        }
        if (/(y+)/.test(format)) format = format.replace(RegExp.$1,
        (this.getFullYear() + "").substr(4 - RegExp.$1.length));
        for (var k in o) if (new RegExp("(" + k + ")").test(format))
            format = format.replace(RegExp.$1,
          RegExp.$1.length == 1 ? o[k] :
            ("00" + o[k]).substr(("" + o[k]).length));
        return format;
    }

    $(window).scroll(function () {

        var scrollTop = $(this).scrollTop();
        var scrollHeight = $(document).height();
        var windowHeight = $(this).height();

        if (scrollTop + windowHeight == scrollHeight) {
            if (typeof GetList != "undefined") {
                GetList();
            }

        }

    });

    InitLink($(".list-txt a"));
    InitShareInfo();
});

//列表页的下拉刷新方法
function GetList() {

    if (next && GetListUrl != "") {
        next = false;
        pid++;
        $.ajax({
            url: GetListUrl,
            data: { pid: pid, psize: psize },
            dataType: "json",
            beforeSend: function () {

                //$(".loading").fadeIn();
                timer = setInterval('GetDown()', 1);
                $(".loading").animate({ "height": "60px" }, function () {
                    clearInterval(timer);
                });
            },
            success: function (data) {

                if (data.Status == "n") {
                    alert(data.Info);
                    return;
                }

                if (data.List.length == 0 || data.List.length < psize)
                    next = false;
                else
                    next = true;

                if (typeof MakeHtml != "undefined") {
                    MakeHtml(data);
                }

                InitLink($(".list-txt a"));

            },
            complete: function () {
                clearInterval(timer);
                $(".loading").animate({ "height": "0px" });
            }
        });
    }
}

//格式化Json的时间类型
function formatTime(val) {
    var re = /-?\d+/;
    var m = re.exec(val);
    var d = new Date(parseInt(m[0]));
    // 按【2012/02/13】的格式返回日期
    return d.format("yyyy-MM-dd");
}

function formatDate(val, format) {
    var re = /-?\d+/;
    var m = re.exec(val);
    var d = new Date(parseInt(m[0]));
    // 按【2012/02/13】的格式返回日期
    return d.format(format);
}

//循环让滚动条保持在最底部
function GetDown() {
    var scrollTop = $(window).scrollTop();
    var scrollHeight = $(document).height();
    var windowHeight = $(window).height();

    console.info((scrollTop + windowHeight) + " ==== " + scrollHeight);

    if (scrollTop + windowHeight != scrollHeight) {
        $(window).scrollTop($(window).scrollTop() + 1);
    }
}

function isWeiXin() {
    var ua = window.navigator.userAgent.toLowerCase();
    if (ua.match(/MicroMessenger/i) == 'micromessenger') {
        return true;
    } else {
        return false;
    }
}

function ShowWxShare() {
    $("#weixinshareimg").fadeIn().click(function () {
        HideFloat();
    });
    $(".grayback").fadeIn().click(function () {
        HideFloat();
    });;
}


//隐藏所有浮层
function HideFloat() {
    $("#weixinshareimg").fadeOut();
    $(".grayback").fadeOut();
    $(".uploading").fadeOut();
}

//初始化页面属性
function InitPageInfo() {

    if (navigator.userAgent.indexOf("client-szb-android") > -1) {
        try {
            if (typeof szb == "undefined")
                isAndroid = false;
            else {
                isAndroid = true;
                //joke.setComment(infoid, infotype);
            }
        }
        catch (e) {
            isAndroid = false;
        }
    }
    else if (navigator.userAgent.indexOf("Android") > -1)
        isAndroidWeb = true;

    if (navigator.userAgent.indexOf("client-zsb-ios") > -1)
        isiOS = true;
    else if (navigator.userAgent.toLocaleLowerCase().indexOf("iphone") > -1)
        isiOSWeb = true;
}

//传入A标签的集合
function InitLink(obj) {

    $(obj).each(function () {

        var hreftmp = $(this).attr("href");

        if (hreftmp == undefined || hreftmp.indexOf("javascript:") > -1)
            return true;

        if (hreftmp.indexOf("http://") == -1)
            hreftmp = HOME_URL + hreftmp;

        if (isAndroid || isiOS)
            $(this).attr("href", "javascript:OpenWindow('" + hreftmp + "');");

    });

}

function OpenWindow(url) {

    if (isiOS)
        iOSOpare(url);
    else if (isAndroid)
        szb.openWindow(url);
    else
        window.location.href = url;

}

function iOSOpare(url) {

    if (url.toLocaleLowerCase().indexOf("ioscallback://") == -1)
        url = "ioscallback://openurl?url=" + url;

    $(document.body).append("<iframe src='" + url + "' style='display:none'></iframe>");

}

//初始化分享数据，用于详情页
function InitShareInfo() {

    if (isAndroid) {
        szb.setShareData(shareimg, shareurl, sharetitle, sharecontent);
    }

    if (isiOS) {
        //ShowMsg(query);
        iOSOpare("ioscallback://setShareData?share_title=" + sharetitle + "&share_content=" + sharecontent + "&share_pic=" + shareimg + "&share_link=" + shareurl);
    }

    if (isWx) {
        weixintitle = sharetitle;
        weixinimg = shareimg;
        weixincontent = sharecontent;
        weixinurl = shareurl;
    }
}