<?php
class Upload
{
	public $max_size = 10485760;
	public $file_temp;
	public $pref_width = 200;
	public $pref_height = 200;
	public $error;
	
	public function Upload(){
		$this->file_temp = "assets/".md5(time()-rand()).".jpg";
	}
	
	public function ProfilePicture(){
		global $session;
		if(isset($_FILES["_upload"]))
		{
			$image=$this->UploadImage();
			if($image){
				mysql_query("UPDATE `giggo_users` set profile_picture = '".$image."' where username = '".$session->username."'");
			}
		}
	}
		
	private function UploadImage(){
		if(isset($_FILES["_upload"]))
		{
			$photo_file_ext = strtolower( end( explode( ".", $_FILES["_upload"]["name"] ) ) );
			if(file_exists($_FILES["_upload"]["tmp_name"]))
			{		
				if($photo_file_ext=="jpg" || $photo_file_ext=="png")
				{
					if($_FILES["_upload"]["size"] <= $this->max_size)
					{
						list($width, $height, $type) = getimagesize($_FILES['_upload']['tmp_name']);
						
						switch($type){
							case 2: // jpeg
								$image_src = imagecreatefromjpeg($_FILES['_upload']['tmp_name']);
								break;
							case 3: // png
								$image_src = imagecreatefrompng($_FILES['_upload']['tmp_name']);
								break;
							default:
								$image_src = '';
								break;
						}
						if($image_src != ''){
							$new_file_name=md5(time());

							if ($width <= $height){
								/* portret photo  */
								$width_s = $this->pref_width;
								$height_s = round($this->pref_width * (float) ($height / 100) / ($width / 100));
								
								$image_dst_temp  = imagecreatetruecolor($width_s, $height_s);
								imagecopyresampled($image_dst_temp, $image_src, 0, 0, 0 , 0, $width_s, $height_s, $width, $height);

							}
							else{ 
								/* landscape photo */
								$height_s = $this->pref_height;
								$width_s = round($this->pref_height * (float) ($width / 100) / ($height / 100));

								if ($width_s <= $this->pref_width){
									$width_s = $this->pref_width;
									$height_s = round($this->pref_width * (float) ($height / 100) / ($width / 100));
								}
								$image_dst_temp  = imagecreatetruecolor($width_s, $height_s);
								imagecopyresampled($image_dst_temp, $image_src, 0, 0, 0 , 0, $width_s, $height_s, $width, $height);
							}

							imagejpeg($image_dst_temp,	 $this->file_temp, 75);
								
							$image = file_get_contents( $this->file_temp );
							$image = mysql_escape_string( $image );
							unlink($this->file_temp);
							imagedestroy($image_dst_temp);
							
							return $image;
						}
						else{
							$this->error = "Allowed formats - jpg, png";
						}
					}
					else{
						$this->error = "Wrong size";
					}
				}
				else
				{
					$this->error = "Allowed formats - jpg, png";
				}
			}
			else
			{
				$this->error = "Error";
			}
		}
	}
}
?>