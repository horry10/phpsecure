<form method="post" style="max-width: 500px;margin: auto;padding-top: 20px;">
    <?=csrf()?>
    <input type="text" value="<?=old_value('email','defaultemail@email.com')?>" name="email"><br>
    <input type="text" value="<?=old_value('password')?>" name="password"><br>
    <select name="gender">
        <option value="">--select--</option>
        <option <?=old_select('gender','male')?> value="male">male</option>
        <option <?=old_select('gender','female')?> value="female">female</option>
    </select>
    <br>
    <input <?=old_checked('hello','yes')?> type="checkbox" name="hello" value="yes">
    <input <?=old_checked('hello2','no')?> type="checkbox" name="hello2" value="no">
    <br>
    <button>Submit</button>
</form>