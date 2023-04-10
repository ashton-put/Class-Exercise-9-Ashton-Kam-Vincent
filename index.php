<?php
include 'top.php';
?>

<main>
    <h1>Welcome to the Home Page!</h1>

    <h2>Please Select a Quiz</h2>

    <?php
        $sql = 'SELECT fldQuizName, pmkQuizId ';
        $sql .= 'FROM tblQuiz';

        $quizzes = $thisDataBaseReader->select($sql);

        foreach($quizzes as $quiz) {
            print '<p><a href="quiz.php?quizId=';
            print $quiz['pmkQuizId'];
            print '&questionOrder=1">';
            print $quiz['fldQuizName'] . ' Quiz</a></p>';
            print PHP_EOL;
        }
    ?>
</main>
<?php
include 'footer.php';
?>