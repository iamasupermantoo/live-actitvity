<?php
$basepath = str_replace ( DIRECTORY_SEPARATOR . 'common', DIRECTORY_SEPARATOR, dirname ( __FILE__ ) );
require_once ($basepath . 'library/aliyunosssdk/autoload.php');
use OSS\OssClient;
use OSS\Core\OssException;

class AliyunossFileUpoad {
	
	public $_allow_mimetypes=array("image/pjpeg", "image/jpeg", "image/png",'audio/mp3','application/vnd.ms-excel');
	
	public function setAllowMimeTypes($mimetypes=array()){
		if(!empty($mimetypes)){
			$this->_allow_mimetypes=$mimetypes;
		}
		// return $this->_allow_mimetypes;
	}
	
	public function getAllowMimeTypes(){
		return $this->_allow_mimetypes;
	}
	
	public function SaveFormFile($formfiledata, $filename = '', $path='') {

		$tp =$this->getAllowMimeTypes();
		// 检查上传文件是否在允许上传的类型
		if (! in_array ( $formfiledata ["type"], $tp )) {
			return false;
		}
		// echo var_export($formfiledata);
		$extension = $this->getFileExtension ( $formfiledata ['name'] );
		// echo $extension;exit();
		
		
		$accessKeyId = OSS_ACCESS_ID;
		$accessKeySecret = OSS_ACCESS_KEY;
		$endpoint = 'https://'.ENDPOINT;
		$bucket = BUCKET_NAME;
		$object = OBJECT_PATH."/pic_" . time () . '.' . $extension;
		$content = file_get_contents($formfiledata ['tmp_name']);

		try {
			$ossClient = new OssClient($accessKeyId, $accessKeySecret, $endpoint);
			$ossClient->putObject($bucket, $object, $content);
		} catch (OssException $e) {
			//print $e->getMessage();
		}
		
		//$weburl = 'https://' . BUCKET_NAME . '.oss-cn-hangzhou.aliyuncs.com/' . $object;
		$weburl = 'https://' . BUCKET_NAME . '.'. ENDPOINT . '/' . $object;
		//$weburl = 'https://' . ENDPOINT . '/' . $object;
		return $weburl;
	}
	
	public function SaveRemotePic($picurl = '', $domain = '') {
		$extension = $this->getFileExtension ( $picurl );
		$imagedata = $this->getRemoteImageData ( $picurl );
		$returnfileurl = $this->SaveFile ( $imagedata, $extension, $domain );
		return $returnfileurl;
	}
	
	private function getFileExtension($picurl) {
		$pathinfo = pathinfo ( $picurl );
		$extension = isset ( $pathinfo ['extension'] ) ? $pathinfo ['extension'] : '';
		$extension = strtolower ( $extension );
		switch ($extension) {
			case 'jpg' :
				// code...
				break;
			case 'jpeg' :
				break;
			case 'png' :
				break;
			case 'gif' :
				break;
			case 'mp3':
				break;
			case 'mp4':
				break;
			case 'ogg':
				break;
			default :
				$extension = 'lj';
				// code...
				break;
		}
		return $extension;
	}
	
	private function getRemoteImageData($picurl) {
		$ch = curl_init ();
		curl_setopt ( $ch, CURLOPT_URL, $picurl );
		curl_setopt ( $ch, CURLOPT_SSL_VERIFYPEER, false ); // 对认证证书来源的检查
		curl_setopt ( $ch, CURLOPT_SSL_VERIFYHOST, false ); // 从证书中检查SSL加密算法是否存在
		curl_setopt ( $ch, CURLOPT_RETURNTRANSFER, 1 );
		curl_setopt ( $ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1521.3 Safari/537.36" );
		$output = curl_exec ( $ch );
		curl_close ( $ch );
		return $output;
		// return array('data'=>$output,'extension'=>)
	}
	
	private function SaveFile($output, $extension, $domain='') {
		
		$accessKeyId = OSS_ACCESS_ID;
		$accessKeySecret = OSS_ACCESS_KEY;
		$endpoint = 'https://'.ENDPOINT;
		$bucket = BUCKET_NAME;
		$object = OBJECT_PATH."/pic_" . time ().uniqid(). '.' . $extension;
		$content = $output;

		try {
			$ossClient = new OssClient($accessKeyId, $accessKeySecret, $endpoint);
			$return = $ossClient->putObject($bucket, $object, $content);
		} catch (OssException $e) {
			//print $e->getMessage();exit;
		}
		
		//$weburl = 'https://' . ENDPOINT . '/' . $object;
		$weburl = 'https://' . BUCKET_NAME . '.'. ENDPOINT . '/' . $object;
		return $weburl;
	}
	
}
