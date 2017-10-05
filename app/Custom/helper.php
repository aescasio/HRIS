<?php
// My common functions

function getMiddleName($data)
{
	$array = explode(' ', $data);
    $return = '';
	$numItems = count($array);
	$i = 0;
	foreach($array as $key=>$val){
		if(++$i === $numItems) {
			$return .= mb_substr($val,0,1) . ".";
		}else{
			$return .= mb_substr($val,0,1) . ". ";
		}
	}
    return $return;

}

    function getAutoIncID($tblName = null)
    {
        $id = \DB::connection('mysql')
            ->table('INFORMATION_SCHEMA.TABLES')
            ->select('AUTO_INCREMENT')
            ->where('TABLE_SCHEMA', 'bcorp')
            ->where('TABLE_NAME',$tblName)
            ->pluck('AUTO_INCREMENT');
        return $id;
    }

    function arrayRemoveNull($item)
    {
        if (!is_array($item)) {
            return $item;
        }

        return collect($item)
            ->reject(function ($item) {
                return is_null($item);
            })
            ->flatMap(function ($item, $key) {

                return is_numeric($key)
                    ? [array_remove_null($item)]
                    : [$key => array_remove_null($item)];
            })
            ->toArray();
    }

