
var current_page=1;//表示页数
var page_list=3;//表示每页现实几条数据
var z=data.length;
var zy= Math.ceil(z/page_list);//总页数
window.onload=function (){
    create_pagination(zy);
    fanye(0);
}
function create_pagination(zy){
    var containers = document.getElementsByClassName("pagination-blog");
    for(var c_item =0;c_item<containers.length;c_item++)
    {
        for(var item =zy;item>0;item--)
        {
            var otr=document.createElement('a');
            var turn_to = "javascript:turn_to_page("+item+");"
            otr.setAttribute("href",turn_to);    
            otr.setAttribute("class","blog-page transition"); 
            otr.appendChild(document.createTextNode(item));   
            containers[c_item].insertBefore(otr,containers[c_item].children[1]);
        }
    }   
}
function set_current_page(page){
    if(page>zy||page<0)
        page=1;
    var containers = document.getElementsByClassName("pagination-blog");    
    for(var c_item =0;c_item<containers.length;c_item++)
    {
        containers[c_item].children[current_page].setAttribute("class","blog-page transition");  
        containers[c_item].children[page].setAttribute("class","blog-page transition current-page");  
    }
    current_page = page;
}
function turn_to_page(page){
    if(page>zy||page<0)
        page=1;
    set_current_page(page);
    create_page(current_page);
}
function fanye(f)
{
    if(current_page==1 && f==-1)
    {
        alert('已经是第一页了');
        f=0;
    }
    if(current_page==zy && f==1)
    {
        alert('已经是最后一页了');
        f=0;
    }    
    set_current_page(current_page+f);
    create_page(current_page);
}
function create_page(page)
{    
    var otbod=document.getElementById('technic-body');
    var s=otbod.childElementCount;
    for(i=1;i<s-1;i++)
    {
        otbod.removeChild(otbod.children[1]);
    }
    var q=(page-1)*page_list;//页数-1 乘以每页现实多少条 结果为 本页从第几条开始
    for(var i=1;i<=page_list;i++)
    {
        var article = document.createElement('article');
        
        var title = document.createElement('h2');
        title.setAttribute("class","section-title dec-title");
        var title_span = document.createElement('span');
        title_span.appendChild(document.createTextNode(data[q]['title'])); 
        title.appendChild(title_span);
        article.appendChild(title);
    
        var img_div = document.createElement('div');
        img_div.setAttribute("class","blog-media");
        var box_item = document.createElement('div');
        box_item.setAttribute("class","box-item");
        var img_ajax = document.createElement('a');
        img_ajax.setAttribute("class","ajax");
        var actual_page = q+1;
        var linkto = "technic-single.php?page="+actual_page;
        img_ajax.setAttribute("href",linkto);
        var img_span = document.createElement('span');
        img_span.setAttribute("class","overlay");
        var img = document.createElement('img');
        img.setAttribute("class","respimg");
        img.setAttribute("src",data[q]['img']);
        img_ajax.appendChild(img_span);
        img_ajax.appendChild(img);
        box_item.appendChild(img_ajax);
        img_div.appendChild(box_item);
        article.appendChild(img_div);
        
        var blog_text = document.createElement('div');
        blog_text.setAttribute("class","blog-text");
        
        append_content(blog_text,data[q]['content']);
        
        var btn_more = document.createElement('a');
        btn_more.setAttribute("class","btn");
        btn_more.setAttribute("href",linkto);
        var btn_more_text = document.createElement('span');
        btn_more_text.appendChild(document.createTextNode("更多")); 
        var btn_more_icon = document.createElement('i');
        btn_more_icon.setAttribute("class","fa fa-long-arrow-right");        
        btn_more.appendChild(btn_more_text);
        btn_more.appendChild(btn_more_icon);        
        blog_text.appendChild(btn_more);
        
        article.appendChild(blog_text);
        
        otbod.insertBefore(article,otbod.children[otbod.childElementCount-1]);
        if(q+1==z)
        {
            break;
        }
        q++;
    }
    btn_to_top = document.getElementsByClassName("to-top")[0];
    btn_to_top.click();
}