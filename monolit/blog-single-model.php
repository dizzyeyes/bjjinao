
<div id="blog">
    <div id="title"></div>
    <img id="image" >
    <div id="content"></div>
</div>
<script type="text/javascript" src="data/blogs/blog-1.js"></script>
<script>
    var title = document.getElementById("title");
    title.innerHTML=set_title(data.title);
    var image = document.getElementById("image");
    image.src=data.img;
    var content = document.getElementById("content");
    content.innerHTML = set_content(data.content);
    function set_title(title)
    {
        return "<h1>"+title+"</h1>";
    }
    function set_subtitle(subtitle)
    {
        return "<h2>"+subtitle+"</h2>";
    }
    function set_content(content)
    {        
        var cont_toshow = "";
        var title_count = 1;
        for(var item in content){
            if(content[item].title!=undefined&&content[item].title!="")
            {
                cont_toshow += set_subtitle(title_count + ". " +content[item].title);
                title_count++;
            }
            var passages = content[item].p;
            for(var p_item in passages){
                cont_toshow += set_passage(passages[p_item]);
            }
        }
        return cont_toshow;
    }
    function set_passage(passage)
    {
        return "<p>"+passage+"</p>";
    }
</script>