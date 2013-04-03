<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
    include_once("../includes/database.php");
    
    $email_from = "kirka121@gmail.com";

    if($_POST){
		$salutation=$_POST['si_contact_ex_field1'];
		$first_name=$_POST['si_contact_ex_field2'];
		$last_name=$_POST['si_contact_ex_field3'];
		$address=$_POST['si_contact_ex_field4'];
		$city=$_POST['si_contact_ex_field5'];
		$province=$_POST['si_contact_ex_field6'];
		$postal_code=$_POST['si_contact_ex_field7'];
		$phone=$_POST['si_contact_ex_field8'];
		$email=$_POST['si_contact_ex_field9'];
		$native_language=$_POST['si_contact_ex_field10'];
		// ??? $additional_languages=$_POST['si_contact_ex_field11'];
		$education=$_POST['si_contact_ex_field12'];
        
        //server side validation
        if ($email == "" || !$email){
            echo "contact email left blank";
        } else {
            include "libmail.php";
            $m= new Mail('utf-8');
            $m->From( "Kirill;kirka121@gmail.com" ); 
            $m->To( $email );
            $m->Subject( "[Quote Request]:  ".$project_title );
            $m->Body("From: ".$contact_name." (".$email.")\nPhone: ".$phone_number."\nOriginal Language: ".$original_language."\nTarget Language: ".$target_language."\nWord Count: ".$word_count."\nType of Service: ".$type_of_service."\nPriority: ".$priority."\nDocument Type: ".$document_type." (".$document_format.") \nComments: ".$comments);
            $m->Priority(4);
			$m->Attach( $_FILES["si_contact_ex_field13"]["tmp_name"], $_FILES["si_contact_ex_field13"]["name"]) ;
            $m->smtp_on("ssl://smtp.gmail.com","rihard27@gmail.com","cgpwuyisukbnkpyv", 465, 10);
            $m->Send();
            echo "Quote Request Sent";

            //mysql_query("INSERT INTO ...");
        }
    }
?>
<link rel="stylesheet" href="form.css">
<script src="jquery.js" type="text/javascript" charset="utf-8"></script>
<!-- client side validation -->
<script src="jquery.validate.js" type="text/javascript" charset="utf-8"></script>
<form enctype="multipart/form-data" action="" id="si_contact_form2" method="post">
<div style="text-align:left;"><span class="required">*</span>(denotes required field)</div>
<div><input type="hidden" name="si_contact_CID" value="1" /></div>

        <div style="text-align:left; padding-top:5px;">
                <label for="si_contact_ex_field2_1">Salutation</label>
        </div> 
        <div style="text-align:left;">
               <select style="text-align:left; margin:0;" id="si_contact_ex_field2_1" name="si_contact_ex_field1">
        <option value="Mr.">Mr.</option>
<option value="Ms.">Ms.</option>
<option value="Mrs.">Mrs.</option>
<option value="Dr.">Dr.</option>
</select>
        </div>
        <div style="text-align:left; padding-top:5px;">
                <label for="si_contact_ex_field2_2">First Name <span class="required">*</span></label>
        </div> 
        <div style="text-align:left;">
                <input style="text-align:left; margin:0;" type="text" id="si_contact_ex_field2_2" name="si_contact_ex_field2" value=""  size="40" />
        </div>
        <div style="text-align:left; padding-top:5px;">
                <label for="si_contact_ex_field2_3">Last Name <span class="required">*</span></label>
        </div> 
        <div style="text-align:left;">
                <input style="text-align:left; margin:0;" type="text" id="si_contact_ex_field2_3" name="si_contact_ex_field3" value=""  size="40" />
        </div>
        <div style="text-align:left; padding-top:5px;">
                <label for="si_contact_ex_field2_4">Address <span class="required">*</span></label>
        </div> 
        <div style="text-align:left;">
                <input style="text-align:left; margin:0;" type="text" id="si_contact_ex_field2_4" name="si_contact_ex_field4" value=""  size="40" />
        </div>
        <div style="text-align:left; padding-top:5px;">
                <label for="si_contact_ex_field2_5">City <span class="required">*</span></label>
        </div> 
        <div style="text-align:left;">
                <input style="text-align:left; margin:0;" type="text" id="si_contact_ex_field2_5" name="si_contact_ex_field5" value=""  size="40" />
        </div>
        <div style="text-align:left; padding-top:5px;">
                <label for="si_contact_ex_field2_6">Province <span class="required">*</span></label>
        </div> 
        <div style="text-align:left;">
               <select style="text-align:left; margin:0;" id="si_contact_ex_field2_6" name="si_contact_ex_field6">
        <option value="Alberta (AB)">Alberta (AB)</option>
<option value="British Columbia (BC)">British Columbia (BC)</option>
<option value="Manitoba (MB)">Manitoba (MB)</option>
<option value="New Brunswick (NB)">New Brunswick (NB)</option>
<option value="Newfoundland and Labrador (NL)">Newfoundland and Labrador (NL)</option>
<option value="Northwest Territories (NT)">Northwest Territories (NT)</option>
<option value="Nova Scotia (NS)">Nova Scotia (NS)</option>
<option value="Nunavut (NU)">Nunavut (NU)</option>
<option value="Prince Edward Island (PE)">Prince Edward Island (PE)</option>
<option value="Saskatchewan (SK)">Saskatchewan (SK)</option>
<option value="Ontario (ON)">Ontario (ON)</option>
<option value="Quebec (QC)">Quebec (QC)</option>
<option value="Yukon (YT)">Yukon (YT)</option>
</select>
        </div>
        <div style="text-align:left; padding-top:5px;">
                <label for="si_contact_ex_field2_7">Postal Code <span class="required">*</span></label>
        </div> 
        <div style="text-align:left;">
                <input style="text-align:left; margin:0;" type="text" id="si_contact_ex_field2_7" name="si_contact_ex_field7" value=""  size="40" />
        </div>
        <div style="text-align:left; padding-top:5px;">
                <label for="si_contact_ex_field2_8">Phone <span class="required">*</span></label>
        </div> 
        <div style="text-align:left;">
                <input style="text-align:left; margin:0;" type="text" id="si_contact_ex_field2_8" name="si_contact_ex_field8" value=""  size="40" />
        </div>
        <div style="text-align:left; padding-top:5px;">
                <label for="si_contact_ex_field2_9">Email <span class="required">*</span></label>
        </div> 
        <div style="text-align:left;">
                <input style="text-align:left; margin:0;" type="text" id="si_contact_ex_field2_9" name="si_contact_ex_field9" value=""  size="40" />
        </div>
        <div style="text-align:left; padding-top:5px;">
                <label for="si_contact_ex_field2_10">Native Language <span class="required">*</span></label>
        </div> 
        <div style="text-align:left;">
                <input style="text-align:left; margin:0;" type="text" id="si_contact_ex_field2_10" name="si_contact_ex_field10" value=""  size="40" />
        </div>
        <div style="text-align:left; padding-top:5px;">
          <label>Additional Languages</label>
<br /><input type="checkbox" id="si_contact_ex_field2_11_1" name="si_contact_ex_field11_1" value="selected"  />
                <label for="si_contact_ex_field2_11_1">Arabic</label>
<br /><input type="checkbox" id="si_contact_ex_field2_11_2" name="si_contact_ex_field11_2" value="selected"  />
                <label for="si_contact_ex_field2_11_2">Chinese</label>
<br /><input type="checkbox" id="si_contact_ex_field2_11_3" name="si_contact_ex_field11_3" value="selected"  />
                <label for="si_contact_ex_field2_11_3">English</label>
<br /><input type="checkbox" id="si_contact_ex_field2_11_4" name="si_contact_ex_field11_4" value="selected"  />
                <label for="si_contact_ex_field2_11_4">French</label>
<br /><input type="checkbox" id="si_contact_ex_field2_11_5" name="si_contact_ex_field11_5" value="selected"  />
                <label for="si_contact_ex_field2_11_5">German</label>
<br /><input type="checkbox" id="si_contact_ex_field2_11_6" name="si_contact_ex_field11_6" value="selected"  />
                <label for="si_contact_ex_field2_11_6">Italian</label>
<br /><input type="checkbox" id="si_contact_ex_field2_11_7" name="si_contact_ex_field11_7" value="selected"  />
                <label for="si_contact_ex_field2_11_7">Japanese</label>
<br /><input type="checkbox" id="si_contact_ex_field2_11_8" name="si_contact_ex_field11_8" value="selected"  />
                <label for="si_contact_ex_field2_11_8">Polish</label>
<br /><input type="checkbox" id="si_contact_ex_field2_11_9" name="si_contact_ex_field11_9" value="selected"  />
                <label for="si_contact_ex_field2_11_9">Russian</label>
<br /><input type="checkbox" id="si_contact_ex_field2_11_10" name="si_contact_ex_field11_10" value="selected"  />
                <label for="si_contact_ex_field2_11_10">Spanish</label>
<br /><input type="checkbox" id="si_contact_ex_field2_11_11" name="si_contact_ex_field11_11" value="selected"  />
                <label for="si_contact_ex_field2_11_11">Ukrainian</label>
<br /><input type="checkbox" id="si_contact_ex_field2_11_12" name="si_contact_ex_field11_12" value="selected"  />
                <label for="si_contact_ex_field2_11_12">Other</label>

        </div> 

        <div style="text-align:left; padding-top:5px;">
                <label for="si_contact_ex_field2_12">Education <span class="required">*</span></label>
        </div> 
        <div style="text-align:left;">
                <textarea style="text-align:left; margin:0;" id="si_contact_ex_field2_12" name="si_contact_ex_field12"  cols="40" rows="15"></textarea>
        </div>
        <div style="text-align:left; padding-top:5px;">
                <label for="si_contact_ex_field2_13">Attach Your Resume <span class="required">*</span></label>
                <br /><small>(Acceptable file types: doc,docx,rtf,pdf,txt. Maximum file size: 2mb)</small>

        </div> 
        <div style="text-align:left;">
                <input style="text-align:left; margin:0;" type="file" id="si_contact_ex_field2_13" name="si_contact_ex_field13" value=""  size="40" />
        </div>
<div style="text-align:left; padding-top:5px;">
  <input type="hidden" name="si_contact_action" value="send" />
  <input type="hidden" name="si_contact_form_id" value="2" />
  <input type="submit" style="margin:0; cursor:pointer;" value="Submit" />
</div>

</form>