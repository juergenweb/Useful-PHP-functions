
// Flatten array: Convert a multidimensional array into a onedimensional array
 


/*
Flatten array
Convert a multidimensional array into a singledimensional array
*/

function flatten(array $array = []){
  if($array){
    $result = [];
    foreach($array as $key=>$arr){
      if(is_array($arr)){
        $result = array_merge($result,flatten($arr));
      } else {
        $result[$key] = $arr;
      }
    }
    return $result;
  }
}
