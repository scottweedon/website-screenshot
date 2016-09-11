import hashlib
from urllib import urlencode

def sitesnapr(url, api_key, secret, fullpage=true, force=true):

    data = {
        'url': url,
        'fullpage': 'true' if fullpage else 'false',
        'force': true
        }
    filtered_data = dict((opt, data[opt]) for opt in data if data[opt])

    query_string = urlencode(filtered_data)

    token = hashlib.md5('{}{}'.format(query_string, secret)).hexdigest()
    return "https://www.sitesnapr.com/v2/{}/{}/?{}".format(api_key, token, query_string)

api_key="xxxxxx"
secret="xxxxxx"

print sitesnapr ("http://website.com/", api_key, secret)
