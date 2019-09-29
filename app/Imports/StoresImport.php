<?php

namespace App\Imports;

use App\Store;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Concerns\ToModel;

class StoresImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        if($row[6]=='publish'){
            $status=1;
        }else {
            $status=0;
        }
        return new Store([
            'id'=>(int) $row[0],
            'name'=>$row[1],
            'heading_1'=>$row[2],
            'url'=>$row[5],
            'slug'=>$row[7],
            'image'=>'stores/September2019/'.$this->downaloadImage($row[3]),
            'status'=> $status,
            'total_coupon_used_times'=>(int) $row[4]
        ]);
    }
    public function downaloadImage($url){
        if($url==''){
            return '';
        }else {
            //$url = "http://www.google.co.in/intl/en_com/images/srpr/logo1w.png";
            $urls=explode("|", $url);
            $arrContextOptions=array(
                "ssl"=>array(
                    "verify_peer"=>false,
                    "verify_peer_name"=>false,
                ),
            );
            if($urls[0]){
                $contents = file_get_contents($urls[0],false, stream_context_create($arrContextOptions));
                $name = substr($urls[0], strrpos($urls[0], '/') + 1);
            }else{
                $contents = file_get_contents($url,false, stream_context_create($arrContextOptions));
                $name = substr($url, strrpos($url, '/') + 1);
            }


            Storage::disk('public_folder')->put($name, $contents);
            return $name;
        }

    }
}
