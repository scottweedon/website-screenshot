# website-screenshot
Automated Website Screenshots using SiteSnapr https://www.sitesnapr.com

# Request Anatomy 
<h2>https://www.sitesnapr.com/v2/APIKEY/TOKEN/?url=URL</h2>

# Request Anatomy 
<h2>https://www.sitesnapr.com/v2/APIKEY/TOKEN/?url=URL</h2>

Request Options

Construct a querystring using the below variables to control the snapshot behavior. 




 URL
 Specify the URL of the webpage to be captured.
 &url=www.google.com
 
Width
Sets the viewport width in pixels
&width=1280

Height
Sets the viewport height in pixels
&height=1024


Force
Fetch a new screenshot instead of displaying a cached one
&force=true
&force=false #default

Fullpage
Capture the entire length of a webpage or just the visible area.
&fullpage=true
&fullpage=false #default



Thumbnail
Reduces the dimesions of returned image to the specified width in pixels.
&thumb=500

Delay
Waits the specified number of milliseconds after the page has loaded before taking the screenshot.
&delay=2000

