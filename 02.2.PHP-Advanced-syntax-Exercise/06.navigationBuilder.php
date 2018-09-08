<form action="">
    Categories: <input type="text" name="categories"><br>
    Tags: <input type="text" name="tags"><br>
    Months: <input type="text" name="months"><br>
    <input type="submit" value="Generate">
</form>
<?php
/*
Write a PHP program Navigation.php that takes data from several input
fields and builds 3 navigation bars. The input fields are categories with
attribute name=”categories”, tags with attribute name=”tags” and months
with attribute name=”tags”. The first navigation bar should contain a list
of the categories, the second navigation bar – a list of the tags and the
third should contain the months. The entries in the input strings will be
separated by a comma and space ", ". When you print your result don’t forget
to use <h2> tag  for “Categories”, “Tags”, and “Months”. Semantic HTML is required.
*/

if(isset($_GET['categories'])){
    $all_categories = trim($_GET['categories']);
    $arr = explode(', ', $all_categories);
    echo "<h2>Categories</h2>";

    foreach ($arr as $category) {
        echo "<ul><li>$category</li></ul>";
    }
}

if(isset($_GET['tags'])){
    $all_tags = trim($_GET['tags']);
    $arr = explode(', ', $all_tags);
    echo "<h2>Tags</h2>";

    foreach ($arr as $tag) {
        echo "<ul><li>$tag</li></ul>";
    }
}

if(isset($_GET['months'])){
    $all_months = trim($_GET['months']);
    $arr = explode(', ', $all_months);
    echo "<h2>Months</h2>";

    foreach ($arr as $month) {
        echo "<ul><li>$month</li></ul>";
    }
}