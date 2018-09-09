<?php
// google map key
function my_acf_google_map_api( $api ){
  $api['key'] = 'AIzaSyBWr1zthfjcR-5T4a8itODuIzrODlblgPw';
  return $api;
}
add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');
?>
