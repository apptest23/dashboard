<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Acara - Ticketing Bootstrap Admin Dashboard</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon.png">
	<link rel="stylesheet" href="./vendor/chartist/css/chartist.min.css">
    <link href="./vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
	<!-- Datatable -->
    <link href="./vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="./css/style.css" rel="stylesheet">
     <link rel="stylesheet" type="text/css" href="./css/home.css">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

	

</head>
<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="index.html" class="brand-logo">
                <img class="logo-abbr" src="./images/logo.png" alt="">
                <img class="logo-compact" src="./images/logo-text.png" alt="">
                <img class="brand-title" src="./images/logo-text.png" alt="">
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->
		
		<!--**********************************
            Chat box start
        ***********************************-->
		<div class="chatbox">
			<div class="chatbox-close"></div>
			<div class="custom-tab-1">
				<ul class="nav nav-tabs">
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#notes">Notes</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#alerts">Alerts</a>
					</li>
					<li class="nav-item">
						<a class="nav-link active" data-toggle="tab" href="#chat">Chat</a>
					</li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane fade active show" id="chat" role="tabpanel">
						<div class="card mb-sm-3 mb-md-0 contacts_card dz-chat-user-box">
							<div class="card-header chat-list-header text-center">
								<a href="javascript:void(0)"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect fill="#000000" x="4" y="11" width="16" height="2" rx="1"/><rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-270.000000) translate(-12.000000, -12.000000) " x="4" y="11" width="16" height="2" rx="1"/></g></svg></a>
								<div>
									<h6 class="mb-1">Chat List</h6>
									<p class="mb-0">Show All</p>
								</div>
								<a href="javascript:void(0)"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg></a>
							</div>
							<div class="card-body contacts_body p-0 dz-scroll  " id="DZ_W_Contacts_Body">
								<ul class="contacts">
									<li class="name-first-letter">A</li>
									<li class="active dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/1.jpg" class="rounded-circle user_img" alt=""/>
												<span class="online_icon"></span>
											</div>
											<div class="user_info">
												<span>Archie Parker</span>
												<p>Kalid is online</p>
											</div>
										</div>
									</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/2.jpg" class="rounded-circle user_img" alt=""/>
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>Alfie Mason</span>
												<p>Taherah left 7 mins ago</p>
											</div>
										</div>
									</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/3.jpg" class="rounded-circle user_img" alt=""/>
												<span class="online_icon"></span>
											</div>
											<div class="user_info">
												<span>AharlieKane</span>
												<p>Sami is online</p>
											</div>
										</div>
									</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/4.jpg" class="rounded-circle user_img" alt=""/>
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>Athan Jacoby</span>
												<p>Nargis left 30 mins ago</p>
											</div>
										</div>
									</li>
									<li class="name-first-letter">B</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/5.jpg" class="rounded-circle user_img" alt=""/>
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>Bashid Samim</span>
												<p>Rashid left 50 mins ago</p>
											</div>
										</div>
									</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/1.jpg" class="rounded-circle user_img" alt=""/>
												<span class="online_icon"></span>
											</div>
											<div class="user_info">
												<span>Breddie Ronan</span>
												<p>Kalid is online</p>
											</div>
										</div>
									</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/2.jpg" class="rounded-circle user_img" alt=""/>
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>Ceorge Carson</span>
												<p>Taherah left 7 mins ago</p>
											</div>
										</div>
									</li>
									<li class="name-first-letter">D</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/3.jpg" class="rounded-circle user_img" alt=""/>
												<span class="online_icon"></span>
											</div>
											<div class="user_info">
												<span>Darry Parker</span>
												<p>Sami is online</p>
											</div>
										</div>
									</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/4.jpg" class="rounded-circle user_img" alt=""/>
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>Denry Hunter</span>
												<p>Nargis left 30 mins ago</p>
											</div>
										</div>
									</li>
									<li class="name-first-letter">J</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/5.jpg" class="rounded-circle user_img" alt=""/>
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>Jack Ronan</span>
												<p>Rashid left 50 mins ago</p>
											</div>
										</div>
									</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/1.jpg" class="rounded-circle user_img" alt=""/>
												<span class="online_icon"></span>
											</div>
											<div class="user_info">
												<span>Jacob Tucker</span>
												<p>Kalid is online</p>
											</div>
										</div>
									</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/2.jpg" class="rounded-circle user_img" alt=""/>
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>James Logan</span>
												<p>Taherah left 7 mins ago</p>
											</div>
										</div>
									</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/3.jpg" class="rounded-circle user_img" alt=""/>
												<span class="online_icon"></span>
											</div>
											<div class="user_info">
												<span>Joshua Weston</span>
												<p>Sami is online</p>
											</div>
										</div>
									</li>
									<li class="name-first-letter">O</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/4.jpg" class="rounded-circle user_img" alt=""/>
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>Oliver Acker</span>
												<p>Nargis left 30 mins ago</p>
											</div>
										</div>
									</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/5.jpg" class="rounded-circle user_img" alt=""/>
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>Oscar Weston</span>
												<p>Rashid left 50 mins ago</p>
											</div>
										</div>
									</li>
								</ul>
							</div>
						</div>
						<div class="card chat dz-chat-history-box d-none">
							<div class="card-header chat-list-header text-center">
								<a href="javascript:void(0)" class="dz-chat-history-back">
									<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><polygon points="0 0 24 0 24 24 0 24"/><rect fill="#000000" opacity="0.3" transform="translate(15.000000, 12.000000) scale(-1, 1) rotate(-90.000000) translate(-15.000000, -12.000000) " x="14" y="7" width="2" height="10" rx="1"/><path d="M3.7071045,15.7071045 C3.3165802,16.0976288 2.68341522,16.0976288 2.29289093,15.7071045 C1.90236664,15.3165802 1.90236664,14.6834152 2.29289093,14.2928909 L8.29289093,8.29289093 C8.67146987,7.914312 9.28105631,7.90106637 9.67572234,8.26284357 L15.6757223,13.7628436 C16.0828413,14.136036 16.1103443,14.7686034 15.7371519,15.1757223 C15.3639594,15.5828413 14.7313921,15.6103443 14.3242731,15.2371519 L9.03007346,10.3841355 L3.7071045,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(9.000001, 11.999997) scale(-1, -1) rotate(90.000000) translate(-9.000001, -11.999997) "/></g></svg>
								</a>
								<div>
									<h6 class="mb-1">Chat with Khelesh</h6>
									<p class="mb-0 text-success">Online</p>
								</div>							
								<div class="dropdown">
									<a href="javascript:void(0)" data-toggle="dropdown" ><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg></a>
									<ul class="dropdown-menu dropdown-menu-right">
										<li class="dropdown-item"><i class="fa fa-user-circle text-primary mr-2"></i> View profile</li>
										<li class="dropdown-item"><i class="fa fa-users text-primary mr-2"></i> Add to close friends</li>
										<li class="dropdown-item"><i class="fa fa-plus text-primary mr-2"></i> Add to group</li>
										<li class="dropdown-item"><i class="fa fa-ban text-primary mr-2"></i> Block</li>
									</ul>
								</div>
							</div>
							<div class="card-body msg_card_body dz-scroll" id="DZ_W_Contacts_Body3">
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt=""/>
									</div>
									<div class="msg_cotainer">
										Hi, how are you samim?
										<span class="msg_time">8:40 AM, Today</span>
									</div>
								</div>
								<div class="d-flex justify-content-end mb-4">
									<div class="msg_cotainer_send">
										Hi Khalid i am good tnx how about you?
										<span class="msg_time_send">8:55 AM, Today</span>
									</div>
									<div class="img_cont_msg">
								<img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt=""/>
									</div>
								</div>
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt=""/>
									</div>
									<div class="msg_cotainer">
										I am good too, thank you for your chat template
										<span class="msg_time">9:00 AM, Today</span>
									</div>
								</div>
								<div class="d-flex justify-content-end mb-4">
									<div class="msg_cotainer_send">
										You are welcome
										<span class="msg_time_send">9:05 AM, Today</span>
									</div>
									<div class="img_cont_msg">
								<img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt=""/>
									</div>
								</div>
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt=""/>
									</div>
									<div class="msg_cotainer">
										I am looking for your next templates
										<span class="msg_time">9:07 AM, Today</span>
									</div>
								</div>
								<div class="d-flex justify-content-end mb-4">
									<div class="msg_cotainer_send">
										Ok, thank you have a good day
										<span class="msg_time_send">9:10 AM, Today</span>
									</div>
									<div class="img_cont_msg">
										<img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt=""/>
									</div>
								</div>
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt=""/>
									</div>
									<div class="msg_cotainer">
										Bye, see you
										<span class="msg_time">9:12 AM, Today</span>
									</div>
								</div>
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt=""/>
									</div>
									<div class="msg_cotainer">
										Hi, how are you samim?
										<span class="msg_time">8:40 AM, Today</span>
									</div>
								</div>
								<div class="d-flex justify-content-end mb-4">
									<div class="msg_cotainer_send">
										Hi Khalid i am good tnx how about you?
										<span class="msg_time_send">8:55 AM, Today</span>
									</div>
									<div class="img_cont_msg">
								<img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt=""/>
									</div>
								</div>
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt=""/>
									</div>
									<div class="msg_cotainer">
										I am good too, thank you for your chat template
										<span class="msg_time">9:00 AM, Today</span>
									</div>
								</div>
								<div class="d-flex justify-content-end mb-4">
									<div class="msg_cotainer_send">
										You are welcome
										<span class="msg_time_send">9:05 AM, Today</span>
									</div>
									<div class="img_cont_msg">
								<img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt=""/>
									</div>
								</div>
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt=""/>
									</div>
									<div class="msg_cotainer">
										I am looking for your next templates
										<span class="msg_time">9:07 AM, Today</span>
									</div>
								</div>
								<div class="d-flex justify-content-end mb-4">
									<div class="msg_cotainer_send">
										Ok, thank you have a good day
										<span class="msg_time_send">9:10 AM, Today</span>
									</div>
									<div class="img_cont_msg">
										<img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt=""/>
									</div>
								</div>
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt=""/>
									</div>
									<div class="msg_cotainer">
										Bye, see you
										<span class="msg_time">9:12 AM, Today</span>
									</div>
								</div>
							</div>
							<div class="card-footer type_msg">
								<div class="input-group">
									<textarea class="form-control" placeholder="Type your message..."></textarea>
									<div class="input-group-append">
										<button type="button" class="btn btn-primary"><i class="fa fa-location-arrow"></i></button>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="alerts" role="tabpanel">
						<div class="card mb-sm-3 mb-md-0 contacts_card">
							<div class="card-header chat-list-header text-center">
								<a href="javascript:void(0)"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg></a>
								<div>
									<h6 class="mb-1">Notications</h6>
									<p class="mb-0">Show All</p>
								</div>
								<a href="javascript:void(0)"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/><path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero"/></g></svg></a>
							</div>
							<div class="card-body contacts_body p-0 dz-scroll" id="DZ_W_Contacts_Body1">
								<ul class="contacts">
									<li class="name-first-letter">SEVER STATUS</li>
									<li class="active">
										<div class="d-flex bd-highlight">
											<div class="img_cont primary">KK</div>
											<div class="user_info">
												<span>David Nester Birthday</span>
												<p class="text-primary">Today</p>
											</div>
										</div>
									</li>
									<li class="name-first-letter">SOCIAL</li>
									<li>
										<div class="d-flex bd-highlight">
											<div class="img_cont success">RU<i class="icon fa-birthday-cake"></i></div>
											<div class="user_info">
												<span>Perfection Simplified</span>
												<p>Jame Smith commented on your status</p>
											</div>
										</div>
									</li>
									<li class="name-first-letter">SEVER STATUS</li>
									<li>
										<div class="d-flex bd-highlight">
											<div class="img_cont primary">AU<i class="icon fa fa-user-plus"></i></div>
											<div class="user_info">
												<span>AharlieKane</span>
												<p>Sami is online</p>
											</div>
										</div>
									</li>
									<li>
										<div class="d-flex bd-highlight">
											<div class="img_cont info">MO<i class="icon fa fa-user-plus"></i></div>
											<div class="user_info">
												<span>Athan Jacoby</span>
												<p>Nargis left 30 mins ago</p>
											</div>
										</div>
									</li>
								</ul>
							</div>
							<div class="card-footer"></div>
						</div>
					</div>
					<div class="tab-pane fade" id="notes">
						<div class="card mb-sm-3 mb-md-0 note_card">
							<div class="card-header chat-list-header text-center">
								<a href="javascript:void(0)"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect fill="#000000" x="4" y="11" width="16" height="2" rx="1"/><rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-270.000000) translate(-12.000000, -12.000000) " x="4" y="11" width="16" height="2" rx="1"/></g></svg></a>
								<div>
									<h6 class="mb-1">Notes</h6>
									<p class="mb-0">Add New Nots</p>
								</div>
								<a href="javascript:void(0)"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/><path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero"/></g></svg></a>
							</div>
							<div class="card-body contacts_body p-0 dz-scroll" id="DZ_W_Contacts_Body2">
								<ul class="contacts">
									<li class="active">
										<div class="d-flex bd-highlight">
											<div class="user_info">
												<span>New order placed..</span>
												<p>10 Aug 2020</p>
											</div>
											<div class="ml-auto">
												<a href="javascript:void(0)" class="btn btn-primary btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
												<a href="javascript:void(0)" class="btn btn-danger btn-xs sharp"><i class="fa fa-trash"></i></a>
											</div>
										</div>
									</li>
									<li>
										<div class="d-flex bd-highlight">
											<div class="user_info">
												<span>Youtube, a video-sharing website..</span>
												<p>10 Aug 2020</p>
											</div>
											<div class="ml-auto">
												<a href="javascript:void(0)" class="btn btn-primary btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
												<a href="javascript:void(0)" class="btn btn-danger btn-xs sharp"><i class="fa fa-trash"></i></a>
											</div>
										</div>
									</li>
									<li>
										<div class="d-flex bd-highlight">
											<div class="user_info">
												<span>john just buy your product..</span>
												<p>10 Aug 2020</p>
											</div>
											<div class="ml-auto">
												<a href="javascript:void(0)" class="btn btn-primary btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
												<a href="javascript:void(0)" class="btn btn-danger btn-xs sharp"><i class="fa fa-trash"></i></a>
											</div>
										</div>
									</li>
									<li>
										<div class="d-flex bd-highlight">
											<div class="user_info">
												<span>Athan Jacoby</span>
												<p>10 Aug 2020</p>
											</div>
											<div class="ml-auto">
												<a href="javascript:void(0)" class="btn btn-primary btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
												<a href="javascript:void(0)" class="btn btn-danger btn-xs sharp"><i class="fa fa-trash"></i></a>
											</div>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--**********************************
            Chat box End
        ***********************************-->
		
		<!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="dashboard_bar">
								Order
                            </div>
                        </div>
                        <ul class="navbar-nav header-right">
							<li class="nav-item">
								<div class="input-group search-area d-xl-inline-flex d-none">
									<input type="text" class="form-control" placeholder="Search here...">
									<div class="input-group-append">
										<span class="input-group-text"><a href="javascript:void(0)"><i class="flaticon-381-search-2"></i></a></span>
									</div>
								</div>
							</li>
							<li class="nav-item dropdown notification_dropdown">
                                <a class="nav-link  ai-icon" href="javascript:void(0)" role="button" data-toggle="dropdown">
                                    <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path fill-rule="evenodd" clip-rule="evenodd" d="M12.8333 5.91732V3.49998C12.8333 2.85598 13.356 2.33331 14 2.33331C14.6428 2.33331 15.1667 2.85598 15.1667 3.49998V5.91732C16.9003 6.16698 18.5208 6.97198 19.7738 8.22498C21.3057 9.75681 22.1667 11.8346 22.1667 14V18.3913L23.1105 20.279C23.562 21.1831 23.5142 22.2565 22.9822 23.1163C22.4513 23.9761 21.5122 24.5 20.5018 24.5H15.1667C15.1667 25.144 14.6428 25.6666 14 25.6666C13.356 25.6666 12.8333 25.144 12.8333 24.5H7.49817C6.48667 24.5 5.54752 23.9761 5.01669 23.1163C4.48469 22.2565 4.43684 21.1831 4.88951 20.279L5.83333 18.3913V14C5.83333 11.8346 6.69319 9.75681 8.22502 8.22498C9.47919 6.97198 11.0985 6.16698 12.8333 5.91732ZM14 8.16664C12.4518 8.16664 10.969 8.78148 9.87469 9.87581C8.78035 10.969 8.16666 12.453 8.16666 14V18.6666C8.16666 18.8475 8.12351 19.026 8.04301 19.1881C8.04301 19.1881 7.52384 20.2265 6.9755 21.322C6.88567 21.5028 6.89501 21.7186 7.00117 21.8901C7.10734 22.0616 7.29517 22.1666 7.49817 22.1666H20.5018C20.7037 22.1666 20.8915 22.0616 20.9977 21.8901C21.1038 21.7186 21.1132 21.5028 21.0234 21.322C20.475 20.2265 19.9558 19.1881 19.9558 19.1881C19.8753 19.026 19.8333 18.8475 19.8333 18.6666V14C19.8333 12.453 19.2185 10.969 18.1242 9.87581C17.0298 8.78148 15.547 8.16664 14 8.16664Z" fill="#FE634E"/>
									</svg>
									<div class="pulse-css"></div>
                                </a>
                                <div class="dropdown-menu rounded dropdown-menu-right">
                                    <div id="DZ_W_Notification1" class="widget-media dz-scroll p-3 height380">
										<ul class="timeline">
											<li>
												<div class="timeline-panel">
													<div class="media mr-2">
														<img alt="image" width="50" src="images/avatar/1.jpg">
													</div>
													<div class="media-body">
														<h6 class="mb-1">Dr sultads Send you Photo</h6>
														<small class="d-block">29 July 2020 - 02:26 PM</small>
													</div>
												</div>
											</li>
											<li>
												<div class="timeline-panel">
													<div class="media mr-2 media-info">
														KG
													</div>
													<div class="media-body">
														<h6 class="mb-1">Resport created successfully</h6>
														<small class="d-block">29 July 2020 - 02:26 PM</small>
													</div>
												</div>
											</li>
											<li>
												<div class="timeline-panel">
													<div class="media mr-2 media-success">
														<i class="fa fa-home"></i>
													</div>
													<div class="media-body">
														<h6 class="mb-1">Reminder : Treatment Time!</h6>
														<small class="d-block">29 July 2020 - 02:26 PM</small>
													</div>
												</div>
											</li>
											 <li>
												<div class="timeline-panel">
													<div class="media mr-2">
														<img alt="image" width="50" src="images/avatar/1.jpg">
													</div>
													<div class="media-body">
														<h6 class="mb-1">Dr sultads Send you Photo</h6>
														<small class="d-block">29 July 2020 - 02:26 PM</small>
													</div>
												</div>
											</li>
											<li>
												<div class="timeline-panel">
													<div class="media mr-2 media-danger">
														KG
													</div>
													<div class="media-body">
														<h6 class="mb-1">Resport created successfully</h6>
														<small class="d-block">29 July 2020 - 02:26 PM</small>
													</div>
												</div>
											</li>
											<li>
												<div class="timeline-panel">
													<div class="media mr-2 media-primary">
														<i class="fa fa-home"></i>
													</div>
													<div class="media-body">
														<h6 class="mb-1">Reminder : Treatment Time!</h6>
														<small class="d-block">29 July 2020 - 02:26 PM</small>
													</div>
												</div>
											</li>
										</ul>
									</div>
                                    <a class="all-notification" href="javascript:void(0)">See all notifications <i class="ti-arrow-right"></i></a>
                                </div>
                            </li>
							<li class="nav-item dropdown notification_dropdown">
                                <a class="nav-link bell bell-link" href="javascript:void(0)">
                                    <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path fill-rule="evenodd" clip-rule="evenodd" d="M25.6666 8.16666C25.6666 5.5895 23.5771 3.5 21 3.5C17.1161 3.5 10.8838 3.5 6.99998 3.5C4.42281 3.5 2.33331 5.5895 2.33331 8.16666V23.3333C2.33331 23.8058 2.61798 24.2305 3.05315 24.4113C3.48948 24.5922 3.99115 24.4918 4.32481 24.1582C4.32481 24.1582 6.59281 21.8902 7.96714 20.517C8.40464 20.0795 8.99733 19.8333 9.61683 19.8333H21C23.5771 19.8333 25.6666 17.7438 25.6666 15.1667V8.16666ZM23.3333 8.16666C23.3333 6.87866 22.2891 5.83333 21 5.83333C17.1161 5.83333 10.8838 5.83333 6.99998 5.83333C5.71198 5.83333 4.66665 6.87866 4.66665 8.16666V20.517L6.31631 18.8673C7.19132 17.9923 8.37899 17.5 9.61683 17.5H21C22.2891 17.5 23.3333 16.4558 23.3333 15.1667V8.16666ZM8.16665 15.1667H17.5C18.144 15.1667 18.6666 14.644 18.6666 14C18.6666 13.356 18.144 12.8333 17.5 12.8333H8.16665C7.52265 12.8333 6.99998 13.356 6.99998 14C6.99998 14.644 7.52265 15.1667 8.16665 15.1667ZM8.16665 10.5H19.8333C20.4773 10.5 21 9.97733 21 9.33333C21 8.68933 20.4773 8.16666 19.8333 8.16666H8.16665C7.52265 8.16666 6.99998 8.68933 6.99998 9.33333C6.99998 9.97733 7.52265 10.5 8.16665 10.5Z" fill="#FE634E"/>
									</svg>
									<div class="pulse-css"></div>
                                </a>
							</li>
                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="javascript:void(0)" role="button" data-toggle="dropdown">
                                    <img src="images/profile/17.jpg" width="20" alt=""/>
									<!-- <div class="header-info">
										<span class="text-black"><strong>Brian Lee</strong></span>
										<p class="fs-12 mb-0">Admin</p>
									</div> -->
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="./app-profile.html" class="dropdown-item ai-icon">
                                        <svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                        <span class="ml-2">Profile </span>
                                    </a>
                                    <a href="./email-inbox.html" class="dropdown-item ai-icon">
                                        <svg id="icon-inbox" xmlns="http://www.w3.org/2000/svg" class="text-success" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                                        <span class="ml-2">Inbox </span>
                                    </a>
                                    <a href="./page-login.html" class="dropdown-item ai-icon">
                                        <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                                        <span class="ml-2">Logout </span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->

        <div id="pageMessages"></div>

         @include('layouts.event_header')

      
				<div class="d-flex flex-wrap mb-2 align-items-center justify-content-between">
					<div class="mb-3 mr-3">
						<h6 class="fs-16 text-black font-w600 mb-0">{{$order_count}} Total Orders</h6>
						<span class="fs-14">Based your preferences</span>
					</div>
					<div>
						<select class="form-control style-2 default-select mr-3" name="select_source" id="select_source">
						   @foreach($client_source as $cs)

                              <option value="{{ $cs->id }}" {{$cs->id== 1? 'selected' : ''}}>{{ $cs->name }}</option>
                                              
                          @endforeach    
						</select>


					</div>
					<div class="event-tabs mb-3 mr-3">
						<ul class="nav nav-tabs" role="tablist">
							<li class="nav-item">
								<a class="nav-link active" data-toggle="tab" href="#All" role="tab" aria-selected="true">
									All
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" data-toggle="tab" href="#Sold" role="tab" aria-selected="false">
									Sold
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" data-toggle="tab" href="#Refunded" role="tab" aria-selected="false">
									Refunded
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" data-toggle="tab" href="#Canceled" role="tab" aria-selected="false">
									Canceled
								</a>
							</li>
						</ul>
					</div>
					<div class="d-flex mb-3">
						<select class="form-control style-2 default-select mr-3">
							<option>Newest</option>
							<option>Monthly</option>
							<option>Weekly</option>
						</select>
						<a href="javascript:void(0)" class="btn btn-primary text-nowrap"><i class="fa fa-file-text scale5 mr-3" aria-hidden="true"></i>Generate Report</a>
					</div>
				</div>
				<div class="row">
					<div class="col-xl-12">
						<div class="tab-content">
							<div id="All" class="tab-pane active fade show">
								<div class="table-responsive">
                                    <table id="example2" class="table card-table display dataTablesCard">
										<thead>
                                            <tr>
                                                <th>Order No.</th>
                                                <th>Source</th>
                                                <th>Client/ Order Name</th>
                                               <!--  <th></th> -->

                                               <th>Order Type</th>
                                                <th>Number Of Image</th>
                                                
                                                <th>Status</th>
                                               <!--  <th>Refund</th>
                                                <th>Editor</th> -->
                                                <th>update</th>
                                                 <th>Delete</th>
                                            </tr>
                                        </thead>
										<tbody class="order_view">
  
                                           @foreach($order_list as $key =>$o)
											  <tr>
												<td><span class="text-nowrap"><span>{{date('Ymdhm', strtotime($o->created_at))}}</span>{{$key+1}}<span><br> <span>{{date('d/m/Y', strtotime($o->order_date))}}</span></td>

												  @foreach($client_source as $cs)

												    @if($cs->id== $o->source)

												     <td><span class="text-nowrap">{{$cs->name}}</span></td>

												    @endif
 
												  @endforeach

 

												 @foreach($client_list1 as $cl)

												    @if($cl->id== $o->customer)

												       <td>{{$cl->client_name}}<br>{{$o->order_name}}</td>



												     @endif
 
												   @endforeach


												   	 @foreach($order_type as $ot)

												    @if($ot->id== $o->order_type)

												     <td>{{$ot->name}}</td>

												     @endif
 
												   @endforeach


												<td>{{$o->number_of_image}}</td>



											

												 @foreach($status_list as $sl)

												    @if($sl->id== $o->status)

												  	    <td class="dot-status" id="status_{{$o->id}}"><span class="status_btn status_btn{{$o->id}} "style="background-color:{{$sl->colour}}">{{$o->current_status}}</span>



												  <div class="action-dropdown">
                                         <div class="dropdown ">
                                            <div class="btn-link" data-toggle="dropdown">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="12.4999" cy="3.5" r="2.5" fill="#A5A5A5"></circle>
                                                    <circle cx="12.4999" cy="11.5" r="2.5" fill="#A5A5A5"></circle>
                                                    <circle cx="12.4999" cy="19.5" r="2.5" fill="#A5A5A5"></circle>
                                                </svg>
                                            </div>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" onclick="update_status({{$o->id}})">Update</a>
                                                <a class="dropdown-item" onclick="edit_status_data({{$o->id}})">Edit</a>
                                            </div>
                                           </div>
                                         </div>
                                      </td>

												     @endif
 
												   @endforeach
											
												 <td><a href="javascript:void(0)" class="btn btn-primary btn-sm light" onclick="updateOrder({{$o->id}})">Update</a></td>

												 <td><a href="javascript:void(0)" class="btn btn-primary btn-sm light" onclick="deleteOrder({{$o->id}})">Delete</a></td>
											 </tr>
											@endforeach

											
										
										</tbody>


									</table>
									{{ $order_list->links('pagination') }}
								</div>
							</div>
							<!-- <div id="Sold" class="tab-pane fade">
								<div class="table-responsive">
                                    <table id="example3" class="table card-table display dataTablesCard">
										<thead>
                                            <tr>
                                                <th>Order ID</th>
                                                <th>Date</th>
                                                <th>Event Name</th>
                                                <th>Customer </th>
                                                <th>Location</th>
                                                <th>Sold Ticket</th>
                                                <th>Available</th>
                                                <th>Refund</th>
                                                <th>Total Revenue</th>
                                            </tr>
                                        </thead>
										<tbody>
											<tr>
												<td>#0012451</td>
												<td>04/08/2020<br>12:34 AM</td>
												<td><span class="text-nowrap">The Story of Danau Toba<br> (Musical Drama)</span></td>
												<td>Bella Simatupang</td>
												<td>London, US</td>
												<td>1 Pcs</td>
												<td>567k left</td>
												<td><strong class="text-black">NO</strong></td>
												<td><a href="javascript:void(0)" class="btn btn-primary btn-sm light">$125,70</a></td>
											</tr>
											<tr>
												<td>#0012451</td>
												<td>04/08/2020<br>12:34 AM</td>
												<td><span class="text-nowrap">Envato Authors Meetup<br>2020</span></td>
												<td>Elisabeth Queen</td>
												<td>Medan, Indonesia</td>
												<td>4 Pcs</td>
												<td>567k left</td>
												<td><strong class="text-black">NO</strong></td>
												<td><a href="javascript:void(0)" class="btn btn-primary btn-sm light">$536,00</a></td>
											</tr>
											<tr>
												<td>#0012451</td>
												<td>04/08/2020<br>12:34 AM</td>
												<td><span class="text-nowrap">Great Big Fireworks at <br> Newyork City</span></td>
												<td>David Bekam</td>
												<td>Sydney, Australia</td>
												<td>4 Pcs</td>
												<td>567k left</td>
												<td><strong class="text-black">NO</strong></td>
												<td><a href="javascript:void(0)" class="btn btn-primary btn-sm light">$65,22</a></td>
											</tr>
											<tr>
												<td>#0012451</td>
												<td>04/08/2020<br>12:34 AM</td>
												<td><span class="text-nowrap">Charity Fun Games at <br> Lapangan Merdeka</span></td>
												<td>Andrew Stevano</td>
												<td>Jakarta, Indonesia</td>
												<td>2 Pcs</td>
												<td>567k left</td>
												<td><strong class="text-primary">REFUND</strong></td>
												<td><a href="javascript:void(0)" class="btn btn-primary btn-sm light">$124,55</a></td>
											</tr>
											<tr>
												<td>#0012451</td>
												<td>04/08/2020<br>12:34 AM</td>
												<td><span class="text-nowrap">Indonesian Envato <br> Authors Fun Run </span></td>
												<td>Cive Slauw</td>
												<td>Penang, Malaysia</td>
												<td>4 Pcs</td>
												<td>567k left</td>
												<td><strong class="text-black">NO</strong></td>
												<td><a href="javascript:void(0)" class="btn btn-primary btn-sm light">$536,00</a></td>
											</tr>
											<tr>
												<td>#0012451</td>
												<td>04/08/2020<br>12:34 AM</td>
												<td><span class="text-nowrap">The Story of Danau Toba<br> (Musical Drama)</span></td>
												<td>Eddy Cusuma</td>
												<td>Medan, Indonesia</td>
												<td>3 Pcs</td>
												<td>567k left</td>
												<td><strong class="text-black">NO</strong></td>
												<td><a href="javascript:void(0)" class="btn btn-primary btn-sm light">$44,00</a></td>
											</tr>
											<tr>
												<td>#0012451</td>
												<td>04/08/2020<br>12:34 AM</td>
												<td><span class="text-nowrap">The Story of Danau Toba<br> (Musical Drama)</span></td>
												<td>Frank Azire</td>
												<td>Bangkok, Thailand</td>
												<td>1 Pcs</td>
												<td>567k left</td>
												<td><strong class="text-black">REFUND</strong></td>
												<td><a href="javascript:void(0)" class="btn btn-primary btn-sm light">$51,50</a></td>
											</tr>
											<tr>
												<td>#0012451</td>
												<td>04/08/2020<br>12:34 AM</td>
												<td><span class="text-nowrap">The Story of Danau Toba<br> (Musical Drama)</span></td>
												<td>Bella Simatupang</td>
												<td>London, US</td>
												<td>1 Pcs</td>
												<td>567k left</td>
												<td><strong class="text-black">NO</strong></td>
												<td><a href="javascript:void(0)" class="btn btn-primary btn-sm light">$125,70</a></td>
											</tr>
											<tr>
												<td>#0012451</td>
												<td>04/08/2020<br>12:34 AM</td>
												<td><span class="text-nowrap">The Story of Danau Toba<br> (Musical Drama)</span></td>
												<td>Andrew Stevano</td>
												<td>London, US</td>
												<td>1 Pcs</td>
												<td>567k left</td>
												<td><strong class="text-black">NO</strong></td>
												<td><a href="javascript:void(0)" class="btn btn-primary btn-sm light">$125,70</a></td>
											</tr>
											<tr>
												<td>#0012451</td>
												<td>04/08/2020<br>12:34 AM</td>
												<td><span class="text-nowrap">The Story of Danau Toba<br> (Musical Drama)</span></td>
												<td>Bella Simatupang</td>
												<td>London, US</td>
												<td>1 Pcs</td>
												<td>567k left</td>
												<td><strong class="text-black">NO</strong></td>
												<td><a href="javascript:void(0)" class="btn btn-primary btn-sm light">$125,70</a></td>
											</tr>
											<tr>
												<td>#0012451</td>
												<td>04/08/2020<br>12:34 AM</td>
												<td><span class="text-nowrap">The Story of Danau Toba<br> (Musical Drama)</span></td>
												<td>Bella Simatupang</td>
												<td>London, US</td>
												<td>1 Pcs</td>
												<td>567k left</td>
												<td><strong class="text-black">NO</strong></td>
												<td><a href="javascript:void(0)" class="btn btn-primary btn-sm light">$125,70</a></td>
											</tr>
											<tr>
												<td>#0012451</td>
												<td>04/08/2020<br>12:34 AM</td>
												<td><span class="text-nowrap">The Story of Danau Toba<br> (Musical Drama)</span></td>
												<td>Bella Simatupang</td>
												<td>London, US</td>
												<td>1 Pcs</td>
												<td>567k left</td>
												<td><strong class="text-black">NO</strong></td>
												<td><a href="javascript:void(0)" class="btn btn-primary btn-sm light">$125,70</a></td>
											</tr>
											<tr>
												<td>#0012451</td>
												<td>04/08/2020<br>12:34 AM</td>
												<td><span class="text-nowrap">The Story of Danau Toba<br> (Musical Drama)</span></td>
												<td>Bella Simatupang</td>
												<td>London, US</td>
												<td>1 Pcs</td>
												<td>567k left</td>
												<td><strong class="text-black">NO</strong></td>
												<td><a href="javascript:void(0)" class="btn btn-primary btn-sm light">$125,70</a></td>
											</tr>
											<tr>
												<td>#0012451</td>
												<td>04/08/2020<br>12:34 AM</td>
												<td><span class="text-nowrap">The Story of Danau Toba<br> (Musical Drama)</span></td>
												<td>Elisabeth Queen</td>
												<td>London, US</td>
												<td>1 Pcs</td>
												<td>567k left</td>
												<td><strong class="text-black">NO</strong></td>
												<td><a href="javascript:void(0)" class="btn btn-primary btn-sm light">$125,70</a></td>
											</tr>
											<tr>
												<td>#0012451</td>
												<td>04/08/2020<br>12:34 AM</td>
												<td><span class="text-nowrap">The Story of Danau Toba<br> (Musical Drama)</span></td>
												<td>Andrew Stevano</td>
												<td>London, US</td>
												<td>1 Pcs</td>
												<td>567k left</td>
												<td><strong class="text-black">NO</strong></td>
												<td><a href="javascript:void(0)" class="btn btn-primary btn-sm light">$125,70</a></td>
											</tr>
										</tbody>
										<thead>
                                            <tr>
                                                <th>Order Name</th>
                                                <th>Source</th>
                                                <th>Customer </th>
                                                <th>Bride Groom name</th>
                                                <th>Order Type</th>
                                                <th>Status</th>
                                                <th>Refund</th>
                                                <th>Editor</th>
                                                <th>update</th>
                                            </tr>
                                        </thead>
										<tbody>
											<tr>
												<td>#0012451 <br> 04/08/2020</td>
												<td><span class="text-nowrap">Tushar</span></td>
												<td>Client A</td>
												<td>xyz</td>
												<td>Culling + Editing</td>
												<td>ABC</td>
												<td><strong class="text-black">NO</strong></td>
												<td>abc</td>
												 <td><a href="javascript:void(0)" class="btn btn-primary btn-sm light">Update</a></td>
											</tr>
											<tr>
												<td>#0012451 <br> 04/08/2020</td>
												<td><span class="text-nowrap">Tushar</span></td>
												<td>Client A</td>
												<td>xyz</td>
												<td>Culling + Editing</td>
												<td>ABC</td>
												<td><strong class="text-black">NO</strong></td>
												<td>abc</td>
												 <td><a href="javascript:void(0)" class="btn btn-primary btn-sm light">Update</a></td>
											</tr>
											<tr>
												<td>#0012451 <br> 04/08/2020</td>
												<td><span class="text-nowrap">Tushar</span></td>
												<td>Client A</td>
												<td>xyz</td>
												<td>Culling + Editing</td>
												<td>ABC</td>
												<td><strong class="text-black">NO</strong></td>
												<td>abc</td>
												 <td><a href="javascript:void(0)" class="btn btn-primary btn-sm light">Update</a></td>
											</tr>
											<tr>
												<td>#0012451 <br> 04/08/2020</td>
												<td><span class="text-nowrap">Tushar</span></td>
												<td>Client A</td>
												<td>xyz</td>
												<td>Culling + Editing</td>
												<td>ABC</td>
												<td><strong class="text-black">NO</strong></td>
												<td>abc</td>
												 <td><a href="javascript:void(0)" class="btn btn-primary btn-sm light">Update</a></td>
											</tr>
											<tr>
												<td>#0012451 <br> 04/08/2020</td>
												<td><span class="text-nowrap">Tushar</span></td>
												<td>Client A</td>
												<td>xyz</td>
												<td>Culling + Editing</td>
												<td>ABC</td>
												<td><strong class="text-black">NO</strong></td>
												<td>abc</td>
												 <td><a href="javascript:void(0)" class="btn btn-primary btn-sm light">Update</a></td>
											</tr>
											<tr>
												<td>#0012451 <br> 04/08/2020</td>
												<td><span class="text-nowrap">Tushar</span></td>
												<td>Client A</td>
												<td>xyz</td>
												<td>Culling + Editing</td>
												<td>ABC</td>
												<td><strong class="text-black">NO</strong></td>
												<td>abc</td>
												 <td><a href="javascript:void(0)" class="btn btn-primary btn-sm light">Update</a></td>
											</tr>
											<tr>
												<td>#0012451 <br> 04/08/2020</td>
												<td><span class="text-nowrap">Tushar</span></td>
												<td>Client A</td>
												<td>xyz</td>
												<td>Culling + Editing</td>
												<td>ABC</td>
												<td><strong class="text-black">NO</strong></td>
												<td>abc</td>
												 <td><a href="javascript:void(0)" class="btn btn-primary btn-sm light">Update</a></td>
											</tr>
											<tr>
												<td>#0012451 <br> 04/08/2020</td>
												<td><span class="text-nowrap">Tushar</span></td>
												<td>Client A</td>
												<td>xyz</td>
												<td>Culling + Editing</td>
												<td>ABC</td>
												<td><strong class="text-black">NO</strong></td>
												<td>abc</td>
												 <td><a href="javascript:void(0)" class="btn btn-primary btn-sm light">Update</a></td>
											</tr>
											<tr>
												<td>#0012451 <br> 04/08/2020</td>
												<td><span class="text-nowrap">Tushar</span></td>
												<td>Client A</td>
												<td>xyz</td>
												<td>Culling + Editing</td>
												<td>ABC</td>
												<td><strong class="text-black">NO</strong></td>
												<td>abc</td>
												 <td><a href="javascript:void(0)" class="btn btn-primary btn-sm light">Update</a></td>
											</tr>
										</tbody>
									</table>
								</div>
							</div> -->
							<!-- <div id="Refunded" class="tab-pane fade">
								<div class="table-responsive">
                                    <table id="example4" class="table card-table display dataTablesCard">
										<thead>
                                            <tr>
                                                <th>Order ID</th>
                                                <th>Date</th>
                                                <th>Event Name</th>
                                                <th>Customer </th>
                                                <th>Location</th>
                                                <th>Sold Ticket</th>
                                                <th>Available</th>
                                                <th>Refund</th>
                                                <th>Total Revenue</th>
                                            </tr>
                                        </thead>
										<tbody>
											<tr>
												<td>#0012451</td>
												<td>04/08/2020<br>12:34 AM</td>
												<td><span class="text-nowrap">The Story of Danau Toba<br> (Musical Drama)</span></td>
												<td>Andrew Stevano</td>
												<td>London, US</td>
												<td>1 Pcs</td>
												<td>567k left</td>
												<td><strong class="text-black">NO</strong></td>
												<td><a href="javascript:void(0)" class="btn btn-primary btn-sm light">$125,70</a></td>
											</tr>
											<tr>
												<td>#0012451</td>
												<td>04/08/2020<br>12:34 AM</td>
												<td><span class="text-nowrap">The Story of Danau Toba<br> (Musical Drama)</span></td>
												<td>Bella Simatupang</td>
												<td>London, US</td>
												<td>1 Pcs</td>
												<td>567k left</td>
												<td><strong class="text-black">NO</strong></td>
												<td><a href="javascript:void(0)" class="btn btn-primary btn-sm light">$125,70</a></td>
											</tr>
											<tr>
												<td>#0012451</td>
												<td>04/08/2020<br>12:34 AM</td>
												<td><span class="text-nowrap">The Story of Danau Toba<br> (Musical Drama)</span></td>
												<td>Bella Simatupang</td>
												<td>London, US</td>
												<td>1 Pcs</td>
												<td>567k left</td>
												<td><strong class="text-black">NO</strong></td>
												<td><a href="javascript:void(0)" class="btn btn-primary btn-sm light">$125,70</a></td>
											</tr>
											<tr>
												<td>#0012451</td>
												<td>04/08/2020<br>12:34 AM</td>
												<td><span class="text-nowrap">The Story of Danau Toba<br> (Musical Drama)</span></td>
												<td>Bella Simatupang</td>
												<td>London, US</td>
												<td>1 Pcs</td>
												<td>567k left</td>
												<td><strong class="text-black">NO</strong></td>
												<td><a href="javascript:void(0)" class="btn btn-primary btn-sm light">$125,70</a></td>
											</tr>
											<tr>
												<td>#0012451</td>
												<td>04/08/2020<br>12:34 AM</td>
												<td><span class="text-nowrap">The Story of Danau Toba<br> (Musical Drama)</span></td>
												<td>Bella Simatupang</td>
												<td>London, US</td>
												<td>1 Pcs</td>
												<td>567k left</td>
												<td><strong class="text-black">NO</strong></td>
												<td><a href="javascript:void(0)" class="btn btn-primary btn-sm light">$125,70</a></td>
											</tr>
											<tr>
												<td>#0012451</td>
												<td>04/08/2020<br>12:34 AM</td>
												<td><span class="text-nowrap">The Story of Danau Toba<br> (Musical Drama)</span></td>
												<td>Bella Simatupang</td>
												<td>London, US</td>
												<td>1 Pcs</td>
												<td>567k left</td>
												<td><strong class="text-black">NO</strong></td>
												<td><a href="javascript:void(0)" class="btn btn-primary btn-sm light">$125,70</a></td>
											</tr>
											<tr>
												<td>#0012451</td>
												<td>04/08/2020<br>12:34 AM</td>
												<td><span class="text-nowrap">Envato Authors Meetup<br>2020</span></td>
												<td>Elisabeth Queen</td>
												<td>Medan, Indonesia</td>
												<td>4 Pcs</td>
												<td>567k left</td>
												<td><strong class="text-black">NO</strong></td>
												<td><a href="javascript:void(0)" class="btn btn-primary btn-sm light">$536,00</a></td>
											</tr>
											<tr>
												<td>#0012451</td>
												<td>04/08/2020<br>12:34 AM</td>
												<td><span class="text-nowrap">Great Big Fireworks at <br> Newyork City</span></td>
												<td>David Bekam</td>
												<td>Sydney, Australia</td>
												<td>4 Pcs</td>
												<td>567k left</td>
												<td><strong class="text-black">NO</strong></td>
												<td><a href="javascript:void(0)" class="btn btn-primary btn-sm light">$65,22</a></td>
											</tr>
											<tr>
												<td>#0012451</td>
												<td>04/08/2020<br>12:34 AM</td>
												<td><span class="text-nowrap">Charity Fun Games at <br> Lapangan Merdeka</span></td>
												<td>Andrew Stevano</td>
												<td>Jakarta, Indonesia</td>
												<td>2 Pcs</td>
												<td>567k left</td>
												<td><strong class="text-primary">REFUND</strong></td>
												<td><a href="javascript:void(0)" class="btn btn-primary btn-sm light">$124,55</a></td>
											</tr>
											<tr>
												<td>#0012451</td>
												<td>04/08/2020<br>12:34 AM</td>
												<td><span class="text-nowrap">Indonesian Envato <br> Authors Fun Run </span></td>
												<td>Cive Slauw</td>
												<td>Penang, Malaysia</td>
												<td>4 Pcs</td>
												<td>567k left</td>
												<td><strong class="text-black">NO</strong></td>
												<td><a href="javascript:void(0)" class="btn btn-primary btn-sm light">$536,00</a></td>
											</tr>
											<tr>
												<td>#0012451</td>
												<td>04/08/2020<br>12:34 AM</td>
												<td><span class="text-nowrap">The Story of Danau Toba<br> (Musical Drama)</span></td>
												<td>Eddy Cusuma</td>
												<td>Medan, Indonesia</td>
												<td>3 Pcs</td>
												<td>567k left</td>
												<td><strong class="text-black">NO</strong></td>
												<td><a href="javascript:void(0)" class="btn btn-primary btn-sm light">$44,00</a></td>
											</tr>
											<tr>
												<td>#0012451</td>
												<td>04/08/2020<br>12:34 AM</td>
												<td><span class="text-nowrap">The Story of Danau Toba<br> (Musical Drama)</span></td>
												<td>Frank Azire</td>
												<td>Bangkok, Thailand</td>
												<td>1 Pcs</td>
												<td>567k left</td>
												<td><strong class="text-black">REFUND</strong></td>
												<td><a href="javascript:void(0)" class="btn btn-primary btn-sm light">$51,50</a></td>
											</tr>
											<tr>
												<td>#0012451</td>
												<td>04/08/2020<br>12:34 AM</td>
												<td><span class="text-nowrap">The Story of Danau Toba<br> (Musical Drama)</span></td>
												<td>Bella Simatupang</td>
												<td>London, US</td>
												<td>1 Pcs</td>
												<td>567k left</td>
												<td><strong class="text-black">NO</strong></td>
												<td><a href="javascript:void(0)" class="btn btn-primary btn-sm light">$125,70</a></td>
											</tr>
											<tr>
												<td>#0012451</td>
												<td>04/08/2020<br>12:34 AM</td>
												<td><span class="text-nowrap">The Story of Danau Toba<br> (Musical Drama)</span></td>
												<td>Elisabeth Queen</td>
												<td>London, US</td>
												<td>1 Pcs</td>
												<td>567k left</td>
												<td><strong class="text-black">NO</strong></td>
												<td><a href="javascript:void(0)" class="btn btn-primary btn-sm light">$125,70</a></td>
											</tr>
											<tr>
												<td>#0012451</td>
												<td>04/08/2020<br>12:34 AM</td>
												<td><span class="text-nowrap">The Story of Danau Toba<br> (Musical Drama)</span></td>
												<td>Andrew Stevano</td>
												<td>London, US</td>
												<td>1 Pcs</td>
												<td>567k left</td>
												<td><strong class="text-black">NO</strong></td>
												<td><a href="javascript:void(0)" class="btn btn-primary btn-sm light">$125,70</a></td>
											</tr>
										</tbody>
										<thead>
                                            <tr>
                                                <th>Order Name</th>
                                                <th>Source</th>
                                                <th>Customer </th>
                                                <th>Bride Groom name</th>
                                                <th>Order Type</th>
                                                <th>Status</th>
                                                <th>Refund</th>
                                                <th>Editor</th>
                                                <th>update</th>
                                            </tr>
                                        </thead>
										<tbody>
											<tr>
												<td>#0012451 <br> 04/08/2020</td>
												<td><span class="text-nowrap">Tushar</span></td>
												<td>Client A</td>
												<td>xyz</td>
												<td>Culling + Editing</td>
												<td>ABC</td>
												<td><strong class="text-black">NO</strong></td>
												<td>abc</td>
												 <td><a href="javascript:void(0)" class="btn btn-primary btn-sm light">Update</a></td>
											</tr>
											<tr>
												<td>#0012451 <br> 04/08/2020</td>
												<td><span class="text-nowrap">Tushar</span></td>
												<td>Client A</td>
												<td>xyz</td>
												<td>Culling + Editing</td>
												<td>ABC</td>
												<td><strong class="text-black">NO</strong></td>
												<td>abc</td>
												 <td><a href="javascript:void(0)" class="btn btn-primary btn-sm light">Update</a></td>
											</tr>
											<tr>
												<td>#0012451 <br> 04/08/2020</td>
												<td><span class="text-nowrap">Tushar</span></td>
												<td>Client A</td>
												<td>xyz</td>
												<td>Culling + Editing</td>
												<td>ABC</td>
												<td><strong class="text-black">NO</strong></td>
												<td>abc</td>
												 <td><a href="javascript:void(0)" class="btn btn-primary btn-sm light">Update</a></td>
											</tr>
											<tr>
												<td>#0012451 <br> 04/08/2020</td>
												<td><span class="text-nowrap">Tushar</span></td>
												<td>Client A</td>
												<td>xyz</td>
												<td>Culling + Editing</td>
												<td>ABC</td>
												<td><strong class="text-black">NO</strong></td>
												<td>abc</td>
												 <td><a href="javascript:void(0)" class="btn btn-primary btn-sm light">Update</a></td>
											</tr>
											<tr>
												<td>#0012451 <br> 04/08/2020</td>
												<td><span class="text-nowrap">Tushar</span></td>
												<td>Client A</td>
												<td>xyz</td>
												<td>Culling + Editing</td>
												<td>ABC</td>
												<td><strong class="text-black">NO</strong></td>
												<td>abc</td>
												 <td><a href="javascript:void(0)" class="btn btn-primary btn-sm light">Update</a></td>
											</tr>
											<tr>
												<td>#0012451 <br> 04/08/2020</td>
												<td><span class="text-nowrap">Tushar</span></td>
												<td>Client A</td>
												<td>xyz</td>
												<td>Culling + Editing</td>
												<td>ABC</td>
												<td><strong class="text-black">NO</strong></td>
												<td>abc</td>
												 <td><a href="javascript:void(0)" class="btn btn-primary btn-sm light">Update</a></td>
											</tr>
											<tr>
												<td>#0012451 <br> 04/08/2020</td>
												<td><span class="text-nowrap">Tushar</span></td>
												<td>Client A</td>
												<td>xyz</td>
												<td>Culling + Editing</td>
												<td>ABC</td>
												<td><strong class="text-black">NO</strong></td>
												<td>abc</td>
												 <td><a href="javascript:void(0)" class="btn btn-primary btn-sm light">Update</a></td>
											</tr>
											<tr>
												<td>#0012451 <br> 04/08/2020</td>
												<td><span class="text-nowrap">Tushar</span></td>
												<td>Client A</td>
												<td>xyz</td>
												<td>Culling + Editing</td>
												<td>ABC</td>
												<td><strong class="text-black">NO</strong></td>
												<td>abc</td>
												 <td><a href="javascript:void(0)" class="btn btn-primary btn-sm light">Update</a></td>
											</tr>
											<tr>
												<td>#0012451 <br> 04/08/2020</td>
												<td><span class="text-nowrap">Tushar</span></td>
												<td>Client A</td>
												<td>xyz</td>
												<td>Culling + Editing</td>
												<td>ABC</td>
												<td><strong class="text-black">NO</strong></td>
												<td>abc</td>
												 <td><a href="javascript:void(0)" class="btn btn-primary btn-sm light">Update</a></td>
											</tr>
										</tbody>
									</table>
								</div>
							</div> -->
							<!-- <div id="Canceled" class="tab-pane fade">
								<div class="table-responsive">
                                    <table id="example5" class="table card-table display dataTablesCard">
										<thead>
                                            <tr>
                                                <th>Order ID</th>
                                                <th>Date</th>
                                                <th>Event Name</th>
                                                <th>Customer </th>
                                                <th>Location</th>
                                                <th>Sold Ticket</th>
                                                <th>Available</th>
                                                <th>Refund</th>
                                                <th>Total Revenue</th>
                                            </tr>
                                        </thead>
										<tbody>
											<tr>
												<td>#0012451</td>
												<td>04/08/2020<br>12:34 AM</td>
												<td><span class="text-nowrap">The Story of Danau Toba<br> (Musical Drama)</span></td>
												<td>Bella Simatupang</td>
												<td>London, US</td>
												<td>1 Pcs</td>
												<td>567k left</td>
												<td><strong class="text-black">NO</strong></td>
												<td><a href="javascript:void(0)" class="btn btn-primary btn-sm light">$125,70</a></td>
											</tr>
											<tr>
												<td>#0012451</td>
												<td>04/08/2020<br>12:34 AM</td>
												<td><span class="text-nowrap">Envato Authors Meetup<br>2020</span></td>
												<td>Elisabeth Queen</td>
												<td>Medan, Indonesia</td>
												<td>4 Pcs</td>
												<td>567k left</td>
												<td><strong class="text-black">NO</strong></td>
												<td><a href="javascript:void(0)" class="btn btn-primary btn-sm light">$536,00</a></td>
											</tr>
											<tr>
												<td>#0012451</td>
												<td>04/08/2020<br>12:34 AM</td>
												<td><span class="text-nowrap">Great Big Fireworks at <br> Newyork City</span></td>
												<td>David Bekam</td>
												<td>Sydney, Australia</td>
												<td>4 Pcs</td>
												<td>567k left</td>
												<td><strong class="text-black">NO</strong></td>
												<td><a href="javascript:void(0)" class="btn btn-primary btn-sm light">$65,22</a></td>
											</tr>
											<tr>
												<td>#0012451</td>
												<td>04/08/2020<br>12:34 AM</td>
												<td><span class="text-nowrap">The Story of Danau Toba<br> (Musical Drama)</span></td>
												<td>Andrew Stevano</td>
												<td>London, US</td>
												<td>1 Pcs</td>
												<td>567k left</td>
												<td><strong class="text-black">NO</strong></td>
												<td><a href="javascript:void(0)" class="btn btn-primary btn-sm light">$125,70</a></td>
											</tr>
											<tr>
												<td>#0012451</td>
												<td>04/08/2020<br>12:34 AM</td>
												<td><span class="text-nowrap">The Story of Danau Toba<br> (Musical Drama)</span></td>
												<td>Bella Simatupang</td>
												<td>London, US</td>
												<td>1 Pcs</td>
												<td>567k left</td>
												<td><strong class="text-black">NO</strong></td>
												<td><a href="javascript:void(0)" class="btn btn-primary btn-sm light">$125,70</a></td>
											</tr>
											<tr>
												<td>#0012451</td>
												<td>04/08/2020<br>12:34 AM</td>
												<td><span class="text-nowrap">The Story of Danau Toba<br> (Musical Drama)</span></td>
												<td>Bella Simatupang</td>
												<td>London, US</td>
												<td>1 Pcs</td>
												<td>567k left</td>
												<td><strong class="text-black">NO</strong></td>
												<td><a href="javascript:void(0)" class="btn btn-primary btn-sm light">$125,70</a></td>
											</tr>
											<tr>
												<td>#0012451</td>
												<td>04/08/2020<br>12:34 AM</td>
												<td><span class="text-nowrap">The Story of Danau Toba<br> (Musical Drama)</span></td>
												<td>Bella Simatupang</td>
												<td>London, US</td>
												<td>1 Pcs</td>
												<td>567k left</td>
												<td><strong class="text-black">NO</strong></td>
												<td><a href="javascript:void(0)" class="btn btn-primary btn-sm light">$125,70</a></td>
											</tr>
											<tr>
												<td>#0012451</td>
												<td>04/08/2020<br>12:34 AM</td>
												<td><span class="text-nowrap">The Story of Danau Toba<br> (Musical Drama)</span></td>
												<td>Bella Simatupang</td>
												<td>London, US</td>
												<td>1 Pcs</td>
												<td>567k left</td>
												<td><strong class="text-black">NO</strong></td>
												<td><a href="javascript:void(0)" class="btn btn-primary btn-sm light">$125,70</a></td>
											</tr>
											<tr>
												<td>#0012451</td>
												<td>04/08/2020<br>12:34 AM</td>
												<td><span class="text-nowrap">Charity Fun Games at <br> Lapangan Merdeka</span></td>
												<td>Andrew Stevano</td>
												<td>Jakarta, Indonesia</td>
												<td>2 Pcs</td>
												<td>567k left</td>
												<td><strong class="text-primary">REFUND</strong></td>
												<td><a href="javascript:void(0)" class="btn btn-primary btn-sm light">$124,55</a></td>
											</tr>
											<tr>
												<td>#0012451</td>
												<td>04/08/2020<br>12:34 AM</td>
												<td><span class="text-nowrap">Indonesian Envato <br> Authors Fun Run </span></td>
												<td>Cive Slauw</td>
												<td>Penang, Malaysia</td>
												<td>4 Pcs</td>
												<td>567k left</td>
												<td><strong class="text-black">NO</strong></td>
												<td><a href="javascript:void(0)" class="btn btn-primary btn-sm light">$536,00</a></td>
											</tr>
											<tr>
												<td>#0012451</td>
												<td>04/08/2020<br>12:34 AM</td>
												<td><span class="text-nowrap">The Story of Danau Toba<br> (Musical Drama)</span></td>
												<td>Eddy Cusuma</td>
												<td>Medan, Indonesia</td>
												<td>3 Pcs</td>
												<td>567k left</td>
												<td><strong class="text-black">NO</strong></td>
												<td><a href="javascript:void(0)" class="btn btn-primary btn-sm light">$44,00</a></td>
											</tr>
											<tr>
												<td>#0012451</td>
												<td>04/08/2020<br>12:34 AM</td>
												<td><span class="text-nowrap">The Story of Danau Toba<br> (Musical Drama)</span></td>
												<td>Frank Azire</td>
												<td>Bangkok, Thailand</td>
												<td>1 Pcs</td>
												<td>567k left</td>
												<td><strong class="text-black">REFUND</strong></td>
												<td><a href="javascript:void(0)" class="btn btn-primary btn-sm light">$51,50</a></td>
											</tr>
											<tr>
												<td>#0012451</td>
												<td>04/08/2020<br>12:34 AM</td>
												<td><span class="text-nowrap">The Story of Danau Toba<br> (Musical Drama)</span></td>
												<td>Bella Simatupang</td>
												<td>London, US</td>
												<td>1 Pcs</td>
												<td>567k left</td>
												<td><strong class="text-black">NO</strong></td>
												<td><a href="javascript:void(0)" class="btn btn-primary btn-sm light">$125,70</a></td>
											</tr>
											<tr>
												<td>#0012451</td>
												<td>04/08/2020<br>12:34 AM</td>
												<td><span class="text-nowrap">The Story of Danau Toba<br> (Musical Drama)</span></td>
												<td>Elisabeth Queen</td>
												<td>London, US</td>
												<td>1 Pcs</td>
												<td>567k left</td>
												<td><strong class="text-black">NO</strong></td>
												<td><a href="javascript:void(0)" class="btn btn-primary btn-sm light">$125,70</a></td>
											</tr>
											<tr>
												<td>#0012451</td>
												<td>04/08/2020<br>12:34 AM</td>
												<td><span class="text-nowrap">The Story of Danau Toba<br> (Musical Drama)</span></td>
												<td>Andrew Stevano</td>
												<td>London, US</td>
												<td>1 Pcs</td>
												<td>567k left</td>
												<td><strong class="text-black">NO</strong></td>
												<td><a href="javascript:void(0)" class="btn btn-primary btn-sm light">$125,70</a></td>
											</tr>
										</tbody>
										<thead>
                                            <tr>
                                                <th>Order Name</th>
                                                <th>Source</th>
                                                <th>Customer </th>
                                                <th>Bride Groom name</th>
                                                <th>Order Type</th>
                                                <th>Status</th>
                                                <th>Refund</th>
                                                <th>Editor</th>
                                                <th>update</th>
                                            </tr>
                                        </thead>
										<tbody>
											<tr>
												<td>#0012451 <br> 04/08/2020</td>
												<td><span class="text-nowrap">Tushar</span></td>
												<td>Client A</td>
												<td>xyz</td>
												<td>Culling + Editing</td>
												<td>ABC</td>
												<td><strong class="text-black">NO</strong></td>
												<td>abc</td>
												 <td><a href="javascript:void(0)" class="btn btn-primary btn-sm light">Update</a></td>
											</tr>
											<tr>
												<td>#0012451 <br> 04/08/2020</td>
												<td><span class="text-nowrap">Tushar</span></td>
												<td>Client A</td>
												<td>xyz</td>
												<td>Culling + Editing</td>
												<td>ABC</td>
												<td><strong class="text-black">NO</strong></td>
												<td>abc</td>
												 <td><a href="javascript:void(0)" class="btn btn-primary btn-sm light">Update</a></td>
											</tr>
											<tr>
												<td>#0012451 <br> 04/08/2020</td>
												<td><span class="text-nowrap">Tushar</span></td>
												<td>Client A</td>
												<td>xyz</td>
												<td>Culling + Editing</td>
												<td>ABC</td>
												<td><strong class="text-black">NO</strong></td>
												<td>abc</td>
												 <td><a href="javascript:void(0)" class="btn btn-primary btn-sm light">Update</a></td>
											</tr>
											<tr>
												<td>#0012451 <br> 04/08/2020</td>
												<td><span class="text-nowrap">Tushar</span></td>
												<td>Client A</td>
												<td>xyz</td>
												<td>Culling + Editing</td>
												<td>ABC</td>
												<td><strong class="text-black">NO</strong></td>
												<td>abc</td>
												 <td><a href="javascript:void(0)" class="btn btn-primary btn-sm light">Update</a></td>
											</tr>
											<tr>
												<td>#0012451 <br> 04/08/2020</td>
												<td><span class="text-nowrap">Tushar</span></td>
												<td>Client A</td>
												<td>xyz</td>
												<td>Culling + Editing</td>
												<td>ABC</td>
												<td><strong class="text-black">NO</strong></td>
												<td>abc</td>
												 <td><a href="javascript:void(0)" class="btn btn-primary btn-sm light">Update</a></td>
											</tr>
											<tr>
												<td>#0012451 <br> 04/08/2020</td>
												<td><span class="text-nowrap">Tushar</span></td>
												<td>Client A</td>
												<td>xyz</td>
												<td>Culling + Editing</td>
												<td>ABC</td>
												<td><strong class="text-black">NO</strong></td>
												<td>abc</td>
												 <td><a href="javascript:void(0)" class="btn btn-primary btn-sm light">Update</a></td>
											</tr>
											<tr>
												<td>#0012451 <br> 04/08/2020</td>
												<td><span class="text-nowrap">Tushar</span></td>
												<td>Client A</td>
												<td>xyz</td>
												<td>Culling + Editing</td>
												<td>ABC</td>
												<td><strong class="text-black">NO</strong></td>
												<td>abc</td>
												 <td><a href="javascript:void(0)" class="btn btn-primary btn-sm light">Update</a></td>
											</tr>
											<tr>
												<td>#0012451 <br> 04/08/2020</td>
												<td><span class="text-nowrap">Tushar</span></td>
												<td>Client A</td>
												<td>xyz</td>
												<td>Culling + Editing</td>
												<td>ABC</td>
												<td><strong class="text-black">NO</strong></td>
												<td>abc</td>
												 <td><a href="javascript:void(0)" class="btn btn-primary btn-sm light">Update</a></td>
											</tr>
											<tr>
												<td>#0012451 <br> 04/08/2020</td>
												<td><span class="text-nowrap">Tushar</span></td>
												<td>Client A</td>
												<td>xyz</td>
												<td>Culling + Editing</td>
												<td>ABC</td>
												<td><strong class="text-black">NO</strong></td>
												<td>abc</td>
												 <td><a href="javascript:void(0)" class="btn btn-primary btn-sm light">Update</a></td>
											</tr>
										</tbody>
									</table>
								</div>
							</div> -->
						</div>
					</div>
				</div>
            </div>
        </div>


        <!--  status-1 model-->


               <div class="modal fade update_employee" id="status_1_modal">
					<div class="modal-dialog" role="document">

						<div class="modal-content">
							<div class="modal-header">
								<!-- <h5 class="modal-title">A waiting assign For Culling</h5> -->
								<label class="text-black font-w500">Updated Status,  <b id="s1_status_order_name">demo</b></label>
								<button type="button" class="close" data-dismiss="modal"><span>&times;</span>
								</button>
							</div>
							<div class="modal-body  update_model">
								<form method="post" class="update_employee_data">


									@csrf
                                       <input type="hidden" id="s1_order_id" name="order_id" value="">
								       <input type="hidden" id="s1_status" name="status" value="">
									
									<div class="form-group">
										
										<label class="text-black font-w500">Select Person for culling</label>
                                       <select class="form-control" name="culling_employee"  id="s1_culling_employee">

                                        @foreach($employee as $key=>$e)


                                         @foreach($culling_employee as $c)

                                          @if($e->id==$c->emp_id)


                                          <option value="{{ $e->id }}" {{$e->id== 1? 'selected' : ''}}>{{ $e->employee_name }}</option>

                                          @endif

                                          @endforeach
                                              
                                        @endforeach 

                                    </select>   
									</div>
									<div class="form-group">
										<label class="text-black font-w500">Number Of Images Will be selected from: <b id="s1_total_image">1234567</b>  </label>
										
									</div>
									<div class="form-group">
										<input type="number" class="form-control" name="selected_image" id="s1_selected_image">
										  <span class="text-danger error-text selected_image_err"></span>
									</div>
									
									<div class="form-group">
										<button type="button" class="btn btn-primary " id="update_status_1">Update</button>
										 
									</div>
								</form>
							</div>
						</div>
					</div>
				     </div>


	    <!--  status-2 model-->


                <div class="modal fade update_employee" id="status_2_modal">
					<div class="modal-dialog" role="document">

						<div class="modal-content">
							<div class="modal-header">
								<!-- <h5 class="modal-title">A waiting assign For Culling</h5> -->
								<label class="text-black font-w500">Updated Status,  <b id="s2_status_order_name">demo</b></label>
								<button type="button" class="close" data-dismiss="modal"><span>&times;</span>
								</button>
							</div>
							<div class="modal-body  update_model">
								<form method="post" class="update_employee_data">


									@csrf
                                       <input type="hidden" id="s2_order_id" name="order_id" value="">
								       <input type="hidden" id="s2_status" name="status" value="">
									
								
									<div class="form-group">
										<label class="text-black font-w500">Number Of Images Will be selected from: <b id="s2_total_image">1234567</b>  </label>
										
									</div>
									<div class="form-group">
										<input type="number" class="form-control" name="selected_image" id="s2_selected_image">
										  <span class="text-danger error-text selected_image_err"></span>
									</div>

                           
									
									<div class="form-group">
										<button type="button" class="btn btn-primary " id="update_status_2">Update</button>
										 
									</div>
								</form>
							</div>
						   </div>
					    </div>
			     	</div>



	   <!--  status-8 -9  model-->


                <div class="modal fade update_employee" id="status_89_modal">
					<div class="modal-dialog" role="document">

						<div class="modal-content">
							<div class="modal-header">
								<!-- <h5 class="modal-title">A waiting assign For Culling</h5> -->
								<label class="text-black font-w500">Updated Status,  <b id="s89_status_order_name">demo</b></label>
								<button type="button" class="close" data-dismiss="modal"><span>&times;</span>
								</button>
							</div>
							<div class="modal-body  update_model">
								<form method="post" class="update_employee_data">


									@csrf
                                       <input type="hidden" id="s89_order_id" name="order_id" value="">
								       <input type="hidden" id="s89_status" name="status" value="">
								       <input type="hidden" id="s89_total_image" name="total_image" value="">
									
								

									<div class="col-sm-12 col-12" id="type_1">
										<div class="custom-control custom-checkbox mb-3 checkbox-danger">
											<input type="checkbox" class="custom-control-input"  id="customCheckBox5" >
											<label class="custom-control-label" for="customCheckBox5">Catalog Send to client</label><br>
										    <span class="text-danger error-text send_client_err"></span>
										</div>
									</div>

									<div class="col-sm-12 col-12"  id="type_2">
										<div class="custom-control custom-checkbox mb-3 checkbox-danger">
											<input type="checkbox" class="custom-control-input"  id="customCheckBox6">
											<label class="custom-control-label" for="customCheckBox6">Gallery Updated and Sent</label><br>
											  <span class="text-danger error-text update_gallary_err"></span>
										</div>
									</div>


                                  
									
									<div class="form-group">
										<button type="button" class="btn btn-primary " id="update_status_89">Update</button>
										 
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>

       <!-- status-10 model -->	
       
                <div class="modal fade update_employee" id="status_10_modal">
					<div class="modal-dialog" role="document">

						<div class="modal-content">
							<div class="modal-header">
								<!-- <h5 class="modal-title">A waiting assign For Culling</h5> -->
								<label class="text-black font-w500">Updated Status,  <b id="s10_status_order_name">demo</b></label>
								<button type="button" class="close" data-dismiss="modal"><span>&times;</span>
								</button>
							</div>
							<div class="modal-body  update_model">
								<form method="post" class="update_employee_data">


									@csrf
                                       <input type="hidden" id="s10_order_id" name="order_id" value="">
								       <input type="hidden" id="s10_status" name="status" value="">
								       <input type="hidden" id="s10_total_image" name="total_image" value="">
									
								

								<!-- 	<div class="col-sm-12 col-12" id="type_1">
										<div class="custom-control custom-checkbox mb-3 checkbox-danger">
											<input type="checkbox" class="custom-control-input"  id="customCheckBox5" >
											<label class="custom-control-label" for="customCheckBox5">Catalog Send to client</label><br>
										    <span class="text-danger error-text send_client_err"></span>
										</div>
									</div>

									<div class="col-sm-12 col-12"  id="type_2">
										<div class="custom-control custom-checkbox mb-3 checkbox-danger">
											<input type="checkbox" class="custom-control-input"  id="customCheckBox6">
											<label class="custom-control-label" for="customCheckBox6">Gallery Updated and Sent</label><br>
											  <span class="text-danger error-text update_gallary_err"></span>
										</div>
									</div> -->




   
										<div class="form-group">
										
										<label class="text-black font-w500">Need to Revision</label>
                                       <select class="form-control" name="checking_employee" id="s10_checking_employee">

                                       @foreach($employee as $key=>$e)

                                        @foreach($checking_employee as $key=>$c)

                                             @if($e->id==$c->emp_id)

                                         <option value="{{ $e->id }}" {{$e->id== 1? 'selected' : ''}}>{{ $e->employee_name }}</option>

                                          @endif
                                              
                                         @endforeach 

                                      @endforeach    

                                    </select>   
									</div>

									 <div class="col-sm-12 col-12" id="type_1">
										<div class="custom-control custom-checkbox mb-3 checkbox-danger">
											<input type="checkbox" class="custom-control-input"  id="customCheckBox10" >
											<label class="custom-control-label" for="customCheckBox10">Order cancle</label><br>
										    <span class="text-danger error-text send_client_err"></span>
										</div>
									</div>
									
									<div class="form-group">
										<button type="button" class="btn btn-primary " id="update_status_10">Update</button>
										 
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>


	 <!--  status-11  model-->


                <div class="modal fade update_employee" id="status_11_modal">
					<div class="modal-dialog" role="document">

						<div class="modal-content">
							<div class="modal-header">
								<!-- <h5 class="modal-title">A waiting assign For Culling</h5> -->
								<label class="text-black font-w500">Updated Status,  <b id="s11_status_order_name">demo</b></label>
								<button type="button" class="close" data-dismiss="modal"><span>&times;</span>
								</button>
							</div>
							<div class="modal-body  update_model">
								<form method="post" class="update_employee_data">


									@csrf
                                       <input type="hidden" id="s11_order_id" name="order_id" value="">
								       <input type="hidden" id="s11_status" name="status" value="">
								       <input type="hidden" id="s11_total_image" name="total_image" value="">
									
								

									<div class="col-sm-12 col-12" id="type_1">
										<div class="custom-control custom-checkbox mb-3 checkbox-danger">
											<input type="checkbox" class="custom-control-input"  id="customCheckBox11" >
											<label class="custom-control-label" for="customCheckBox11">Revision Done</label><br>
										    <span class="text-danger error-text In_revision11_err"></span>
										</div>
									</div>
	
                                 
									<div class="form-group">
										<button type="button" class="btn btn-primary " id="update_status_11">Update</button>
										 
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>


	   <!--  status-12 model-->


                <div class="modal fade update_employee" id="status_12_modal">
					<div class="modal-dialog" role="document">

						<div class="modal-content">
							<div class="modal-header">
								<!-- <h5 class="modal-title">A waiting assign For Culling</h5> -->
								<label class="text-black font-w500">Updated Status,  <b id="s12_status_order_name">demo</b></label>
								<button type="button" class="close" data-dismiss="modal"><span>&times;</span>
								</button>
							</div>
							<div class="modal-body  update_model">
								<form method="post" class="update_employee_data">


									@csrf
                                       <input type="hidden" id="s12_order_id" name="order_id" value="">
								       <input type="hidden" id="s12_status" name="status" value="">
								       <input type="hidden" id="s12_total_image" name="total_image" value="">
								       <input type="hidden" id="s12_data_type" name="data_type" value="">
									
								

									<div class="col-sm-12 col-12" id="type_12">
										<div class="custom-control custom-checkbox mb-3 checkbox-danger">
											<input type="checkbox" class="custom-control-input"  id="customCheckBox12" >
											<label class="custom-control-label" for="customCheckBox12">Catalog Send to client</label><br>
										    <span class="text-danger error-text send_client_err12"></span>
										</div>
									</div>

									<div class="col-sm-12 col-12"  id="type_13">
										<div class="custom-control custom-checkbox mb-3 checkbox-danger">
											<input type="checkbox" class="custom-control-input"  id="customCheckBox13">
											<label class="custom-control-label" for="customCheckBox13">Gallery Updated and Sent</label><br>
											  <span class="text-danger error-text update_gallary_err12"></span>
										</div>
									</div>


                                 
									<div class="form-group">
										<button type="button" class="btn btn-primary " id="update_status_12">Update</button>
										 
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>	


	 <!--  status-3 model-->


               <div class="modal fade update_employee" id="status_3_modal">
					<div class="modal-dialog" role="document">

						<div class="modal-content">
							<div class="modal-header">
								<!-- <h5 class="modal-title">A waiting assign For Culling</h5> -->
								<label class="text-black font-w500">Updated Status,  <b id="s3_status_order_name">demo</b></label>
								<button type="button" class="close" data-dismiss="modal"><span>&times;</span>
								</button>
							</div>
							<div class="modal-body  update_model">
								<form method="post" class="update_employee_data">


									@csrf
                                       <input type="hidden" id="s3_order_id" name="order_id" value="">
								       <input type="hidden" id="s3_status" name="status" value="">
								       <input type="hidden" id="s3_total_image" name="total_image" value="">
									
									<div class="form-group">
										
										<label class="text-black font-w500">Select Person for Anchor</label>
                                       <select class="form-control" name="anchor_employee"  id="s3_anchor_employee">



	                                   @foreach($employee as $key=>$e)

                                        @foreach($anchor_employee as $key=>$c)

                                          @if($e->id==$c->emp_id)

                                         <option value="{{ $e->id }}" {{$e->id== 1? 'selected' : ''}}>{{ $e->employee_name }}</option>

                                          @endif
                                              
                                        @endforeach 

                                      @endforeach    

                                    </select>   
									</div>
									
									
									<div class="form-group">
										<button type="button" class="btn btn-primary " id="update_status_3">Update</button>
										 
									</div>
								</form>
							</div>
						</div>
					</div>
				     </div>					



     <!--  status-4 model-->


               <div class="modal fade update_employee" id="status_4_modal">
					<div class="modal-dialog" role="document">

						<div class="modal-content">
							<div class="modal-header">
								<!-- <h5 class="modal-title">A waiting assign For Culling</h5> -->
								<label class="text-black font-w500">Updated Status,  <b id="s4_status_order_name">demo</b></label>
								<button type="button" class="close" data-dismiss="modal"><span>&times;</span>
								</button>
							</div>
							<div class="modal-body  update_model">
								<form method="post" class="update_employee_data">


									@csrf
                                       <input type="hidden" id="s4_order_id" name="order_id" value="">
								       <input type="hidden" id="s4_status" name="status" value="">


								       <div class="form-group">
										<label class="text-black font-w500">Number Of Images Will be Edited For Anchor From: <b id="s4_total_image"></b>  </label>
										
									</div>
									<div class="form-group">
										<input type="number" class="form-control" name="selected_image" id="s4_selected_image">
										  <span class="text-danger error-text selected_image_err"></span>
									</div>
									
									
									<div class="form-group">
										
										<label class="text-black font-w500">Select Person for Editing</label>
                                       <select class="form-control" name="editing_employee"  id="s4_editing_employee">

                                        @foreach($editing_employee as $key=>$c)

                                            <option value="{{ $e->id }}" {{$e->id== 1? 'selected' : ''}}>{{ $e->employee_name }}</option>
                                              
                                        @endforeach 

                                    </select>   
									</div>

									<div class="form-group">
										<label class="text-black font-w500">Number Of Images Will be Edited: <b id="s4_editing_image"></b>  </label>
										
									</div>
									
									<div class="form-group">
										<button type="button" class="btn btn-primary " id="update_status_4">Update</button>
										 
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>

	<!--  status-6 model-->


                 <div class="modal fade update_employee" id="status_6_modal">
				    	<div class="modal-dialog" role="document">

					    	<div class="modal-content">
							   <div class="modal-header">
								<!-- <h5 class="modal-title">A waiting assign For Culling</h5> -->
								<label class="text-black font-w500">Updated Status,  <b id="s6_status_order_name">demo</b></label>
								<button type="button" class="close" data-dismiss="modal"><span>&times;</span>
								</button>
							</div>
							<div class="modal-body  update_model">
								<form method="post" class="update_employee_data">

									@csrf
                                       <input type="hidden" id="s6_order_id" name="order_id" value="">
								       <input type="hidden" id="s6_status" name="status" value="">
								        <input type="hidden" id="s6_total_image" name="total_image" value="">

								       <div class="form-group">
										<label class="text-black font-w500">Number Of Images Edited From: <b id="s6_total_edit_image"></b>  </label>
										
									</div>
									<div class="form-group">
										<input type="number" class="form-control" name="selected_image" id="s6_selected_image">
										  <span class="text-danger error-text selected_image_err"></span>
									</div>							
									
									<div class="form-group">
									   <button type="button" class="btn btn-primary " id="update_status_6">Update</button>	 
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
	
        <!--  status-7 model-->


               <div class="modal fade update_employee" id="status_7_modal">
					<div class="modal-dialog" role="document">

						<div class="modal-content">
							<div class="modal-header">
								<!-- <h5 class="modal-title">A waiting assign For Culling</h5> -->
								<label class="text-black font-w500">Updated Status,  <b id="s7_status_order_name">demo</b></label>
								<button type="button" class="close" data-dismiss="modal"><span>&times;</span>
								</button>
							</div>
							<div class="modal-body  update_model">
								<form method="post" class="update_employee_data">


									@csrf
                                       <input type="hidden" id="s7_order_id" name="order_id" value="">
								       <input type="hidden" id="s7_status" name="status" value="">
								         <input type="hidden" id="s7_total_image" name="total_image" value="">
								
									<div class="form-group">
										<label class="text-black font-w500">Number Of Images Will be checked from: <b id="s7_total_image_for_check"></b>  </label>
										
									</div>
									<div class="form-group">
										<input type="number" class="form-control" name="selected_image" id="s7_selected_image">
										  <span class="text-danger error-text selected_image_err"></span>
									</div>

									<div class="form-group">
										
										<label class="text-black font-w500">Checked By</label>
                                       <select class="form-control" name="checking_employee"  id="s7_checking_employee">

                                       	


                                        @foreach($employee as $key=>$e)  


                                           @foreach($checking_employee as $key=>$c)

                                              @if($e->id==$c->emp_id)

                                           <option value="{{ $e->id }}" {{$e->id== 1? 'selected' : ''}}>{{ $e->employee_name }}</option>

                                          @endif
                                              
                                        @endforeach 

                                      @endforeach  


                                    </select>   
									</div>
									
									<div class="form-group">
										<button type="button" class="btn btn-primary " id="update_status_7">Update</button>
										 
									</div>
								</form>
							</div>
						</div>
					</div>
				     </div>


          <!--  status-5 model-->


               <div class="modal fade update_employee" id="status_5_modal">
					<div class="modal-dialog" role="document">

						<div class="modal-content">
							<div class="modal-header">
								<!-- <h5 class="modal-title">A waiting assign For Culling</h5> -->
								<label class="text-black font-w500">Updated Status,  <b id="s5_status_order_name">demo</b></label>
								<button type="button" class="close" data-dismiss="modal"><span>&times;</span>
								</button>
							</div>
							<div class="modal-body  update_model">
								<form method="post" class="update_employee_data">


									@csrf
                                       <input type="hidden" id="s5_order_id" name="order_id" value="">
								       <input type="hidden" id="s5_status" name="status" value="">
								         <input type="hidden" id="s5_total_image" name="total_image" value="">
								
									<div class="form-group">
										<label class="text-black font-w500">Number Of Images Will be Edited: <b id="s5_total_image_for_edit"></b>  </label>
										
									</div>
								
									<div class="form-group">
										
										<label class="text-black font-w500">select Person for Edit</label>
                                       <select class="form-control" name="edit_employee"  id="s5_edit_employee">


                                      @foreach($employee as $key=>$e)

                                        @foreach($editing_employee as $key=>$c)

                                          @if($e->id==$c->emp_id)

                                            <option value="{{ $e->id }}" {{$e->id== 1? 'selected' : ''}}>{{ $e->employee_name }}</option>

                                          @endif
                                              
                                        @endforeach 

                                      @endforeach    

                                    </select>   
									</div>
									
									<div class="form-group">
										<button type="button" class="btn btn-primary " id="update_status_5">Update</button>
										 
									</div>
								</form>
							</div>
						</div>
					</div>
				 </div>

		







        <!--    <div id="" class="modal fade" >
                       	<div class="modal-dialog modal-confirm">
                       		<div class="modal-content">
                       			 <div class="modal-header flex-column">
                       				<div class="icon-box">
                       					<i class="material-icons">&#xE5CD;</i>
                       				</div>						
                       				<h4 class="modal-title w-100">Are you sure?</h4>	
                                       <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                       			</div>
                       			<div class="modal-body">
                       				<p>A waiting assign For Culling</p>
                       			</div>
                       			<div class="modal-footer justify-content-center">
                       				<form>					
                       					<input type="hidden" id="order_id" name="order_id" value="">

                       					<div class="form-group">
                                        <label class="text-black font-w500">Select Person Culling</label>
                                      <select class="selectpicker" multiple>
                          				    <option>Toronto</option>
                          				    <option>Bucharest</option>
                          				    <option>Paris</option>
                          				      </select>
                                       </div>

                                     <div class="form-group">
                                        <label class="text-black font-w500">Total Image</label>
                                        <input type="text" class="form-control" name="total_image" id="total_image" readonly>          
                                    </div>


                                     <div class="form-group">
                                        <label class="text-black font-w500">Number of imgeas Will be selected From total image</label>
                                        <input type="text" class="form-control" name="seleted_image" id="seleted_image">          
                                    </div>


                       				</form>
                       				<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                       				<button type="button" class="btn btn-danger update_satus1_data" id="status_id">update</button>
                       			</div>
                       		</div>
                       	</div>
                       </div>   -->

              <!--  status-1 model--> 



       <!--        <div class="col-xl-6 col-lg-6" id="status_1_modal">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Input Size</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form>
                                        <div class="form-group">
                                            <input class="form-control form-control-lg" type="text" placeholder="form-control-lg">
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" type="text" placeholder="Default input">
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control form-control-sm" type="text" placeholder="form-control-sm">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
					</div>

 -->



                  <!-- update Order -->
                <div class="modal fade" id="update_addOrderModalside" class="update_order_model">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Update Order</h5>
                                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form method="post" class="upadte_orederform">
                                    @csrf
                                    <!-- <div class="form-group">
                                        <label class="text-black font-w500">Event Name</label>
                                        <input type="text" class="form-control">
                                    </div> -->

                                    <input type="hidden" id="update_order_id" name="order_id" value="">
                                    <div class="form-group">
                                        <label class="text-black font-w500">Order Source</label>
                                        <select class="form-control" name="client_source"  id="update_client_source1">

                                             @foreach($client_source as $cs)

                                               <option value="{{ $cs->id }}">{{ $cs->name }}</option>
                                              
                                             @endforeach    
   
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="text-black font-w500">Client Name</label>

                                     <select class="form-control" name="client_name"  id="update_client_name1">

                                        @foreach($client_list1 as $cl)

                                          <option value="{{ $cl->id }}">{{ $cl->client_name }}</option>
                                              
                                        @endforeach 

                                    </select>   
                                    </div>
                                 
                                    <div class="form-group">
                                        <label class="text-black font-w500">Order name</label>
                                        <input type="text" class="form-control" name="order_name" id="update_order_name1">
                                        <span class="text-danger error-text order_name_error"></span>

                                    </div>

                                    <div class="form-group type-data1">
                                        <label class="text-black font-w500">Type of data</label>

                                     <select class="form-control" name="type_of_data"  id="update_type_of_data1" readonly>

                                        @foreach($data_type as $d)

                                          <option value="{{ $d->id }}" disabled>{{ $d->name }}</option>
                                              
                                        @endforeach 

                                    </select>   
                                    </div>

                                     <div class="form-group order_type">
                                     <label class="text-black font-w500">Order Type</label>
                                     <select class="form-control selecte_order_type" name="order_type" id="update_order_type1" readOnly>
                                          @foreach($order_type as $ot)

                                            <option value="{{ $ot->id }}" disabled>{{ $ot->name }}</option>
                                              
                                         @endforeach 

                                        </select>
                                    </div>


                                    <div class="form-group">
                                        <label class="text-black font-w500">Number of Image</label>
                                        <input type="number" class="form-control" name="number_of_image" id="update_number_of_image1">
                                        <span class="text-danger error-text number_of_image_error"></span>

                                    </div>


                                    <div class="form-group" id="Anchore_checkbox1">
                                         <label class="text-black font-w500">Client Edited Anchore</label><br>
                                            <div class="form-check form-check-inline anchore_1">
                                                <label><input type="checkbox" name="client_edited" id="update_client_edited1" class="check check1 " value="1" onclick="show_edit_image1()" checked disabled> YES</label>
                                                <label><input type="checkbox" name="client_edited" id="update_client_edited1" class="check check0" value="0" onclick="hide_edit_image1()" disabled> NO</label>
                                                <label class="text-black font-w500">, Anchore Edit Required</label>
                                              
                                            </div>


                                    <div class="form-group" id="edit_image1">
                                        <label class="text-black font-w500">Number Edit for Anchore</label>
                                        <input type="number" class="form-control" name="number_of_edit" id="update_number_of_edit1">
                                        <span class="text-danger error-text number_of_edit_error"></span>

                                    </div>

                                           
                                        </div>
                                   
                                    <div class="form-group">
                                        <button type="Update" class="btn btn-primary update_order">Update</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                       







        <!--**********************************
            Content body end
        ***********************************-->

        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright © Designed &amp; Developed by <a href="http://dexignzone.com/" target="_blank">DexignZone</a> 2021</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

		<!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="./vendor/global/global.min.js"></script>
	<script src="./vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
	<script src="./vendor/chart.js/Chart.bundle.min.js"></script>
    <script src="./js/custom.min.js"></script>
	<script src="./js/deznav-init.js"></script>
 
		
	
	<!-- Datatable -->
    <script src="./vendor/datatables/js/jquery.dataTables.min.js"></script>
	<script>
		(function($) {
			var table = $('#example2').DataTable({
				searching: false,
				paging:true,
				select: false,
				//info: false,         
				lengthChange:false 
				
			});
			var table = $('#example3').DataTable({
				searching: false,
				paging:true,
				select: false,
				//info: false,         
				lengthChange:false 
				
			});
			var table = $('#example4').DataTable({
				searching: false,
				paging:true,
				select: false,
				//info: false,         
				lengthChange:false 
				
			});
			var table = $('#example5').DataTable({
				searching: false,
				paging:true,
				select: false,
				//info: false,         
				lengthChange:false 
				
			});
			$('#example tbody').on('click', 'tr', function () {
				var data = table.row( this ).data();
				
			});
		})(jQuery);


	

		  function createAlert(title, summary, details, severity, dismissible, autoDismiss, appendToId) {
                  var iconMap = {
                    info: "fa fa-info-circle",
                    success: "fa fa-thumbs-up",
                    warning: "fa fa-exclamation-triangle",
                    danger: "fa ffa fa-exclamation-circle"
                  };
                
                        var iconAdded = false;
             
                         var alertClasses = ["alert", "animated", "flipInX"];
                         alertClasses.push("alert-" + severity.toLowerCase());
             
                          if (dismissible) {
                              alertClasses.push("alert-dismissible");
                              }

                            var msgIcon = $("<i />", {
                              "class": iconMap[severity] // you need to quote "class" since it's a reserved keyword
                            });

                            var msg = $("<div />", {
                              "class": alertClasses.join(" ") // you need to quote "class" since it's a reserved keyword
                            });

                           if (title) {
                             var msgTitle = $("<h4 />", {
                               html: title
                             }).appendTo(msg);
                             
                             if(!iconAdded){
                               msgTitle.prepend(msgIcon);
                               iconAdded = true;
                             }
                           }

                          if (summary) {
                            var msgSummary = $("<strong />", {
                              html: summary
                            }).appendTo(msg);
                            
                            if(!iconAdded){
                              msgSummary.prepend(msgIcon);
                              iconAdded = true;
                                  }
                            }
            
                   if (details) {
                     var msgDetails = $("<p />", {
                       html: details
                     }).appendTo(msg);
                     
                     if(!iconAdded){
                       msgDetails.prepend(msgIcon);
                       iconAdded = true;
                     }
                   }
  

                      /*  if (dismissible) {
                          var msgClose = $("<span />", {
                            "class": "close", // you need to quote "class" since it's a reserved keyword
                            "data-dismiss": "alert",
                            html: "<i class='fa fa-times-circle'></i>"
                          }).appendTo(msg);
                        }
                        */
                    $('#' + appendToId).prepend(msg);
                    
                    if(autoDismiss){
                      setTimeout(function(){
                        msg.addClass("flipOutX");
                        setTimeout(function(){
                          msg.remove();
                        },1000);
                      }, 5000);
                    }
             }


          function update_status($id){

             var order_id=$id;

                  /*   alert('12345');*/



                  $.ajax({

                           url:'open_update_menu/'+order_id,
                           type:'GET',
                           dataType: "json",

                            success: function(response){

                            

    
         	                 if(response.status==1){
         	                   $('#s1_status_order_name').text(response.order_name);
         	                   $('#s1_total_image').text(response.total_image);
         	              
         	                   $('#s1_order_id').val(response.order_id);
         	                   $('#s1_status').val(response.status);
         	                   $('#status_1_modal').modal('show');

         	                 } else if(response.status==2){


         	                   $('#s2_status_order_name').text(response.order_name);
         	                   $('#s2_total_image').text(response.total_image);
         	              
         	                   $('#s2_order_id').val(response.order_id);
         	                   $('#s2_status').val(response.status);
         	                   $('#status_2_modal').modal('show');

         	                  }else if(response.status==8){

                                     $('.send_client_err').text('');
                                     $('.update_gallary_err').text('');



         	                       $('#s89_status_order_name').text(response.order_name);
         	                       $('#s89_total_image').text(response.total_image);
         	              
         	                       $('#s89_order_id').val(response.order_id);
         	                       $('#s89_status').val(response.status);

         	             
         	                          $('#status_89_modal').modal('show');

         	                          $('#type_2').css("display", "none");

         	                          $('#type_1').css("display", "block");


         	                         }else if(response.status==9){



                                          $('.send_client_err').text('');
                                          $('.update_gallary_err').text('');



         	                              $('#s89_status_order_name').text(response.order_name);
         	                              $('#s89_total_image').text(response.total_image);
         	                     
         	                              $('#s89_order_id').val(response.order_id);
         	                              $('#s89_status').val(response.status);



         	             
         	                          $('#status_89_modal').modal('show');


         	                            $('#type_1').css("display", "none");
         	                            $('#type_2').css("display", "block");


         	                         }else if(response.status==10){

         	                         	  //alert(10);


         	                         	  $('#s10_status_order_name').text(response.order_name);
         	                              $('#s10_total_image').text(response.total_image);
         	                     
         	                              $('#s10_order_id').val(response.order_id);
         	                              $('#s10_status').val(response.status);


         	         
         	                             $('#status_10_modal').modal('show');



         	                         }else if(response.status==11){


         	                         	   $('.In_revision11_err').text('');
                                     

         	                         	  $('#s11_status_order_name').text(response.order_name);
         	                              $('#s11_total_image').text(response.total_image);
         	                     
         	                              $('#s11_order_id').val(response.order_id);
         	                              $('#s11_status').val(response.status);
         	                           
         	                              $('#status_11_modal').modal('show');


         	                         }else if(response.status==12){


         	                         	  $('.send_client_err12').text('');
                                          $('.update_gallary_err12').text('');



         	                              $('#s12_status_order_name').text(response.order_name);
         	                              $('#s12_total_image').text(response.total_image);
         	                     
         	                              $('#s12_order_id').val(response.order_id);
         	                              $('#s12_status').val(response.status);
         	                              $('#s12_data_type').val(response.data_type);


         	                               $('#type_2').css("display", "none");
         	                               $('#type_1').css("display", "block");


         	                              $('#status_12_modal').modal('show');

         	                              

                                        if(response.data_type==1){


                                          $('#type_13').css("display", "none");
         	                              $('#type_12').css("display", "block");
         	                              
         	                            

         	                             }else{


         	                           	  $('#type_12').css("display", "none");
         	                              $('#type_13').css("display", "block");


         	                           }


         	                          }else if(response.status==3){




         	                            $('#s3_status_order_name').text(response.order_name);
         	                            $('#s3_total_image').val(response.total_image);
         	                       
         	                             $('#s3_order_id').val(response.order_id);
         	                             $('#s3_status').val(response.status);
         	                             $('#status_3_modal').modal('show');

         	                          }else if(response.status==4){


         	                            $('#s4_status_order_name').text(response.order_name);
         	                            $('#s4_total_image').text(response.total_image);
         	                       
         	                             $('#s4_order_id').val(response.order_id);
         	                             $('#s4_status').val(response.status);
         	                             $('#status_4_modal').modal('show');

         	                          }else if(response.status==6){

         	                          


         	                            $('#s6_status_order_name').text(response.order_name);
         	                            $('#s6_total_image').val(response.total_image);
         	                       
         	                             $('#s6_order_id').val(response.order_id);
         	                             $('#s6_status').val(response.status);

         	                             $('#s6_total_edit_image').text(response.total_edit_image);
         	                             $('#status_6_modal').modal('show');

         	                           

         	                          }else if(response.status==7){

         	                         

         	                            $('#s7_status_order_name').text(response.order_name);
         	                            $('#s7_total_image').val(response.total_image);
         	                       
         	                             $('#s7_order_id').val(response.order_id);
         	                             $('#s7_status').val(response.status);

         	                             $('#s7_total_image_for_check').text(response.total_image_for_check);
         	                             $('#status_7_modal').modal('show');

         	                           

         	                          }else if(response.status==5){

         	                         

         	                            $('#s5_status_order_name').text(response.order_name);
         	                            $('#s5_total_image').val(response.total_image);
         	                       
         	                             $('#s5_order_id').val(response.order_id);
         	                             $('#s5_status').val(response.status);

         	                             $('#s5_total_image_for_edit').text(response.editing_image);
         	                             $('#status_5_modal').modal('show');

         	                           

         	                          }else{


         	                          	    alert('no status Available');
         	                          }


                                     },
 
                                  error: function(response){    

                                   alert('error') ;
          
                                   },


          
                           });

                      }



           /*update status 1*/             


            $(document).ready(function() {

               $("#update_status_1").click(function(e){
                    e.preventDefault();
    
    
                    var BASE_URL = "{{ url('/') }}";
                    var _token = $("input[name='_token']").val();
                    var order_id = $('#s1_order_id').val();
                    var current_status = $('#s1_status').val();
                    var selected_image = $('#s1_selected_image').val();
                    var total_image=$("#s1_total_image").text()
                    var culling_employee = $('#s1_culling_employee').val();

               
                 if(selected_image !=''){


            	  if(parseInt(selected_image)>parseInt(total_image)){


                  $('.selected_image_err').text('selected image is not gater than total Image')


            	}

            	else{


                $.ajax({
                      url: BASE_URL+'/update_status_1/'+order_id,
                      type:'POST',
                       data: {_token:_token,order_id:order_id,current_status:current_status,selected_image:selected_image,total_image:total_image,culling_employee:culling_employee},
                    success: function(data) {
    
                         if($.isEmptyObject(data.error)){

                          $( '.update_employee_data' ).each(function(){

                             this.reset();
                        
                             });  
                                  
                         $('.error-text').text('');

                         $('#status_1_modal').modal('hide');

                       

                         $('#status_'+order_id).html(data);

                          

   
                        createAlert('','Success!','status Updated successfully!!.','success',true,true,'pageMessages');
                 
                       }else{
                        printErrorMsg(data.error);
                        }
                       }
                     });

                	}

                }else{

              $.ajax({
                      url: BASE_URL+'/update_status_1/'+order_id,
                      type:'POST',
                      data: {_token:_token,order_id:order_id,current_status:current_status,selected_image:selected_image,total_image:total_image,culling_employee:culling_employee},
                      success: function(data) {
    
                      if($.isEmptyObject(data.error)){

                         $( '.update_employee_data' ).each(function(){

                             this.reset();
                        
                         });  
                                      

                         $('#status_1_modal').modal('hide');

                         $('.error-text').text('');

                         $('#status_1_modal').modal('hide');

                           $('#status_'+order_id).html(data);




                          createAlert('','Success!','status Updated successfully!!.','success',true,true,'pageMessages');

                    }else{
                        printErrorMsg(data.error);
                    }
                 }
               });


                }
   

             }); 

               function printErrorMsg (msg) {

               $('.co_login label').css("margin", "10px auto 0");

               $.each( msg, function( key, value ) {
               console.log(key);
              $('.'+key+'_err').text(value);
               });
             }
                });


         /*update status 2*/


            $(document).ready(function() {

               $("#update_status_2").click(function(e){
                    e.preventDefault();
    
    
                    var BASE_URL = "{{ url('/') }}";
                    var _token = $("input[name='_token']").val();
                    var order_id = $('#s2_order_id').val();
                    var current_status = $('#s2_status').val();
                    var selected_image = $('#s2_selected_image').val();
                    var total_image=$("#s2_total_image").text()
                
               
                 if(selected_image !=''){


            	  if(parseInt(selected_image)>parseInt(total_image)){


                    $('.selected_image_err').text('selected image is not gater than total Image')


                	}

            	else{


                $.ajax({
                      url: BASE_URL+'/update_status_2/'+order_id,
                      type:'POST',
                       data: {_token:_token,order_id:order_id,current_status:current_status,selected_image:selected_image,total_image:total_image},
                    success: function(data) {
    
                         if($.isEmptyObject(data.error)){

                          $( '.update_employee_data' ).each(function(){

                               this.reset();
                        
                             });  
                                  
                         $('.error-text').text('');

                         $('#status_2_modal').modal('hide');

                         $('#status_'+order_id).html(data);

   
                        createAlert('','Success!','status Updated successfully!!.','success',true,true,'pageMessages');
                   /*
                       $('.order_view').html("");
                       $('.order_view').html(data);*/
   
                       }else{
                        printErrorMsg(data.error);
                        }
                       }
                     });

                	}

                }else{

              $.ajax({
                      url: BASE_URL+'/update_status_2/'+order_id,
                      type:'POST',
                      data: {_token:_token,order_id:order_id,current_status:current_status,selected_image:selected_image,total_image:total_image},
                      success: function(data) {
    
                      if($.isEmptyObject(data.error)){

                         $( '.update_employee_data' ).each(function(){

                             this.reset();
                        
                         });  
                                      

                      
                         $('.error-text').text('');

                            $('#status_2_modal').modal('hide');



                           $('#status_'+order_id).html(data);


                          createAlert('','Success!','status Updated successfully!!.','success',true,true,'pageMessages');

                    }else{
                        printErrorMsg(data.error);
                    }
                 }
               });


                }
   

             }); 

               function printErrorMsg (msg) {

               $('.co_login label').css("margin", "10px auto 0");

               $.each( msg, function( key, value ) {
               console.log(key);
              $('.'+key+'_err').text(value);
               });
             }
                });


           /*update status 8 or 9*/

            $(document).ready(function() {

                 $("#update_status_89").click(function(e){
                    e.preventDefault();


    
    
                    var BASE_URL = "{{ url('/') }}";
                    var _token = $("input[name='_token']").val();
                    var order_id = $('#s89_order_id').val();
                    var current_status = $('#s89_status').val();
                    var total_image=$("#s89_total_image").text()


        

                    if(current_status==9){


                     if($('#customCheckBox6').is(":checked")){

                     	
                     	 var update_gallery=1;


                    	}else{


                          var update_gallery=0;


          
                    	}


                    }else{


                     if($('#customCheckBox5').is(":checked")){

                     	

                     	   var send_client=1;

                    	}else{

                         
                           var send_client=0;

                     
                     	}


                    }

                      $.ajax({
                      url: BASE_URL+'/update_status_89/'+order_id,
                      type:'POST',
                      data: {_token:_token,order_id:order_id,current_status:current_status,send_client:send_client,total_image:total_image,update_gallery:update_gallery},
                      success: function(data) {
    
                      if($.isEmptyObject(data.error)){

                         $( '.update_employee_data' ).each(function(){

                             this.reset();
                        
                         });  
                                      

                      
                         $('.error-text').text('');

                            $('#status_89_modal').modal('hide');



                           $('#status_'+order_id).html(data);


                          createAlert('','Success!','status Updated successfully!!.','success',true,true,'pageMessages');

                    }else{
                        /*printErrorMsg(data.error);*/


                          if(data.error==1){

                          	   $('.send_client_err').text('Catalog Send to client Required');



                          }else if(data.error==0){

                             $('.update_gallary_err').text('Gallery Updated and Sent Required');
                         }

                           

 
                        
                    }
                 }
                  });



                  });      
              
                  function printErrorMsg (msg) {

                   $('.co_login label').css("margin", "10px auto 0");

                  $.each( msg, function( key, value ) {
                   console.log(key);
                    $('.'+key+'_err').text(value);
                   });
                  }
                 });
    

     /*************************** upadte status 10 ************************/

           $(document).ready(function() {

                 $("#update_status_10").click(function(e){
                    e.preventDefault();



                     if($('#customCheckBox10').is(":checked")){

                     	
                     	 var is_cancle=1;


                    	}else{


                	
                     	 var is_cancle=0;


                    	}

    
                    var BASE_URL = "{{ url('/') }}";
                    var _token = $("input[name='_token']").val();
                    var order_id = $('#s10_order_id').val();
                    var current_status = $('#s10_status').val();
                    var total_image=$("#s10_total_image").text()
                    var revision_employee = $('#s10_checking_employee').val();


                     $.ajax({
                      url: BASE_URL+'/update_status_10/'+order_id,
                      type:'POST',
                      data: {_token:_token,order_id:order_id,current_status:current_status,total_image:total_image,revision_employee:revision_employee,is_cancle:is_cancle},
                      success: function(data) {
    
                      if($.isEmptyObject(data.error)){

                         $( '.update_employee_data' ).each(function(){

                             this.reset();
                        
                         });  
                                      
                         $('.error-text').text('');

                            $('#status_10_modal').modal('hide');


                           $('#status_'+order_id).html(data);


                          createAlert('','Success!','status Updated successfully!!.','success',true,true,'pageMessages');

                    }else{
                      

                           printErrorMsg(data.error);
 
                        
                    }
                  }
                 
                  });



                  });      
              
                  function printErrorMsg (msg) {

                   $('.co_login label').css("margin", "10px auto 0");

                  $.each( msg, function( key, value ) {
                   console.log(key);
                    $('.'+key+'_err').text(value);
                   });
                  }
                 });

/*************************** upadte status 11 ************************/


            $(document).ready(function() {

                 $("#update_status_11").click(function(e){
                    e.preventDefault();



                     if($('#customCheckBox11').is(":checked")){

                     	
                     	 var revison_done =1;


                    	}else{


                	
                     	 var revison_done=0;


                    	}

    
                    var BASE_URL = "{{ url('/') }}";
                    var _token = $("input[name='_token']").val();
                    var order_id = $('#s11_order_id').val();
                    var current_status = $('#s11_status').val();
                    var total_image=$("#s11_total_image").text()
                  


                     $.ajax({
                      url: BASE_URL+'/update_status_11/'+order_id,
                      type:'POST',
                      data: {_token:_token,order_id:order_id,current_status:current_status,total_image:total_image,revison_done:revison_done},
                      success: function(data) {
    
                      if($.isEmptyObject(data.error)){

                         $( '.update_employee_data' ).each(function(){

                             this.reset();
                        
                         });  
                                      
                         $('.error-text').text('');

                            $('#status_11_modal').modal('hide');


                           $('#status_'+order_id).html(data);


                          createAlert('','Success!','status Updated successfully!!.','success',true,true,'pageMessages');

                    }else{

                    	   $('.In_revision11_err').text('Revision complete is required');
                      

                          // printErrorMsg(data.error);
                        
                    }
                  }
                 
                  });



                  });      
              
                  function printErrorMsg (msg) {

                   $('.co_login label').css("margin", "10px auto 0");

                  $.each( msg, function( key, value ) {
                   console.log(key);
                    $('.'+key+'_err').text(value);
                   });
                  }
                 });


 /*****************update status 12***********************************/

            $(document).ready(function() {

                 $("#update_status_12").click(function(e){
                    e.preventDefault();


    
    
                    var BASE_URL = "{{ url('/') }}";
                    var _token = $("input[name='_token']").val();
                    var order_id = $('#s12_order_id').val();
                    var current_status = $('#s12_status').val();
                    var total_image=$("#s12_total_image").text();
                    var current_status = $('#s12_status').val();
                     var data_type = $('#s12_data_type').val();


        

                    if(data_type==2){


                     if($('#customCheckBox13').is(":checked")){

                     	
                     	 var update_gallery=1;


                    	}else{


                          var update_gallery=0;


          
                    	}


                    }else{


                     if($('#customCheckBox12').is(":checked")){

                     	

                     	   var send_client=1;

                    	}else{

                         
                           var send_client=0;

                     
                     	}


                    }

                      $.ajax({
                      url: BASE_URL+'/update_status_12/'+order_id,
                      type:'POST',
                      data: {_token:_token,order_id:order_id,current_status:current_status,send_client:send_client,total_image:total_image,update_gallery:update_gallery,data_type:data_type},
                      success: function(data) {
    
                      if($.isEmptyObject(data.error)){

                         $( '.update_employee_data' ).each(function(){

                             this.reset();
                        
                         });  
                                      

                      
                         $('.error-text').text('');

                            $('#status_12_modal').modal('hide');



                           $('#status_'+order_id).html(data);


                          createAlert('','Success!','status Updated successfully!!.','success',true,true,'pageMessages');

                    }else{
                        /*printErrorMsg(data.error);*/


                          if(data.error==1){

                          	   $('.send_client_err12').text('Catalog Send to client Required');



                          }else if(data.error==0){

                             $('.update_gallary_err12').text('Gallery Updated and Sent Required');
                         }

                           

 
                        
                    }
                 }
                  });



                  });      
              
                  function printErrorMsg (msg) {

                   $('.co_login label').css("margin", "10px auto 0");

                  $.each( msg, function( key, value ) {
                   console.log(key);
                    $('.'+key+'_err').text(value);
                   });
                  }
                 });
    

   
  /*************************update status 3******************************/             


            $(document).ready(function() {

               $("#update_status_3").click(function(e){
                    e.preventDefault();
    
    
                    var BASE_URL = "{{ url('/') }}";
                    var _token = $("input[name='_token']").val();
                    var order_id = $('#s3_order_id').val();
                    var current_status = $('#s3_status').val();
                    var total_image=$("#s3_total_image").val()
                    var anchor_employee = $('#s3_anchor_employee').val();

              

                $.ajax({
                      url: BASE_URL+'/update_status_3/'+order_id,
                      type:'POST',
                       data: {_token:_token,order_id:order_id,current_status:current_status,total_image:total_image,anchor_employee:anchor_employee},
                    success: function(data) {
    
                         if($.isEmptyObject(data.error)){

                          $( '.update_employee_data' ).each(function(){

                             this.reset();
                        
                             });  
                                  
                         $('.error-text').text('');

                         $('#status_3_modal').modal('hide');

                        /*   location.reload();*/

                         $('#status_'+order_id).html(data);

   
                        createAlert('','Success!','status Updated successfully!!.','success',true,true,'pageMessages');
                   /*
                       $('.order_view').html("");
                       $('.order_view').html(data);*/
   
                       }else{
                        printErrorMsg(data.error);
                        }
                       }
                     });

                	

                
             }); 

               function printErrorMsg (msg) {

               $('.co_login label').css("margin", "10px auto 0");

               $.each( msg, function( key, value ) {
               console.log(key);
              $('.'+key+'_err').text(value);
                  });
                 }
               });


     /*************************update status 4******************************/             

    
    

       $(document).ready(function(){

          $('#s4_selected_image').on('keyup', function(){

          var select_image = $('#s4_selected_image').val();

          var total_image = $('#s4_total_image').text();

          if(select_image !=''){
 
               if(parseInt(select_image)>parseInt(total_image)){
  

                     $('.selected_image_err').text('selected image is not gater than total Image');


                   }else{

              	       $('.selected_image_err').text('');

              	      var edit_image=parseInt(total_image)-parseInt(select_image);

              	      $('#s4_editing_image').text(edit_image);

 

                  }
               }


             });

          });

      

        $(document).ready(function() {

               $("#update_status_4").click(function(e){
                    e.preventDefault();
    
    
                    var BASE_URL = "{{ url('/') }}";
                    var _token = $("input[name='_token']").val();
                    var order_id = $('#s4_order_id').val();
                    var current_status = $('#s4_status').val();
                    var selected_image = $('#s4_selected_image').val();
                    var total_image=$("#s4_total_image").text()
                    var editing_image=$("#s4_editing_image").text()
                    var editing_employee=$("#s4_editing_employee").val()


                
               
                 if(selected_image !=''){


            	  if(parseInt(selected_image)>parseInt(total_image)){


                    $('.selected_image_err').text('selected image is not gater than total Image')


                	}

            	else{


                $.ajax({
                      url: BASE_URL+'/update_status_4/'+order_id,
                      type:'POST',
                       data: {_token:_token,order_id:order_id,editing_employee:editing_employee,selected_image:selected_image,total_image:total_image,editing_image:editing_image},
                    success: function(data) {
    
                         if($.isEmptyObject(data.error)){

                          $( '.update_employee_data' ).each(function(){

                               this.reset();
                        
                             });  
                                  
                         $('.error-text').text('');

                         $('#status_4_modal').modal('hide');

                         $('#status_'+order_id).html(data);

   
                        createAlert('','Success!','status Updated successfully!!.','success',true,true,'pageMessages');
                   /*
                       $('.order_view').html("");
                       $('.order_view').html(data);*/
   
                       }else{
                        printErrorMsg(data.error);
                        }
                       }
                     });

                	}

                }else{

              $.ajax({
                      url: BASE_URL+'/update_status_4/'+order_id,
                      type:'POST',
                      data: {_token:_token,order_id:order_id,editing_employee:editing_employee,selected_image:selected_image,total_image:total_image,editing_image:editing_image},
                      success: function(data) {
    
                      if($.isEmptyObject(data.error)){

                         $( '.update_employee_data' ).each(function(){

                             this.reset();
                        
                         });  
                                      

                      
                         $('.error-text').text('');

                            $('#status_4_modal').modal('hide');



                           $('#status_'+order_id).html(data);


                          createAlert('','Success!','status Updated successfully!!.','success',true,true,'pageMessages');

                    }else{
                        printErrorMsg(data.error);
                    }
                 }
               });


                }
   

             }); 

               function printErrorMsg (msg) {

               $('.co_login label').css("margin", "10px auto 0");

               $.each( msg, function( key, value ) {
               console.log(key);
              $('.'+key+'_err').text(value);
               });
             }
                });


/**************************************update status 6***************************/             


            $(document).ready(function() {

               $("#update_status_6").click(function(e){
                    e.preventDefault();
    
    
                    var BASE_URL = "{{ url('/') }}";
                    var _token = $("input[name='_token']").val();
                    var order_id = $('#s6_order_id').val();
                    var current_status = $('#s6_status').val();
                    var selected_image = $('#s6_selected_image').val();
                    var total_image=$("#s6_total_image").val();
                    var total_edit_image=$("#s6_total_edit_image").text();

          
               

               
                 if(selected_image !=''){


            	  if(parseInt(selected_image)>parseInt(total_edit_image)){


                      $('.selected_image_err').text('selected image is not gater than total Edited Image');


                  }


            	

            	else{


                $.ajax({
                      url: BASE_URL+'/update_status_6/'+order_id,
                      type:'POST',
                       data: {_token:_token,order_id:order_id,current_status:current_status,selected_image:selected_image,total_image:total_image,total_edit_image:total_edit_image},
                    success: function(data) {
    
                         if($.isEmptyObject(data.error)){

                          $( '.update_employee_data' ).each(function(){

                             this.reset();
                        
                             });  
                                  
                         $('.error-text').text('');

                         $('#status_6_modal').modal('hide');

                        /*   location.reload();*/

                         $('#status_'+order_id).html(data);

                          

   
                        createAlert('','Success!','status Updated successfully!!.','success',true,true,'pageMessages');
                   /*
                       $('.order_view').html("");
                       $('.order_view').html(data);*/
   
                       }else{
                        printErrorMsg(data.error);
                        }
                       }
                     });

                	}

                }else{

              $.ajax({
                      url: BASE_URL+'/update_status_6/'+order_id,
                      type:'POST',
                      data: {_token:_token,order_id:order_id,current_status:current_status,selected_image:selected_image,total_image:total_image},
                      success: function(data) {
    
                      if($.isEmptyObject(data.error)){

                         $( '.update_employee_data' ).each(function(){

                             this.reset();
                        
                         });  
                                      

                         $('#status_6_modal').modal('hide');

                         $('.error-text').text('');

                         $('#status_6_modal').modal('hide');

                         /*   location.reload();*/

                           $('#status_'+order_id).html(data);




                          createAlert('','Success!','status Updated successfully!!.','success',true,true,'pageMessages');

                    }else{
                        printErrorMsg(data.error);
                    }
                 }
               });


                }
   

             }); 

               function printErrorMsg (msg) {

               $('.co_login label').css("margin", "10px auto 0");

               $.each( msg, function( key, value ) {
               console.log(key);
              $('.'+key+'_err').text(value);
               });
             }
                });


/**************************update status 7***************************/             


            $(document).ready(function() {

               $("#update_status_7").click(function(e){
                    e.preventDefault();
    
    
                    var BASE_URL = "{{ url('/') }}";
                    var _token = $("input[name='_token']").val();
                    var order_id = $('#s7_order_id').val();
                    var current_status = $('#s7_status').val();
                    var selected_image = $('#s7_selected_image').val();
                    var total_image=$("#s7_total_image").text();

                    var total_image_for_check=$("#s7_total_image_for_check").text();
                    
                    var checking_employee = $('#s7_checking_employee').val();

               
                 if(selected_image !=''){


            	  if(parseInt(selected_image)>parseInt(total_image_for_check)){


                  $('.selected_image_err').text('selected image is not gater than total Image')


            	}

            	else{


                $.ajax({
                      url: BASE_URL+'/update_status_7/'+order_id,
                      type:'POST',
                       data: {_token:_token,order_id:order_id,current_status:current_status,selected_image:selected_image,total_image:total_image,checking_employee:checking_employee,total_image_for_check:total_image_for_check},
                    success: function(data) {
    
                         if($.isEmptyObject(data.error)){

                          $( '.update_employee_data' ).each(function(){

                             this.reset();
                        
                             });  
                                  
                         $('.error-text').text('');

                         $('#status_7_modal').modal('hide');

                        /*   location.reload();*/

                         $('#status_'+order_id).html(data);

                          

   
                        createAlert('','Success!','status Updated successfully!!.','success',true,true,'pageMessages');
                   /*
                       $('.order_view').html("");
                       $('.order_view').html(data);*/
   
                       }else{
                        printErrorMsg(data.error);
                        }
                       }
                     });

                	}

                }else{

              $.ajax({
                      url: BASE_URL+'/update_status_7/'+order_id,
                      type:'POST',
                       data: {_token:_token,order_id:order_id,current_status:current_status,selected_image:selected_image,total_image:total_image,checking_employee:checking_employee,total_image_for_check:total_image_for_check},
                      success: function(data) {
    
                      if($.isEmptyObject(data.error)){

                         $( '.update_employee_data' ).each(function(){

                             this.reset();
                        
                         });  
                                      

                         $('#status_7_modal').modal('hide');

                         $('.error-text').text('');

                         $('#status_7_modal').modal('hide');

                         /*   location.reload();*/

                           $('#status_'+order_id).html(data);




                          createAlert('','Success!','status Updated successfully!!.','success',true,true,'pageMessages');

                    }else{
                        printErrorMsg(data.error);
                    }
                 }
               });


                }
   

             }); 

               function printErrorMsg (msg) {

               $('.co_login label').css("margin", "10px auto 0");

               $.each( msg, function( key, value ) {
               console.log(key);
              $('.'+key+'_err').text(value);
               });
             }
                });



/**************************update status 5***************************/             


            $(document).ready(function() {

               $("#update_status_5").click(function(e){
                    e.preventDefault();
    
    
                    var BASE_URL = "{{ url('/') }}";
                    var _token = $("input[name='_token']").val();
                    var order_id = $('#s5_order_id').val();
                    var current_status = $('#s5_status').val();
                    var total_image=$("#s5_total_image").val();
                    var editing_image=$("#s5_total_image_for_edit").text();     
                    var editing_employee = $('#s5_edit_employee').val();

      

                $.ajax({
                      url: BASE_URL+'/update_status_5/'+order_id,
                      type:'POST',
                       data: {_token:_token,order_id:order_id,current_status:current_status,total_image:total_image,editing_employee:editing_employee,editing_image:editing_image},
                    success: function(data) {
    
                         if($.isEmptyObject(data.error)){

                          $( '.update_employee_data' ).each(function(){

                             this.reset();
                        
                             });  
                                  
                         $('.error-text').text('');

                         $('#status_5_modal').modal('hide');

                         $('#status_'+order_id).html(data);
        
  
                        createAlert('','Success!','status Updated successfully!!.','success',true,true,'pageMessages');
               
                       }else{
                        printErrorMsg(data.error);
                        }
                       }
                     });    
   

                 }); 

               function printErrorMsg (msg) {

               $('.co_login label').css("margin", "10px auto 0");

               $.each( msg, function( key, value ) {
               console.log(key);
              $('.'+key+'_err').text(value);
                 });
               }
             });



 /**************************update Order ***************************/   


        function updateOrder($id) {


 	                  var id=$id;

            	            $.ajax({

                                url:'update_Order_data/'+id,
                                type:'GET',
                                dataType: "json",

                                success: function(response){

                                	if(response.data.data_type==2){

                                		  $('#Anchore_checkbox1').hide();

                                            $("#edit_image1").hide();

                                   	 }




                                   	 if(response.data.client_editor==1){

                                   	 

                                   	 	$('.check0').prop('checked', true);
                                   	 	$('.check1').prop('checked', false);

                                   	 	//$('#Anchore_checkbox1').hide();

                                            $("#edit_image1").hide();

                                   	 }

                                   	 
                                	  $("#update_order_id").val(response.data.order_id); 	  
                                	  $("#update_client_source1").val(response.data.source);                                	
                                	  $("#update_client_name1").val(response.data.customer);
                                	  $("#update_order_name1").val(response.data.order_name);
                                	  $("#update_type_of_data1").val(response.data.data_type);
                                	  $("#update_order_type1").val(response.data.order_type);
                                	  $("#update_number_of_image1").val(response.data.number_of_image);
                                	  $("#update_client_edited1").val(response.data.client_editor);
                                	  $("#update_number_of_edit1").val(response.data.edit_image);    
                                	  
                              
                                      $('#update_addOrderModalside').modal('show');

                                     },
 
                            error: function(response) {

                                },        
          
                           });

                      }        


         function hide_edit_image1(){


               $("#edit_image1").hide();
               $("#client_edited1").val(0);
         		     }

		 function show_edit_image1() {
			   
			    $("#edit_image1").show();
			    $("#client_edited1").val(1);

		  	    }


		          $('.type-data1').change(function(){

		                var type_of_data = $('#update_type_of_data1').val();

		        
		                if(type_of_data==2){

		                  
		                 $('#Anchore_checkbox1').hide();

		                     $("#edit_image1").hide();


		                     }else{


		                         $('#Anchore_checkbox1').show();

		                          $("#edit_image1").show();


		                     }
		         

		             }); 

         $('#order_type1').change(function(){

                var type_of_data = $('#type_of_data').val();

                var order_type =$('#order_type').val();


                if( type_of_data==1 && order_type==3 ){


                      $('#Anchore_checkbox1').hide();

                     $("#edit_image1").hide();



                     }
         

                 });        
        
         $(document).ready(function() {

        $(".update_order").click(function(e){
            e.preventDefault();

         
            var BASE_URL = "{{ url('/') }}";
            var _token = $("input[name='_token']").val();
            var client_source = $('#update_client_source1').val();
            var client_name = $('#update_client_name1').val();
            var order_name = $('#update_order_name1').val();
            var type_of_data = $('#update_type_of_data1').val();
            var number_of_image = $('#update_number_of_image1').val();
            var order_type =$('#update_order_type1').val();
            var client_edited =$('#client_edited1').val();
            var number_of_edit=$('#update_number_of_edit1').val();    
             var update_order_id=$('#update_order_id').val(); 


          


          
            $.ajax({
                url: BASE_URL+'/store_update_Order_data/'+update_order_id,
                type:'POST',
                data: {_token:_token,client_source:client_source,client_name:client_name,order_name:order_name,number_of_image:number_of_image,order_type:order_type,client_edited:client_edited,number_of_edit:number_of_edit,type_of_data:type_of_data},
                success: function(data) {
    
                    if($.isEmptyObject(data.error)){

                        $( '.upadte_orederform' ).each(function(){

                             this.reset();
                        
                        });  
                                  
                         $('.error-text').text('');

                         $('#update_addOrderModalside').modal('hide');

   
                     createAlert('','Success!','Order data updated successfully!!.','success',true,true,'pageMessages');

                    $('.order_view').html("");
                    $('.order_view').html(data);

                    }else{
                        printErrorMsg(data.error);
                    }
                 }
               });
             }); 

               function printErrorMsg (msg) {

               $('.co_login label').css("margin", "10px auto 0");

               $.each( msg, function( key, value ) {
               console.log(key);
              $('.'+key+'_error').text(value);
            });
         }
         });

         function deleteOrder($id){


       	               var id=$id;

            	            $.ajax({

                                url:'delete_Order_data/'+id,
                                type:'GET',
                                dataType: "json",

                                success: function(data){

                                	
                                 /*  <td class="dot-status" id="status_{{$o->id}}"><span class="status_btn"style="background-color:{{$sl->colour}}">{{$o->current_status}}</span>*/


                                $('.status_btn'+id).css("background-color", "#FF6F57");

                                $('.status_btn'+id).text("Order Cancle");

                                 createAlert('','Success!','Order Deleted successfully!!.','success',true,true,'pageMessages');

             
                       
                              },
 
                            error: function(response) {

                                },        
          
                           });


                      }



  /************************** filter using source***************************/  
  


    $('#select_source').change(function(){


    	 var client_source = $('#update_client_source1').val();



  
});
                      





   













                
          



     







	</script>
	<style type="text/css">
		
		/*body {
	 margin: 2rem 0rem;
}
 body label {
	 color: #6c757d;
	 display: block;
	 margin-top: 2rem;
}*/
 
	</style>
</body>
</html>