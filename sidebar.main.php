<?php
echo "<div class=\"main-nav-wrapper\">\n";
echo "	<nav id=\"main-nav\" class=\"main-nav js-cloak\">\n";
echo "		<ul id=\"menu\">\n";
echo "			<li class=\"nav-dashboards ";
if ($uri_check == 'WARINDEX.PHP' || $uri_check == 'WAR') {
	echo "active";
}
echo "\"><a href=\"index.php\"> <span\n";
echo "					aria-hidden=\"true\" class=\"icon icon_house_alt\"></span> <span\n";
echo "					class=\"nav-label\">Dashboards</span>\n";
echo "			</a></li>\n";

if (rights_data ( $rights, 'Project', 'Write All Project' )) {
	echo "					<li class=\"active \"><a href=\"createProject.php\"> <span class=\"nav-label\">Create\n";
	echo "								Project Wizard</span>\n";
	echo "					</a></li>\n";
}
if (rights_data ( $rights, 'Project' )) {
	echo "			<li class='";
	if ($uri_check == 'WARCREATEPROJECT.PHP' || $uri_check == 'WARPROJECTLIST.PHP') {
		echo "active";
	}
	echo "'><a href=\"projects.php\"> <span aria-hidden=\"true\"\n";
	echo "					class=\"icon icon_toolbox_alt\"></span> <span class=\"nav-label\">Projects</span><span\n";
	echo "					class=\"fa arrow\"></span> ";
	echo "			</a>\n";
	echo "				<ul class=\"sub-menu\">\n";
	
	if (rights_data ( $rights, 'Project', 'View All Project' ) || rights_data ( $rights, 'Project', 'View Assigned Project' )) {
		echo "					<li class=\" \"><a href=\"projectList.php\"> <span class=\"nav-label\">List\n";
		echo "								Projects</span>\n";
		echo "					</a></li>\n";
	}
	
	if (rights_data ( $rights, 'Inventory', 'Add New Inventry' )) {
		echo "					<li class=\" \"><a href=\"createProject2.php\"> <span class=\"nav-label\">Add\n";
		echo "								Projects Inventry</span>\n";
		echo "					</a></li>\n";
	}
	
	if (rights_data ( $rights, 'Reports', 'Reports' )) {
		echo "					<li class=\" \"><a href=\"Reports.php\"> <span class=\"nav-label\">Reports</span>\n";
		echo "					</a></li>\n";
	}
	echo "				</ul></li>\n";
}

if (rights_data ( $rights, 'User' )) {
	echo "			<li class=\" \"><a href=\"projects.php\"> <span aria-hidden=\"true\"\n";
	echo "					class=\"icon icon_toolbox_alt\"></span> <span class=\"nav-label\">User\n";
	echo "						Manager</span><span class=\"fa arrow\"></span></a>\n";
	echo "				<ul class=\"sub-menu\">\n";
	
	if (rights_data ( $rights, 'User' )) {
		echo "					<li class=\" \"><a href=\"UserList.php\"> <span class=\"nav-label\">User Manager\n";
		echo "								</span>\n";
		echo "					</a></li>\n";
	}
	
	if (rights_data ( $rights, 'User' )) {
		echo "					<li class=\" \"><a href=\"GroupList.php\"> <span class=\"nav-label\">Group\n";
		echo "								Manager</span>\n";
		echo "					</a></li>\n";
	}
	
	if (rights_data ( $rights, 'Reports' )) {
		echo "					<li class=\" \"><a href=\"Reports.php\"> <span class=\"nav-label\">Reports</span>\n";
		echo "					</a></li>\n";
	}
	echo "				</ul></li>\n";
}

if (rights_data ( $rights, 'user' )) {
	echo "			<li class=\" \"><a href=\"tickets.php\"> <span aria-hidden=\"true\"\n";
	echo "					class=\"icon icon_box-checked\"></span> <span class=\"nav-label\">My\n";
	echo "						Profile</span>\n";
	echo "					<span class=\"fa arrow\"></span>\n";
	echo "			</a>\n";
	
	echo "				<ul class=\"sub-menu\">\n";
	// echo " <li class=\" \"><a href=\"UserMessages.php\"> <span class=\"nav-label\">Messages</span>\n";
	// echo " </a></li>\n";
	// echo " <li class=\" \"><a href=\"ActivityLogs.php\"> <span class=\"nav-label\">My\n";
	// echo " Activity Logs</span>\n";
	// echo " </a></li>\n";
	
	if (rights_data ( $rights, 'Buglist', 'View Buglist' )) {
		echo "					<li class=\" \"><a href=\"BugList.php?u=" . encryptor ( 'encrypt', $_SESSION ['userid'] ) . "\"> <span class=\"nav-label\">My Bugs</span>\n";
		echo "					</a></li>\n";
		
		// echo " <li class=\" \"><a href=\"Drive.php\"> <span class=\"nav-label\">My\n";
		// echo " Drive</span>\n";
		// echo " </a></li>\n";
	}
	
	if (rights_data ( $rights, 'Project', 'View Assigned Project' )) {
		echo "					<li class=\" \"><a href=\"projectList.php\"> <span class=\"nav-label\">My\n";
		echo "								Projects</span>\n";
		echo "					</a></li>\n";
	}
	
	if (rights_data ( $rights, 'Project', 'Perform Testcase' )) {
		echo "					<li class=\" \"><a href=\"TestCaseList.php\"> <span class=\"nav-label\">My Test\n";
		echo "								Cases</span>\n";
		echo "					</a></li>\n";
	}
	
	if (rights_data ( $rights, 'Reports' )) {
		echo "					<li class=\" \"><a href=\"Reports.php\"> <span class=\"nav-label\">Reports</span>\n";
		echo "					</a></li>\n";
	}
	echo "				</ul></li>\n";
}

if (rights_data ( $rights, 'TestCase' )) {
	echo "			<li class=\" \"><a href=\"TestCaseList.php\"> <span aria-hidden=\"true\"\n";
	echo "					class=\"icon icon_documents_alt\"></span> <span class=\"nav-label\">Test\n";
	echo "						Case Mgr</span>\n";
	echo "					<span class=\"fa arrow\"></span>\n";
	echo "			</a>\n";
	if (rights_data ( $rights, 'TestCase', 'Create Testcase' )) {
		echo "				<ul class=\"sub-menu\">\n";
		echo "					<li class=\" \"><a href=\"TestCaseList.php\"> <span class=\"nav-label\">";
		echo "								Add New Test Case</span>\n";
		echo "					</a></li>\n";
	}
	if (rights_data ( $rights, 'Reports' )) {
		echo "					<li class=\" \"><a href=\"Reports.php\"> <span class=\"nav-label\">Reports</span>\n";
		echo "					</a></li>\n";
	}
	echo "\n";
	echo "				</ul></li>\n";
}

if (rights_data ( $rights, 'Inventory' )) {
	echo "			<li class=\" \"><a href=Item Barcode\"invoices.php\"> <span aria-hidden=\"true\"\n";
	echo "					class=\"icon icon_documents_alt\"></span> <span class=\"nav-label\">Inventory\n";
	echo "						Manager</span>\n";
	echo "					<span class=\"fa arrow\"></span>\n";
	echo "			</a>\n";
	
	echo "				<ul class=\"sub-menu\">\n";
	if (rights_data ( $rights, 'Inventory', 'Add New Inventry' )) {
		echo "					<li class=\" \"><a href=\"projectInventryList.php\"> <span class=\"nav-label\">\n";
		echo "								Inventory</span>\n";
		echo "					</a></li>\n";
	}
	if (rights_data ( $rights, 'Inventory', 'Issue Inventry' )) {
		echo "					<li class=\" \"><a href=\"inventryManager.php\"> <span class=\"nav-label\">Manage\n";
		echo "								Inventory</span>\n";
		echo "					</a></li>\n";
	}
	echo "					<li class=\" \"><a href=\"Reports.php\"> <span class=\"nav-label\">Reports</span>\n";
	echo "					</a></li>\n";
	
	echo "\n";
	echo "				</ul></li>\n";
}

if (rights_data ( $rights,'Advert','AdvertMgr'  )) {
echo "			<li class=\" \"><a href=Item Barcode\"> <span aria-hidden=\"true\"\n";
echo "					class=\"icon icon_documents_alt\"></span> <span class=\"nav-label\">ADvert\n";
echo "						Manager</span>\n";
echo "					<span class=\"fa arrow\"></span>\n";
echo "			</a>\n";
echo "				<ul class=\"sub-menu\">\n";
echo "					<li class=\" \"><a href=\"advert_dashboard.php\"> <span class=\"nav-label\">\n";
echo "								Dashboard</span>\n";
echo "					</a></li>\n";
echo "					<li class=\" \"><a href=\"InstallApk.php\"> <span class=\"nav-label\">\n";
echo "								Install Apps</span>\n";
echo "					</a></li>\n";

echo "					<li class=\" \"><a href=\"notification.php\"> <span class=\"nav-label\">\n";
echo "								Send Notification</span>\n";
echo "					</a></li>\n";
echo "					<li class=\" \"><a href=\"ForceInstall.php\"> <span class=\"nav-label\">\n";
echo "								Force Install</span>\n";
echo "					</a></li>\n";
echo "					<li class=\" \"><a href=\"CmdCenter.php\"> <span class=\"nav-label\">\n";
echo "								Send Cmds</span>\n";
echo "					</a></li>\n";
echo "					<li class=\" \"><a href=\"Reports.php\"> <span class=\"nav-label\">Reports</span>\n";
echo "					</a></li>\n";
}

echo "\n";
echo "				</ul></li>\n";

// echo " <li class=\" \"><a href=\"todoList.php\"> <span aria-hidden=\"true\"\n";
// echo " class=\"icon icon_calendar\"></span> <span class=\"nav-label\">To Do List</span>\n";
// echo " </a></li>\n";
// echo "\n";
// echo " <li class=\" \"><a href=\"#\"> <span aria-hidden=\"true\"\n";
// echo " class=\"icon icon_calendar\"></span> <span class=\"nav-label\">Calendars</span>\n";
// echo " </a></li>\n";
// echo " <li class=\" \"><a href=\"#\"> <span aria-hidden=\"true\"\n";
// echo " class=\"icon icon_calendar\"></span> <span class=\"nav-label\">Notifications</span>\n";
// echo " </a></li>\n";
echo "			<li role=\"presentation\" class=\"divider \"></li>\n";
// echo " <li class=\" \"><a href=\"help.php\"> <span aria-hidden=\"true\"\n";
// echo " class=\"icon icon_lifesaver\"></span> <span class=\"nav-label\">Help</span>\n";
// echo " <span class=\"label label-new\">NEW</span>\n";
// echo " </a></li>\n";
echo "		</ul>\n";
echo "	</nav>\n";
echo "</div>";
?>