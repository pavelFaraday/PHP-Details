 <?php 
// Get Visitor IP
function get_ip() {
    if(isset($_SERVER['HTTP_CLIENT_IP'])) {
        return $_SERVER['HTTP_CLIENT_IP'];
    }
    elseif(isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        return $_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    else {
        return (isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : '');
    }
}

$ip=get_ip();
// use API to get VISITOR DATA
$query=@unserialize(file_get_contents('http://ip-api.com/php/'.$ip));
if($query && $query['status'] == 'success') {
    echo "ISP:".$query['isp'].". ";
    echo "COUNTRY:".$query['country'].". ";   
    echo "COUNTRY CODE:".$query['countryCode'].". ";
    echo "REGION NAME:".$query['regionName'].". ";
    echo "CITY:".$query['city'].". ";
    echo "ZIP:".$query['zip'].". ";
    echo "LATITUDE:".$query['lat'].". ";
    echo "LONGITUDE:".$query['lon'].". ";
    echo "TIMEZONE:".$query['timezone'].". ";
    echo "ORG:".$query['org'].". ";
    echo "AS:".$query['as'].". ";
}
else {echo 'Something is WRONG !';}

?>