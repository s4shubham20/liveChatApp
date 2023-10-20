<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
	<link rel="stylesheet" type="text/css" href="asset/css/style.css">
</head>
<body>
    <div id="container">
        <div id="left_panel">
            <img id="profile_img" src="asset/image/profile-pic/avatar-8.jpg" alt="avatar-8"/>
            <h4 class="text-light">Doris Brown</h4>
            <h5>doris@gmail.com</h5>
            <div id="label">
                <label for="chat">Chat<i class="fa fa-comments fa-2x" aria-hidden="true"></i></label>
                <label for="contact">Contact<i class="fa fa-address-book fa-2x" aria-hidden="true"></i></label>
                <label for="setting">Setting<i class="fa fa-cog fa-2x" aria-hidden="true"></i></label>
            </div>
        </div>
        <div id="right_panel">
            <div id="header">
                <div id="profile-pic">
                    <img src="asset/image/profile-pic/avatar-8.jpg" alt="avatar-8"/>
                    <div id="user-name">
                        <p>Doris Brown</p>
                        <small class="online">Online</small>
                    </div>
                </div>
                <div id="search-icon">
                    <ul>
                        <li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-phone" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-video-camera" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
            <div id="inner_container">
                <div id="inner_left_panel">
                    Hello
                </div>

                <input type="radio" name="myradio" id="chat"/>
                <input type="radio" name="myradio" id="contact"/>
                <input type="radio" name="myradio" id="setting"/>

                <div id="inner_right_panel">

                </div>
            </div>
        </div>
    </div>
</body>
<script type="text/javascript">
    function getById(element){
        return document.getElementById(element);
    }
    let inner_panel = getById("inner_left_panel");
    // console.log(inner_panel);
    inner_panel.innerHTML = "This id data!";

    let xml = new XMLHttpRequest();
    xml.onload = function() {
    if (xml.status == 200 || xml.readyState == 4) {
	        alert(xml.responseText);
	    }
	}
    xml.open('POST','api.php',true);
    xml.send();
</script>
</html>
