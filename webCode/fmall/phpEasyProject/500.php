<?php
/**
 * phpEasyProjects
 * - an easy solution for activity management and todo lists based on projects.
 *
 * Web: http://www.phpEasyProject.net
 *
 * Copyright (C) 2005  Arthur Harder
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
 *
 */

define('ROOT_PATH','');

ob_start();
require(ROOT_PATH.'includes/init.php');

$ContentTPL = 'error.tpl';
$content =<<<END

<div style="width:100%">
<div style="margin:auto;width:800px;"><h1>HTTP Error 500 - Internal server error</h1>

<p><strong>Introduction</strong></p>
<p>The Web Server encountered an unexpected condition that prevented it from
fulfilling the request by the client (e.g. your Web Browser)
accessing the requested URL.</p>

<p>This is a 'catch-all' error generated by the Web Server.
Basically something has gone wrong, but the server can not be more specific
about the error condition in its response to the client.
In addition to the 500 error notified back to the client, the Web Server should
generate some kind of internal error log which gives more details of what went
wrong. It is up to the operators of the Web Server site to locate and analyse
these logs.</p>

<p><strong>500 errors in the HTTP cycle</strong></p>

<p>Any client (e.g. your Web Browser) goes through the following cycle when it
communicates with the Web Server:</p>
<ul>
    <li>Obtain an IP address from the IP name of your site (your site URL
        without the leading 'http://'). This lookup (conversion of IP name to
        IP address) is provided by domain name servers (DNSs).</li>
    <li>Open an IP socket connection to that IP address.</li>
    <li>Write an HTTP data stream through that socket.</li>
    <li>Receive an HTTP data stream back from your Web Server in response.
        This data stream contains status codes whose values are determined by
        the HTTP protocol. Parse this data stream for status codes and other
        useful information.</li>
</ul>

<p>This error occurs in the final step above when the client receives an
HTTP status code that it recognises as '500'.</p>

<p><strong>Resolving 500 errors - general</strong></p>

<p>This error can only be resolved by fixes to the Web Server software.
It is not a client-side problem. It is up to the operators of the Web Server
site to locate and analyse the logs which should give further information about
the error.</p></div></div>

END;
$template = new template();
$template->assign('SiteTitle','phpEasyProject - 500 Internal Server Error');
$template->assign('ContentTPL',$ContentTPL);
$template->assign('content',$content);

$template->display('index.tpl');

?>