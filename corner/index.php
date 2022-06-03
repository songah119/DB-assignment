<html>
    <head>
        <title>코너별 매출 보고서</title>
        <link rel="stylesheet" href="corner.css">
    </head>
    <body>
        <header>
            <h1>코너별 메뉴별 주문 건수와 매출 페이지 입니다.</h1>
        </header>
        <main>
            <?php
                define('LOCALHOST','localhost');
                define('DB_USERNAME','root');
                define('DB_PASSWORD','');
                define('DB_NAME','database_assignmernt');
                $conn = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD) or die(mysqli_error()); //database connection
                $db_select = mysql_select_db($conn, DB_NAME) or die(mysqli_error()); //select database
            ?>
            <article class="report">
                <table border="1">
                    <tr>
                        <th>번호</th><th>이름</th>
                    </tr>
                    <tr>
                        <td>1</td><td>김씨</td>
                    </tr>
                    <tr>
                        <td>2</td><td>박씨</td>
                    </tr>
                </table>
            </article>
        </main>
    </body>

</html>