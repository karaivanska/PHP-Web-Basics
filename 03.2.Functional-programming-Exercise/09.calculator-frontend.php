<form method="get">
    <input type="text" name="b"/>
    <input type="text" name="a"/>
    <select name="operation">
        <option name="sum">+</option>
        <option name="subtract">-</option>
        <option name="multiply">*</option>
        <option name="divide">/</option>
    </select>
    <input type="submit" value="Go"/>
    <br/><br/>
    <div>
        =
        <input type="text" name="result" value="<?php echo $output; ?>"/>
    </div>
</form>
