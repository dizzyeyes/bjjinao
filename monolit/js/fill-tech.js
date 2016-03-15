
    function set_title(title)
    {
        var span = document.createElement("span");
        span.appendChild(document.createTextNode(title));
        return span;
    }
    function set_subtitle(subtitle)
    {
        var title = document.createElement("h3");
        title.appendChild(document.createTextNode(subtitle));
        title.setAttribute("class","art1 big");
        return title;
    }
    function append_content(container, content)
    {        
        var title_count = 1;
        for(var item in content){
            if(content[item].title!=undefined&&content[item].title!="")
            {
                container.appendChild( set_subtitle(intToChinese(title_count) + "、 " +content[item].title) );
                title_count++;
            }
            var passages = content[item].p;
            for(var p_item in passages){
                container.appendChild(set_passage(passages[p_item]));
            }
        }
        return container;
    }
    function set_passage(passage)
    {
        var p_text = document.createElement("p");
        p_text.appendChild(document.createTextNode(passage));
        p_text.setAttribute("class","text big art3");
        return p_text;
    }
    function intToChinese ( str ,complex) {
     str = str+'';
     var len = str.length-1;
     var idxs = ['','十','百','千','万','十','百','千','亿','十','百','千','万','十','百','千','亿'];
     var num;
     if(complex == 1)
         num = ['零','壹','贰','叁','肆','伍','陆','柒','捌','玖'];
     else num = ['零','一','二','三','四','五','六','七','八','九'];
     return str.replace(/([1-9]|0+)/g,function( $, $1, idx, full) {
      var pos = 0;
      if( $1[0] != '0' ){
       pos = len-idx;
       if( idx == 0 && $1[0] == 1 && idxs[len-idx] == '十'){
        return idxs[len-idx];
       }
       return num[$1[0]] + idxs[len-idx];
      } else {
       var left = len - idx;
       var right = len - idx + $1.length;
       if( Math.floor(right/4) - Math.floor(left/4) > 0 ){
        pos = left - left%4;
       }
       if( pos ){
        return idxs[pos] + num[$1[0]];
       } else if( idx + $1.length >= len ){
        return '';
       }else {
        return num[$1[0]]
       }
      }
     });
    }