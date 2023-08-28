function qbang($mod) {
var qq = $('#input').val();
if (qq == '') {
var alert_1 = layer.msg('请输入QQ', { icon: 5 });
} else {

dialog('<div style="text-align:center"><br><b style="color:#ff4425">仅供查询自己的QQ号码<br>不是自己的请立即退出本页面<br>否则，发生的一切后果本人不负责<br><br>确认查询？？</b><br><br><a onclick='+'queren("cha")'+' class="btn btn-block btn-primary" style="background: linear-gradient(to right,#b221ff,#14b7ff);">确认</a><br></div>', 1);


}
}
function queren(mod) {
console.log(mod);
layer.close(layer.index);
var qq = $('#input').val();
$url = 'https://zy.xywlapi.cc/qqapi?qq='+qq;

var alert_1 = layer.load(0, { shade: false });
$.getJSON($url, function (json) {
layer.close(alert_1);
if (json['status'] == 200 && json['message'] == '查询成功') {
layer.msg('查询成功', { icon: 1 });
$('#mobile').val(json['phone']);
$('#mobileduqu').val(json['phonediqu']);
$('#jiexi_data').css("display", "block");
} else {
layer.msg(json['msg']);
$('#jiexi_data').css("display", "none");
}
}
);
}
function dialog(code, exit) {
layer.open({
type: 1,
skin: 'layui-layer-lan', //加上边框
area: ['350px', ''], //宽高
closeBtn: exit,
shade: 0.8,
title: '提示',
btnAlign: 'c',
content: code,
});
}