/*IE下控件虚线框清除*/
function flash(url,width,height,var1) {
    document.write('<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,24,0" width="'+width+'" height="'+height+'">');
    document.write('<param name="movie" value="'+url+'" />');
    document.write('<param name="quality" value="high" />');
    document.write('<param name="flashVars" value="'+var1+'" />');
    document.write('<param name="wmode" value="transparent" />');
    document.write('<param name="menu" value="false" />');
    document.write('<embed flashvars="'+var1+'" src="'+url+'" wmode="transparent" quality="high" menu="false" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="'+width+'" height="'+height+'"></embed>');
    document.write('</object>');
}
/*FF下连续长字段自动换行 */
function toBreakWord(intLen){
var obj=document.getElementById("ff");
var strContent=obj.innerHTML;
var strTemp="";
while(strContent.length>intLen){
strTemp+=strContent.substr(0,intLen)+"&#10;";
strContent=strContent.substr(intLen,strContent.length);
}
strTemp+="&#10;"+strContent;
obj.innerHTML=strTemp;
}
if(document.getElementById  &&  !document.all)  toBreakWord(37)

/*通用加入收藏夹代码 <a href="javascript:favorites()">加入收藏</a> */
function favorites(){
var title=document.title
var url=document.location.href
if (window.sidebar) window.sidebar.addPanel(title, url,"");
else if( window.opera && window.print ){
var mbm = document.createElement('a');
mbm.setAttribute('rel','sidebar');
mbm.setAttribute('href',url);
mbm.setAttribute('title',title);
mbm.click();}
else if( document.all ) window.external.AddFavorite( url, title);
}

/*anti_spam 防范垃圾邮件 anti_spam("domain","liam"); */
function anti_spam(domain,in_email) {
  var out_email = "", i;

  for (i = 0; i < in_email.length; i++) {
    out_email += in_email.charAt(in_email.length - i - 1);
  };
  document.write("<a href=\"mailto:" + out_email +"@"+ domain + "\">" + out_email +"@"+ domain + "</a>");
}
function anti_mail(domain,in_email) {
  document.write("<a href=\"mailto:" + in_email +"@"+ domain + "\">" + in_email +"@"+ domain + "</a>");
}

/*Div层隐藏 */
function selecthide(ucode){
	if (ucode=='page')
	{
		document.getElementById("showContent").style.display='none';
	}
	else {
		document.getElementById("showContent").style.display='';
		document.frames.in_iframe.location.reload();
	}
}
/*显示隐藏图层 */
function showLayer(obj)
{
	if(obj.style.display == ""){
		obj.style.display = "none";
    } else {
	    obj.style.display = "";
	}
}


//document.write('<!--[if lt IE 7]><style type="text/css">*{ behavior: url(scripts/iepngfix.htc) }</style><![endif]-->');