	function startTime() {
			var today = new Date();
			var h = today.getHours();
			var m = today.getMinutes();
			var s = today.getSeconds();
			m = checkTime(m);
			s = checkTime(s);
			document.getElementById('txt').innerHTML =
			h + ":" + m + ":" + s;
			var t = setTimeout(startTime, 500);
}
function checkTime(i) {
    if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
    return i;
}

var imagecount = 1;
var total = 5 ;
			
function slide(x)
{
			var Image = document.getElementById("image");
			imagecount = imagecount + x;
			if(imagecount > total)
			{
				imagecount = 1;
			}
			if(imagecount < 1)
			{
				imagecount = total;
			}
			Image.src = "images/img" + imagecount + ".jpg";
}
window.setInterval (function slideA()
{
			var Image = document.getElementById("image");
			imagecount = imagecount + 1;
			if(imagecount > total)
			{
				imagecount = 1;
			}
			if(imagecount < 1)
			{
				imagecount = total;
			}
			Image.src = "images/img" + imagecount + ".jpg";
}, 4000);

/*function login()
{
	var user = document.getElementById("name");
	var pass = document.getElementById("pass");
	
	var userVal = user.value.trim();
	var passVal = pass.value.trim();
	
	if(userVal == "")
	{
		alert("Please Enter User Name")
	}
	if(passVal == "")
	{
		alert("Please Enter Password")
	}
}*/

/*function slide(y)
{
			var Image = document.getElementById("image");
			imagecount = imagecount + y;
			if(imagecount > total)
			{
				imagecount = 1;
			}
			if(imagecount < 1)
			{
				imagecount = total;
			}
			Image.src = "images/image/abroad" + imagecount + ".jpg";
}
window.setInterval (function slideB()
{
			var Image = document.getElementById("image");
			imagecount = imagecount + 1;
			if(imagecount > total)
			{
				imagecount = 1;
			}
			if(imagecount < 1)
			{
				imagecount = total;
			}
			Image.src = "images/image/abroad" + imagecount + ".jpg";
}, 4000);

function slide(z)
{
			var Image = document.getElementById("image");
			imagecount = imagecount + z;
			if(imagecount > total)
			{
				imagecount = 1;
			}
			if(imagecount < 1)
			{
				imagecount = total;
			}
			Image.src = "images/image/reception" + imagecount + ".jpg";
}
window.setInterval (function slideC()
{
			var Image = document.getElementById("image");
			imagecount = imagecount + 1;
			if(imagecount > total)
			{
				imagecount = 1;
			}
			if(imagecount < 1)
			{
				imagecount = total;
			}
			Image.src = "images/image/reception" + imagecount + ".jpg";
}, 4000);

function slide(w)
{
			var Image = document.getElementById("image");
			imagecount = imagecount + w;
			if(imagecount > total)
			{
				imagecount = 1;
			}
			if(imagecount < 1)
			{
				imagecount = total;
			}
			Image.src = "images/image/programming" + imagecount + ".jpg";
}
window.setInterval (function slideD()
{
			var Image = document.getElementById("image");
			imagecount = imagecount + 1;
			if(imagecount > total)
			{
				imagecount = 1;
			}
			if(imagecount < 1)
			{
				imagecount = total;
			}
			Image.src = "images/image/programming" + imagecount + ".jpg";
}, 4000);

function slide(v)
{
			var Image = document.getElementById("image");
			imagecount = imagecount + v;
			if(imagecount > total)
			{
				imagecount = 1;
			}
			if(imagecount < 1)
			{
				imagecount = total;
			}
			Image.src = "images/image/sports" + imagecount + ".jpg";
}
window.setInterval (function slideF()
{
			var Image = document.getElementById("image");
			imagecount = imagecount + 1;
			if(imagecount > total)
			{
				imagecount = 1;
			}
			if(imagecount < 1)
			{
				imagecount = total;
			}
			Image.src = "images/image/sports" + imagecount + ".jpg";
}, 4000); */


