<!--

BigBlueButton - http://www.bigbluebutton.org

Copyright (c) 2008-2009 by respective authors (see below). All rights reserved.

BigBlueButton is free software; you can redistribute it and/or modify it under the 
terms of the GNU Lesser General Public License as published by the Free Software 
Foundation; either version 3 of the License, or (at your option) any later 
version. 

BigBlueButton is distributed in the hope that it will be useful, but WITHOUT ANY 
WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A 
PARTICULAR PURPOSE. See the GNU Lesser General Public License for more details.

You should have received a copy of the GNU Lesser General Public License along 
with BigBlueButton; if not, If not, see <http://www.gnu.org/licenses/>.

Author: Fred Dixon <ffdixon@bigbluebutton.org>

-->

<%@ page language="java" contentType="text/html; charset=UTF-8"
	pageEncoding="UTF-8"%>
<% 
	request.setCharacterEncoding("UTF-8"); 
	response.setCharacterEncoding("UTF-8"); 
%>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Video Conference</title>
</head>
<body style="background-image: url(bckgrnd.jpg)">

<%@ include file="bbb_api.jsp"%>

<% 

//
// We're going to define some sample courses (meetings) below.  This API exampe shows how you can create a login page for a course. 
// The password below are not available to users as they are compiled on the server.
//

HashMap<String, HashMap> allMeetings = new HashMap<String, HashMap>();
HashMap<String, String> meeting;

// String welcome = "<br>Welcome to %%CONFNAME%%!<br><br>For help see our <a href=\"event:http://www.bigbluebutton.org/content/videos\"><u>tutorial videos</u></a>.<br><br>To join the voice bridge for this meeting:<br>  (1) click the headset icon in the upper-left, or<br>  (2) dial xxx-xxx-xxxx (toll free:1-xxx-xxx-xxxx) and enter conference ID: %%CONFNUM%%.<br><br>";

String welcome = "<br>Welcome to <b>%%CONFNAME%%</b>!<br><br>To understand how BigBlueButton works see our <a href=\"event:http://www.bigbluebutton.org/content/videos\"><u>tutorial videos</u></a>.<br><br>To join the audio bridge click the headset icon (upper-left hand corner). <b>You can mute yourself in the Listeners window.</b>";

//
// INFORMATICS
//

meeting = new HashMap<String, String>();
allMeetings.put( "Jaringan Komputer", meeting );	// The title that will appear in the drop-down menu
	meeting.put("welcomeMsg", 	welcome);			// The welcome mesage
	meeting.put("moderatorPW", 	"prof123");			// The password for moderator
	meeting.put("viewerPW", 	"student123");			// The password for viewer
	meeting.put("voiceBridge", 	"72013");			// The extension number for the voice bridge (use if connected to phone system)
	meeting.put("logoutURL", 	"/demo/demo3.jsp");  // The logout URL (use if you want to return to your pages)

meeting = null;

meeting = new HashMap<String, String>();
allMeetings.put( "Teknologi Antar Jaringan", meeting );	// The title that will appear in the drop-down menu
	meeting.put("welcomeMsg", 	welcome);			// The welcome mesage
	meeting.put("moderatorPW", 	"prof123");			// The password for moderator
	meeting.put("viewerPW", 	"student123");			// The password for viewer
	meeting.put("voiceBridge", 	"72013");			// The extension number for the voice bridge (use if connected to phone system)
	meeting.put("logoutURL", 	"/demo/demo3.jsp");  // The logout URL (use if you want to return to your pages)

meeting = null;

Iterator<String> meetingIterator = new TreeSet<String>(allMeetings.keySet()).iterator();

if (request.getParameterMap().isEmpty()) {
		//
		// Assume we want to join a course
		//
	%> 
<div align="center">
<a href="index.php"> 
   <img src="logota.png" width="400" height="80" alt="E-Learning System ITS" />
</a>
</div>
<h2 align="center">Video Conference Login</h2>
<div style="width:35%; background-color:white; margin:auto; border-radius: 10px; border: 1px solid; " align="left">
<FORM NAME="form1" METHOD="GET">
<table cellpadding="5" cellspacing="5" style="width: 400px; ">
	<tbody>
		<tr>
			<td>
				&nbsp;</td>
			<td style="text-align: right; ">
				Username:</td>
			<td style="width: 5px; ">
				&nbsp;</td>
			<td style="text-align: left ">
				<input type="text" autofocus required name="username" /></td>
		</tr>
		
		<tr>
			<td>
				&nbsp;</td>
			<td style="text-align: right; ">
				Password:</td>
			<td>
				&nbsp;</td>
			<td>
				<input type="password" required name="password" /></td>
		</tr>

		<tr>
			<td>
				&nbsp;</td>
			<td style="text-align: right; ">
				Kelas:</td>
			<td>
				&nbsp;
			</td>
			<td style="text-align: left ">
			<select name="meetingID">
			<%
				String key;
				while (meetingIterator.hasNext()) {
					key = meetingIterator.next(); 
					out.println("<option value=\"" + key + "\">" + key + "</option>");
				}
			%>
			</select>
				
			</td>
		</tr>

		<tr>
			<td>
				&nbsp;</td>
			<td>
				&nbsp;</td>
			<td>
				&nbsp;</td>
			<td>
				<input type="submit" value="Masuk" /></td>
		</tr>	
	</tbody>
</table>
<INPUT TYPE=hidden NAME=action VALUE="create">
</FORM>
</div>

<%
	} else if (request.getParameter("action").equals("create")) {
		//
		// Got an action=create
		//

		String username = request.getParameter("username");
		String meetingID = request.getParameter("meetingID");
		String password = request.getParameter("password");
		
		meeting = allMeetings.get( meetingID );
		
		String welcomeMsg = meeting.get( "welcomeMsg" );
		String logoutURL = meeting.get( "logoutURL" );
		Integer voiceBridge = Integer.parseInt( meeting.get( "voiceBridge" ).trim() );

		String viewerPW = meeting.get( "viewerPW" );
		String moderatorPW = meeting.get( "moderatorPW" );
		
		//
		// Check if we have a valid password
		//
		if ( ! password.equals(viewerPW) && ! password.equals(moderatorPW) ) {
%>

Invalid Password, please <a href="javascript:history.go(-1)">try again</a>.

<%
			return;
		}
		
		//
		// Looks good, let's create the meeting
		//
		String meeting_ID = createMeeting( meetingID, welcomeMsg, moderatorPW, viewerPW, voiceBridge, logoutURL );
		
		//
		// Check if we have an error.
		//
		if( meeting_ID.startsWith("Error ")) {
%>

Error: createMeeting() failed
<p /><%=meeting_ID%> 


<%
			return;
		}
		
		//
		// We've got a valid meeting_ID and passoword -- let's join!
		//
		
		String joinURL = getJoinMeetingURL(username, meeting_ID, password);			
%>

<script language="javascript" type="text/javascript">
  window.location.href="<%=joinURL%>";
</script>

<%
	} 
%>
 


</body>
</html>


