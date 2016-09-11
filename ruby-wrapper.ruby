require 'cgi' unless defined?(CGI)
require 'digest' unless defined?(Digest)
 
class sitesnapr
  attr_reader :apikey, :secret, :query_string, :token
  def initialize options
 
    @apikey = 'xxxxxxx'
    @secret = 'xxxxxxx'
 
    @query_string = options.sort.map { |k,v| "#{CGI::escape(k.to_s)}=#{CGI::escape(v.to_s)}" }.join("&")
    @token = Digest::MD5.hexdigest(query_string + secret)
  end
 
  def url
    "https://www.sitesnapr.com/v2/#{apikey}/#{token}/?#{query_string}"
  end
 
end
 
options = {
  url: "http://www.website.com",
  fullpage: true
}
 
puts sitesnapr.new(options).url
