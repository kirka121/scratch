<link rel="stylesheet" href="form.css">
<script src="jquery.js" type="text/javascript" charset="utf-8"></script>
<!-- client side validation -->
<script src="jquery.validate.js" type="text/javascript" charset="utf-8"></script>
<script>
  $(document).ready(function(){
    $("#si_contact_form1").validate({
      rules: {
        si_contact_ex_field1: {
            required: true,
            minlength: 5,
            maxlength: 40
        },
        si_contact_ex_field2: {
            required: true,
            minlength: 5,
            maxlength: 40
        },
        si_contact_ex_field3: {
            email: true,
            required: true
        },
        si_contact_ex_field4: {
            required: true,
            digits: true,
            minlength: 10,
            maxlength: 10
        },
        si_contact_ex_field7: {
            required: true,
            digits: true
        }

      },
      messages: {
        si_contact_ex_field1: {
            required: "Please enter a title",
            minlength: "Minimum length is 5 characters",
            maxlength: "Maximum length is 40 characters"
        },
        si_contact_ex_field2: {
            required: "Please enter a name",
            minlength: "Minimum length is 5 characters",
            maxlength: "Maximum length is 40 characters"
        },
        si_contact_ex_field3: {
            email: "Please enter a valid E-mail",
            required: "Please enter an E-Mail"
        },
        si_contact_ex_field4: {
            required: "Please enter a phone number",
            digits: "Only digits allowed",
            minlength: "Phone must be 10 digits long",
            maxlength: "Phone must be 10 digits long"
        },
        si_contact_ex_field7: {
            required: "Please enter a word count",
            digits: "Only digits allowed"
        }
      }
    });
  });
</script>

<?php
    include_once("../includes/database.php");
    
    $email_from = "kirka121@gmail.com";

    if($_POST){
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
        
        //server side validation
        if($project_title == "" || !$project_title){
            echo "project title left blank";
        } elseif ($contact_name == "" || !$contact_name){
            echo "contact name left blank";
        } elseif ($contact_email == "" || !$contact_email){
            echo "contact email left blank";
        } elseif ($phone_number == "" || !$phone_number){
            echo "phone number left blank";
        } elseif ($original_language == "" || !$original_language){
            echo "original language left blank";
        } elseif ($target_language == "" || !$target_language){
            echo "target language left blank";
        } elseif ($word_count == "" || !$word_count){
            echo "word count left blank";
        } elseif ($type_of_service == "" || !$type_of_service){
            echo "type of service left blank";
        } elseif ($priority == "" || !$priority){
            echo "priority left blank";
        } elseif ($document_type == "" || !$document_type){
            echo "document type left blank";
        } elseif ($document_format == "" || !$document_format){
            echo "document format left blank";
        } else {
            include "libmail.php";
            $m= new Mail('utf-8');  // можно сразу указать кодировку, можно ничего не указывать ($m= new Mail;)
            $m->From( "Kirill;kirka121@gmail.com" ); // от кого Можно использовать имя, отделяется точкой с запятой
            $m->To( $contact_email );   // кому, в этом поле так же разрешено указывать имя
            $m->Subject( "[Quote Request]:  ".$project_title );
            $m->Body("From: ".$contact_name." (".$contact_email.")\nPhone: ".$phone_number."\nOriginal Language: ".$original_language."\nTarget Language: ".$target_language."\nWord Count: ".$word_count."\nType of Service: ".$type_of_service."\nPriority: ".$priority."\nDocument Type: ".$document_type." (".$document_format.") \nComments: ".$comments);
            $m->Priority(4) ;   // установка приоритета
            $m->smtp_on("ssl://smtp.gmail.com","kirka121@gmail.com","C45tt6KL32", 465, 10); // используя эу команду отправка пойдет через smtp
            $m->Send(); // отправка
            echo "Quote Request Sent";


            mysql_query("INSERT INTO `test1` (project_title,contact_name,contact_email,phone_number,original_language,target_language,word_count,type_of_service,priority,document_type,document_format,comments)
                         VALUES ('$project_title','$contact_name','$contact_email','$phone_number','$original_language','$target_language','$word_count','$type_of_service','$priority','$document_type','$document_format','$comments');");
        }
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
<table id="request_quote_table">
  <tr>
    <td>
        <form enctype="multipart/form-data" action="" id="si_contact_form1" class="si_contact_form1" method="post">
            <fieldset>
                <p>
                    <label for="si_contact_ex_field1_1">Project Title</label>
                    <input type="text" id="si_contact_ex_field1_1" name="si_contact_ex_field1" size="40" placeholder="Title"/>
                </p>
                <p>
                    <label for="si_contact_ex_field1_2">Contact Name</label>
                    <input type="text" id="si_contact_ex_field1_2" name="si_contact_ex_field2" placeholder="First Last Name" size="40" />
                </p>
                <p>
                    <label for="si_contact_ex_field1_3">Contact Email</label>
                    <input type="text" id="si_contact_ex_field1_3" name="si_contact_ex_field3" placeholder="E-Mail" size="40" />
                </p>
                <p>
                    <label for="si_contact_ex_field1_4">Phone Number</label>
                    <input type="text" id="si_contact_ex_field1_4" name="si_contact_ex_field4" placeholder="###" size="40" />
                </p>
                <p>
                    <label for="si_contact_ex_field1_5">Original Language</label>
                    <select id="si_contact_ex_field1_5" name="si_contact_ex_field5">
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
                </p>
                <p>
                    <label for="si_contact_ex_field1_6">Target Language</label>
                    <select id="si_contact_ex_field1_6" name="si_contact_ex_field6">
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
                </p>
                <p>
                    <label for="si_contact_ex_field1_7">Word Count</label>
                    <input type="text" id="si_contact_ex_field1_7" name="si_contact_ex_field7" placeholder="###" size="40" />
                </p>
                <p>
                    <label for="si_contact_ex_field1_8">Type of Service</label>
                    <select id="si_contact_ex_field1_8" name="si_contact_ex_field8">
                        <option value="Translation">Translation</option>
                        <option value="Revision">Revision</option>
                        <option value="Proofreading">Proofreading</option>
                        <option value="Adaptation">Adaptation</option>
                        <option value="Other">Other</option>
                    </select>
                </p>
                <p>
                    <label for="si_contact_ex_field1_9"> Priority</label>
                    <select id="si_contact_ex_field1_9" name="si_contact_ex_field9">
                        <option value="Regular">Regular</option>
                        <option value="Rush">Rush</option>
                        <option value="Urgent">Urgent</option>
                        <option value="Overnight">Overnight</option>
                        <option value="Weekend">Weekend</option>
                    </select>
                </p>
                <p>
                    <label for="si_contact_ex_field1_10">Document Type</label>
                    <select id="si_contact_ex_field1_10" name="si_contact_ex_field10">
                        <option value="General">General</option>
                        <option value="Technical">Technical</option>
                        <option value="Technical Complex">Technical Complex</option>
                    </select>
                </p>
                <p>
                    <label for="si_contact_ex_field1_11">Document Format</label>
                    <select id="si_contact_ex_field1_11" name="si_contact_ex_field11">
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
                </p>
                <p>
                    <label for="si_contact_ex_field1_13">Comments</label>
                    <textarea id="si_contact_ex_field1_13" name="si_contact_ex_field13" cols="40" rows="15" placeholder="Comments"></textarea>
                </p>
                <p id="submit_button">
                    <input type="hidden" name="si_contact_action" value="send" />
                    <input type="hidden" name="si_contact_form_id" value="1" />
                    <input type="submit" style="margin:0; cursor:pointer;" value="Generate a Quote" class="login_button"/>
                </p>
            </filedset>
        </form>
    </td>
  </tr>
</table>