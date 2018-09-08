<?php
/*
Write a program that receives data about a quiz and prints it formatted
as an XML document. The data comes as pairs of question-answer entries.
The format of the document should be as follows:
<?xml version="1.0" encoding="UTF-8"?>
<quiz>
  <question>
    {question text}
  </question>
  <answer>
    {answer text}
  </answer>
</quiz>
The input comes as a string in which the questions and answers will be
separated by “, “. The output should be printed on the console.
 */

$input = trim(fgets(STDIN));
$arr = [];
$question = '';
$answer = '';

function trim_value(&$value){
    $value = trim($value);
}

$startXML =
    "<?xml version=\"1.0\" encoding=\"UTF-8\"?>
<quiz>
  <question>";

$stringArr = explode(",", $input);
array_walk($stringArr, 'trim_value');

echo "$startXML\n";

for ($i = 0; $i < count($stringArr); $i++) {
    if ($i % 2 == 0) {
        $question = $stringArr[$i];
        echo "     $question\n";
        echo "  </question>\n";
    } else {
        $question = $stringArr[$i];
        echo "  <answer>\n";
        echo "     $question\n";
        echo "  </answer>\n";
    }
}
echo "</quiz>\n";
