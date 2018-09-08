<form method="get">
    <div>
        Operation:
        <select name="operation">
            <option value="sum">Sum</option>
            <option value="subtract">Subtract</option>
        </select>
    </div>
    <div>
        Number 1:
        <input type="text" name="number_one"/>
    </div>
    <div>
        Number 2:
        <input type="text" name="number_two"/>
    </div>
    <div>
        <input type="submit" name="calculate" value=" Calculate "/>
    </div>
</form>
<?php if (isset($output)): ?>
    <div>
        Result:
        <input type="text" value="<?php echo $output; ?>"/>
    </div>
<?php endif; ?>

