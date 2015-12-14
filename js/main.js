/**
 * Created by laurel on 15/12/14.
 */
$(function() {
    //获取产品列表的总长度
    var width = parseInt($(".product-list").css("width"));
    //设置点击事件
    $("#left-arrow").click(function() {
        //获取当前的css属性left的值
        var currentLeftValue = parseInt($(".product-list").css("left"));
        //alert(Math.abs(currentLeftValue));
        //如果当前left的绝对值小于等于总长度，则向左移动；右移事件同理。
        if (Math.abs(currentLeftValue) <= width) {
            var leftValue = currentLeftValue + 180;
            $(".product-list").stop().animate({
                left : leftValue + 'px'
            }, 600);
        }
    });
    $("#right-arrow").click(function() {
        var currentLeftValue = parseInt($(".product-list").css("left"));
        //alert(currentLeftValue);
        if (Math.abs(currentLeftValue) <= width) {
            var leftValue = currentLeftValue - 180;
            $(".product-list").stop().animate({
                left : leftValue + 'px'
            }, 600);
        }
    });
})