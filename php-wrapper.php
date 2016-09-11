function sitesnapr_v2($url, $args) {

    $APIKEY = "xxxxxxx";
    $SECRET = "xxxxxxx";
    
    # urlencode request target
    $options['url'] = urlencode($url);
    
    $options += $args;
    
    # create the query string based on the options
    foreach($options as $key => $value) { $_parts[] = "$key=$value"; }
    
    # create a token from the ENTIRE query string
    $query_string = implode("&", $_parts);
    $TOKEN = md5($query_string . $SECRET);
    
    return "https://www.sitesnapr.com/v2/$APIKEY/$TOKEN/?$query_string";
    
} 

# usage
$options['force']       = 'false';     # [false,true] Default: false
$options['fullpage']    = 'false';     # [true,false] Default: false
$options['thumb']       = '500';      # [0%-100%] reduce or limit the size of the captured image by upto 100%
$options['delay']       = '2000';      # [ms] wait an extra ms milliseconds after the page has finished loading before capturing the image 
$options['width']       = '1280';
$options['height']      = '1024';
						
$src = sitesnapr_v2("website.com", $options); 
