/**
 * 滑动条
 * 思路:
 * 1.css画出滑动条的三个组成部分:bar(全部滑动条),completed(已完成滑动条),slider(滑动块)
 * 2.实现slider的拖拽
 * 3.实现completed的实时更新
 * Created by laurel on 15/12/20.
 */
(function ($) {
    $.fn.SliderBar = function (options) {
        // 第一个参数为{},是为了避免破坏掉默认参数对象$.fn.SliderBar.default
        var settings = $.extend({}, $.fn.SliderBar.default, options || {});
        // 兼容jQuery对象和字符串.
        // 如果是字符串,则将其转换成jQuery对象
        settings.renderTo = ($.type(settings.renderTo) == 'string' ? $(settings.renderTo) : settings.renderTo);
        console.log(settings);

        var bar = $('<div></div>').attr('class', settings.barClassName).appendTo(settings.renderTo);
        var completed = $('<div></div>').attr('class', settings.completedClassName).appendTo(bar);
        var slider = $('<div></div>').attr('class', settings.sliderClassName).appendTo(bar);

        var barWidth = bar.width();
        var sliderWidth = bar.width();

        console.log(this);
        return this.each(function () {

        });

    };

    $.fn.SliderBar.default = {
        renderTo: $(document.body),//滑动条添加的位置
        barClassName: 'bar',
        completedClassName: 'completed',
        sliderClassName: 'slider',
        barWidth: 400,//滑动宽度
        sliderWidth: 300,//滑块宽度
        onChanging: function () {
        },// 拖拽时触发的事件
        onChanged: function () {
        }//拖拽完成时触发的时间
    };
})(jQuery);