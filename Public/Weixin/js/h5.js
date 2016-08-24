/**
 * Created by netperson on 16/1/4.
 */
function myAlert(_content)
{
    var bgcolor='#666';
    var time=2;
    layer.open({
        content:_content,
        style: 'background-color:'+bgcolor+'; color:#fff; border:none;',
        time: time
    });
}