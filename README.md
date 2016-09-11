# website-screenshot
Automated Website Screenshots using SiteSnapr https://www.sitesnapr.com

Sitesnapr is a real-time webpage screenshot service. We grab screenshots, store them, serve them, and make sure they stay up to date. Simply give us a target and we will return an image. 

# Request Anatomy 
<h2>https://www.sitesnapr.com/v2/APIKEY/TOKEN/?url=URL</h2>


<strong>Superfast Global Network</strong>
Speed matters. We send images faster and more reliably to customers by using the servers that are closest to each user. This dramatically increases speed and availability, resulting in significant user experience improvements.



# Request Options
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

