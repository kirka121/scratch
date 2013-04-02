<?php
	include_once("../includes/database.php");
	if($_POST['si_contact_action'] == 'send'){
		$project_title=$_POST['si_contact_ex_field1'];
		$contact_name=$_POST['si_contact_ex_field2'];
		$contact_email=$_POST['si_contact_ex_field3'];
		$phone_number=$_POST['si_contact_ex_field4'];
		$original_language=$_POST['si_contact_ex_field5'];
		$target_language=$_POST['si_contact_ex_field6'];
		$word_count=$_POST['si_contact_ex_field7'];
		$type_of_service=$_POST['si_contact_ex_field8'];
		$priority=$_POST['si_contact_ex_field9'];
		$document_type=$_POST['si_contact_ex_field10'];
		$document_format=$_POST['si_contact_ex_field11'];
		$comments=$_POST['si_contact_ex_field13'];
		
		mysql_query("INSERT INTO `test1` (project_title,contact_name,contact_email,phone_number,original_language,target_language,word_count,type_of_service,priority,document_type,document_format,comments) VALUES
('$project_title','$contact_name','$contact_email','$phone_number','$original_language','$target_language','$word_count','$type_of_service','$priority','$document_type','$document_format','$comments');");
	
	}
/* table test1
CREATE TABLE `test1` (
	`id` int(11) NOT NULL auto_increment,
	`username` varchar(30) NOT NULL,
	`project_title` varchar(30) NOT NULL,
	`contact_name` varchar(30) NOT NULL,
	`contact_email` varchar(30) NOT NULL,
	`phone_number` varchar(30) NOT NULL,
	`original_language` varchar(30) NOT NULL,
	`target_language` varchar(30) NOT NULL,
	`word_count` varchar(30) NOT NULL,
	`type_of_service` varchar(30) NOT NULL,
	`priority` varchar(30) NOT NULL,
	`document_type` varchar(30) NOT NULL,
	`document_format` varchar(30) NOT NULL,
	`comments` varchar(30) NOT NULL,
	PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
*/
?>
<form enctype="multipart/form-data" action="" id="si_contact_form1" method="post">
<div style="color:red; text-align:left;">Please make corrections below and try again.</div>
<div style="color:red; text-align:left;">This contact form has file attachment fields. Attachments are only supported when the Send E-Mail function is set to WordPress. You can find this setting on the contact form settings page.</div>
<div style="text-align:left;"><span class="required">*</span>(denotes required field)</div>
<div><input type="hidden" name="si_contact_CID" value="1" /></div>

        <div style="text-align:left; padding-top:5px;">
                <label for="si_contact_ex_field1_1">Project Title <span class="required">*</span></label>
        </div> 
        <div style="text-align:left;">
                <input style="text-align:left; margin:0;" type="text" id="si_contact_ex_field1_1" name="si_contact_ex_field1" value=""  size="40" />
        </div>
        <div style="text-align:left; padding-top:5px;">
                <label for="si_contact_ex_field1_2">Contact Name <span class="required">*</span></label>
        </div> 
        <div style="text-align:left;">
                <input style="text-align:left; margin:0;" type="text" id="si_contact_ex_field1_2" name="si_contact_ex_field2" value=""  size="40" />
        </div>
        <div style="text-align:left; padding-top:5px;">
                <label for="si_contact_ex_field1_3">Contact Email <span class="required">*</span></label>
        </div> 
        <div style="text-align:left;">
                <input style="text-align:left; margin:0;" type="text" id="si_contact_ex_field1_3" name="si_contact_ex_field3" value=""  size="40" />
        </div>
        <div style="text-align:left; padding-top:5px;">
                <label for="si_contact_ex_field1_4">Phone Number <span class="required">*</span></label>
        </div> 
        <div style="text-align:left;">
                <input style="text-align:left; margin:0;" type="text" id="si_contact_ex_field1_4" name="si_contact_ex_field4" value=""  size="40" />
        </div>
        <div style="text-align:left; padding-top:5px;">
                <label for="si_contact_ex_field1_5">Original Language <span class="required">*</span></label>
        </div> 
        <div style="text-align:left;">
               <select style="text-align:left; margin:0;" id="si_contact_ex_field1_5" name="si_contact_ex_field5">
        <option value="Arabic">Arabic</option>
<option value="Chinese">Chinese</option>
<option value="English">English</option>
<option value="French">French</option>
<option value="German">German</option>
<option value="Italian">Italian</option>
<option value="Japanese">Japanese</option>
<option value="Polish">Polish</option>
<option value="Russian">Russian</option>
<option value="Spanish">Spanish</option>
<option value="Ukrainian">Ukrainian</option>
<option value="Other">Other</option>
</select>
        </div>
        <div style="text-align:left; padding-top:5px;">
                <label for="si_contact_ex_field1_6">Target Language <span class="required">*</span></label>
        </div> 
        <div style="text-align:left;">
               <select style="text-align:left; margin:0;" id="si_contact_ex_field1_6" name="si_contact_ex_field6">
        <option value="Arabic">Arabic</option>
<option value="Chinese">Chinese</option>
<option value="English">English</option>
<option value="French">French</option>
<option value="German">German</option>
<option value="Italian">Italian</option>
<option value="Japanese">Japanese</option>
<option value="Polish">Polish</option>
<option value="Russian">Russian</option>
<option value="Spanish">Spanish</option>
<option value="Ukrainian">Ukrainian</option>
<option value="Other">Other</option>
</select>
        </div>
        <div style="text-align:left; padding-top:5px;">
                <label for="si_contact_ex_field1_7">Word Count <span class="required">*</span></label>
        </div> 
        <div style="text-align:left;">
                <input style="text-align:left; margin:0;" type="text" id="si_contact_ex_field1_7" name="si_contact_ex_field7" value=""  size="40" />
        </div>
        <div style="text-align:left; padding-top:5px;">
                <label for="si_contact_ex_field1_8">Type of Service <span class="required">*</span></label>
        </div> 
        <div style="text-align:left;">
               <select style="text-align:left; margin:0;" id="si_contact_ex_field1_8" name="si_contact_ex_field8">
        <option value="Translation">Translation</option>
<option value="Revision">Revision</option>
<option value="Proofreading">Proofreading</option>
<option value="Adaptation">Adaptation</option>
<option value="Other">Other</option>
</select>
        </div>
        <div style="text-align:left; padding-top:5px;">
                <label for="si_contact_ex_field1_9">Priority <span class="required">*</span></label>
        </div> 
        <div style="text-align:left;">
               <select style="text-align:left; margin:0;" id="si_contact_ex_field1_9" name="si_contact_ex_field9">
        <option value="Regular">Regular</option>
<option value="Rush">Rush</option>
<option value="Urgent">Urgent</option>
<option value="Overnight">Overnight</option>
<option value="Weekend">Weekend</option>
</select>
        </div>
        <div style="text-align:left; padding-top:5px;">
                <label for="si_contact_ex_field1_10">Document Type <span class="required">*</span></label>
        </div> 
        <div style="text-align:left;">
               <select style="text-align:left; margin:0;" id="si_contact_ex_field1_10" name="si_contact_ex_field10">
        <option value="General">General</option>
<option value="Technical">Technical</option>
<option value="Technical Complex">Technical Complex</option>
</select>
        </div>
        <div style="text-align:left; padding-top:5px;">
                <label for="si_contact_ex_field1_11">Document Format <span class="required">*</span></label>
        </div> 
        <div style="text-align:left;">
               <select style="text-align:left; margin:0;" id="si_contact_ex_field1_11" name="si_contact_ex_field11">
        <option value="Word">Word</option>
<option value="WordPerfect">WordPerfect</option>
<option value="HTML">HTML</option>
<option value="Text">Text</option>
<option value="PDF">PDF</option>
<option value="Lotus 1-2-3">Lotus 1-2-3</option>
<option value="Lotus Notes">Lotus Notes</option>
<option value="WordPro">WordPro</option>
<option value="Excel">Excel</option>
<option value="PowerPoint">PowerPoint</option>
<option value="Visio">Visio</option>
<option value="Other">Other</option>
</select>
        </div>
        <div style="text-align:left; padding-top:5px;">
                <label for="si_contact_ex_field1_13">Comments</label>
        </div> 
        <div style="text-align:left;">
                <textarea style="text-align:left; margin:0;" id="si_contact_ex_field1_13" name="si_contact_ex_field13"  cols="40" rows="15"></textarea>
        </div>
<div style="text-align:left; padding-top:5px;">
  <input type="hidden" name="si_contact_action" value="send" />
  <input type="hidden" name="si_contact_form_id" value="1" />
  <input type="submit" style="margin:0; cursor:pointer;" value="Generate a Quote" />
</div>

</form>