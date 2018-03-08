<?php 

require 'vendor/autoload.php';

class Depp{
   private $access_key;
   private $secret_key;
   private $associate_tag;

   function __construct($req=array()){
      $this->access_key = $req['access_key'];//'AKIAIJ47TIKONV2SYLOA';
      $this->secret_key = $req['secret_key'];//'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';
      $this->associate_tag = $req['associate_tag'];//'openshopi-21';
      // $timestamp = date('c');     
   }

   function doQuery($query){
         
     /*    $access_key = 'AKIAIJ47TIKONV2SYLOA';
         $secret_key = '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';
         $associate_tag = 'openshopi-21';*/
         $query['AssociateTag']=$this->associate_tag;
         $query['AWSAccessKeyId']=$this->access_key;
         $query['Timestamp']=date('c');
           /* 'AssociateTag' => $this->associate_tag,
                 'AWSAccessKeyId' => $this->access_key,
                 'Timestamp' => date('c')*/

         $client = new GuzzleHttp\Client();
         ksort($query);
         $sign = http_build_query($query);
         $request_method = 'GET';
         $base_url = 'webservices.amazon.in';
         $endpoint = '/onca/xml';
         $string_to_sign = "{$request_method}\n{$base_url}\n{$endpoint}\n{$sign}";
         $signature = base64_encode( hash_hmac("sha256", $string_to_sign, $this->secret_key, true));

         $query['Signature'] = $signature;
         $response = $client->request('GET', 'http://webservices.amazon.in/onca/xml',  ['query' => $query] );
         $contents = new SimpleXMLElement($response->getBody()->getContents());

      return $contents;
   }

}

?>

