/* Google Analytics: change UA-XXXXX-X to be your site's ID.
(function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
    function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
    e=o.createElement(i);r=o.getElementsByTagName(i)[0];
    e.src='//www.google-analytics.com/analytics.js';
    r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
ga('create','UA-XXXXX-X');ga('send','pageview');
 */

var doSearchStatus=false;
function doSearch(){
	if (doSearchStatus===false){
		$('#search-input').css({
			'width':'150px'
		});
        $("#search-input").focus();
		doSearchStatus=true;
	}
	else{
		$('#search-input').css({
			'width':'0px'
		});
		doSearchStatus=false;
	}
}

//Change numbers to Arabic Begin
persian={0:'۰',1:'۱',2:'۲',3:'۳',4:'۴',5:'۵',6:'۶',7:'۷',8:'۸',9:'۹'};
function traverse(el){
    if(el.nodeType==3){
        var list=el.data.match(/[0-9]/g);
        if(list!=null && list.length!=0){
            for(var i=0;i<list.length;i++)
                el.data=el.data.replace(list[i],persian[list[i]]);
        }
    }
    for(var i=0;i<el.childNodes.length;i++){
        traverse(el.childNodes[i]);
    }
}
traverse(document.body);
//Change numbers to Arabic End


/*
function showDescription(){
    $('#authorDescription').css({
		'width':'380px',
        'padding':'5px 35px 5px 10px',
        'color':'#fff',
	});
}
function hideDescription(){
    $('#authorDescription').css({
		'width':'0px',
        'padding':'0',
	});
}
*/