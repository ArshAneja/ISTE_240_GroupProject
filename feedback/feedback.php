<div class="page_content">

<script src="feedback.js"></script>
<form action="feedback_process.php" method="POST" onsubmit="return validateForm()">
    <!-- Name (text)-->
    <h1 class="form_elmnt"> Please Leave Feedback!</h1>
    <div class="form_elmnt">Enter your name
    <input type="text" id="visitor_name" name="visitor_name" placeholder="Enter Name">
    <span class="asterisk">*</span>
    </div>

    <!-- Most Effective Section (radio) -->
    <fieldset id="mes_fs" class="form_elmnt">
    <legend id="mes_leg">Most Effective Section <span class="asterisk">*</span></legend>
    <input type="radio" name="mes" value="Vocab" id="vocab"><label for="vocab">Vocabulary</label>
    <input type="radio" name="mes" value="Data Types" id="data"><label for="data">Data Types</label>
    <input type="radio" name="mes" value="Functions" id="func"><label for="func">Functions</label>
    <input type="radio" name="mes" value="File Reading" id="filer"><label for="filer">File Reading</label>
    <input type="radio" name="mes" value="None" id="none"><label for="none">None</label>
    </fieldset>
    

    <!-- Completed Sections (checkbox)-->
    <fieldset class="form_elmnt">
    <legend>Completed Sections </legend>
    <input type="checkbox" name="completed[]" value="Vocab" id="v"><label for="v">Vocabulary</label>
    <input type="checkbox" name="completed[]" value="Data Types" id="dt"><label for="dt">Data Types</label>
    <input type="checkbox" name="completed[]" value="Functions" id="f"><label for="f">Functions</label>
    <input type="checkbox" name="completed[]" value="File Reading" id="fr"><label for="fr">File Reading</label>
    </fieldset>

    
    <!-- Suggestions/Requested Topics (textarea) -->
    <div class="form_elmnt">
    <p><label for="suggest">Suggestions/Requested Topics</label></p>
  <textarea id="suggest" name="suggest" rows="4" cols="50" 
    placeholder="Write suggestions or requested topics here"></textarea>
    </div>

    <!-- Submit Button -->
    <div id="button" class="form_elmnt">
        <input type = "submit" VALUE="Submit Response" >
        <input type = "reset" VALUE= "Clear Input Fields">
    </div><!-- end of div for submit button -->
</form>

</div>