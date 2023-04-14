<!DOCTYPE html>
<html>
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
      <!-- jQuery -->
      <title>Ejobs4pros | Admin Dashboard</title>
      <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.2/css/font-awesome.min.css'>
      <link href="{{url('/asset/chat/css/style.css')}}" rel="stylesheet" id="bootstrap-css">

      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
		  <!-- Font Awesome -->
		  <link rel="stylesheet" href="{{url('/asset/customer/plugins/fontawesome-free/css/all.min.css')}}">
		  <!-- Ionicons -->
		  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
		  <!-- Tempusdominus Bootstrap 4 -->
		  <link rel="stylesheet" href="{{url('/asset/customer/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
		  <!-- iCheck -->
		  <link rel="stylesheet" href="{{url('/asset/customer/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
		  <!-- JQVMap -->
		  <link rel="stylesheet" href="{{url('/asset/customer/plugins/jqvmap/jqvmap.min.css')}}">
		  <!-- Theme style -->
		  <link rel="stylesheet" href="{{url('/asset/customer/dist/css/adminlte.min.css')}}">
		  <!-- overlayScrollbars -->
		  <link rel="stylesheet" href="{{url('/asset/customer/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
		  <!-- Daterange picker -->
		  <link rel="stylesheet" href="{{url('/asset/customer/plugins/daterangepicker/daterangepicker.css')}}">
		  <!-- summernote -->
		  <link rel="stylesheet" href="{{url('/asset/customer/plugins/summernote/summernote-bs4.min.css')}}">
		  <style type="text/css">
		    .alert-info{
		      text-align: center;
		    }
		  </style>
      <style>
         .modal-dialog {
         width: 400px;
         margin: 30px auto;	
         }
      </style>
   </head>
   <body class="">
      <div class="container" style="min-height:500px;">
         <div class=''></div>
         <div class="container">
            <div class="chat">
               <div id="frame">
                  <div id="sidepanel">
                     <div id="profile">
                        <?php
                           echo '<div class="wrap">';
                           $currentSession = '';
                           foreach ($loggedUser as $user) {
                           
                           	$image = '';
                           	$image = url('/asset/chat/userpics').'/'.$user['avatar'];
                           	
                           	$currentSession = $user['current_session'];
                           	echo '<img id="profile-img" src="'.$image.'" class="online" alt="" />';
                           	echo  '<p>'.$user['username'].'</p>';
                           		echo '<i class="fa fa-chevron-down expand-button" aria-hidden="true"></i>';
                           		echo '<div id="status-options">';
                           		echo '<ul>';
                           			echo '<li id="status-online" class="active"><span class="status-circle"></span> <p>Online</p></li>';
                           			echo '<li id="status-away"><span class="status-circle"></span> <p>Away</p></li>';
                           			echo '<li id="status-busy"><span class="status-circle"></span> <p>Busy</p></li>';
                           			echo '<li id="status-offline"><span class="status-circle"></span> <p>Offline</p></li>';
                           		echo '</ul>';
                           		echo '</div>';
                           		echo '<div id="expanded">';			
                           		echo '<a href="logout.php">Logout</a>';
                           		echo '</div>';
                           }
                           echo '</div>';
                           ?>
                     </div>
                     <div id="search">
                        <label for=""><i class="fa fa-search" aria-hidden="true"></i></label>
                        <input type="text" placeholder="Search contacts..." />					
                     </div>
                     <div id="contacts">	
                        <?php
                           echo '<ul>';					
                           foreach ($chatUsers as $user) {
                           	//echo $user->id; die();
                           	$image = '';
                           	$image = url('/asset/chat/userpics').'/'.$user['avatar'];	
                           
                           	$status = 'offline';						
                           	if($user['online']) {
                           		$status = 'online';
                           	}
                           	$activeUser = '';
                           	if($user->id == $currentSession) {
                           		$activeUser = "active";
                           	}
                           	echo '<li id="'.$user->id.'" class="contact '.$activeUser.'" data-touserid="'.$user->id.'" data-tousername="'.$user['username'].'">';
                           	echo '<div class="wrap">';
                           	echo '<span id="status_'.$user->id.'" class="contact-status '.$status.'"></span>';
                           	echo '<img src="'.$image.'" alt="" />';
                           	echo '<div class="meta">';
                           	echo '<p class="name">'.$user['username'].'<span id="unread_'.$user['userid'].'" class="unread">'.\App\Http\Controllers\ChatController::getUnreadMessageCount($user['userid'], auth()->user()->id).'</span></p>';
                           	echo '<p class="preview"><span id="isTyping_'.$user->id.'" class="isTyping"></span></p>';
                           	echo '</div>';
                           	echo '</div>';
                           	echo '</li>'; 
                           }
                           echo '</ul>';
                           ?>
                     </div>
                     <div id="bottom-bar">	
                        <button id="addcontact"><i class="fa fa-user-plus fa-fw" aria-hidden="true"></i> <span>Add contact</span></button>
                        <button id="settings"><i class="fa fa-cog fa-fw" aria-hidden="true"></i> <span>Settings</span></button>					
                     </div>
                  </div>
                  <div class="content" id="content">
                     <div class="contact-profile" id="userSection">	
                        <?php
                           $userDetails = \App\Http\Controllers\ChatController::getUserDetails($currentSession);
                           foreach ($userDetails as $user) {	
                           	$image = '';
                           	$image = url('/asset/chat/userpics').'/'.$user['avatar'];									
                           	echo '<img src="'.$image.'" alt="" />';
                           		echo '<p>'.$user['username'].'</p>';
                           		echo '<div class="social-media">';
                           			echo '<i class="fa fa-facebook" aria-hidden="true"></i>';
                           			echo '<i class="fa fa-twitter" aria-hidden="true"></i>';
                           			 echo '<i class="fa fa-instagram" aria-hidden="true"></i>';
                           		echo '</div>';
                           }	
                           ?>						
                     </div>
                     <div class="messages" id="conversation">		
                        <?php
                           echo \App\Http\Controllers\ChatController::getUserChat(auth()->user()->id, $currentSession);						
                           ?>
                     </div>
                     <div class="message-input" id="replySection">
                        <div class="message-input" id="replyContainer">
                           <div class="wrap">
                              <input type="text" class="chatMessage" id="chatMessage<?php echo $currentSession; ?>" placeholder="Write your message..." />
                              <button class="submit chatButton" id="chatButton<?php echo $currentSession; ?>"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>	
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <input type="hidden" name="main_url" id="main_url" value="{{url('/')}}">
      <input type="hidden" name="token" id="token" value="{{ csrf_token() }}">
   </body>
   <script src="{{url('/asset/chat/js/chat.js')}}?v={{time()}}"></script>  
</html>