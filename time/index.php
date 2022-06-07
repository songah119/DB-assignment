<html>
    <head>
        <title>시간별 매출 보고서</title>
        <link rel="stylesheet" href="time.css">
    </head>

    <body>
        <header>
            <h1>시간별 주문 건수와 매출 페이지 입니다.</h1>
        </header>
        <main>
            <article class="report">
                <table class="" border="1">
                    <tr>
                        <th>주문시간</th>
                        <th>주문건수</th>
                        <th>매출</th>
                    </tr>

                    <?php 
                    $conn = mysqli_connect( "localhost", "", "", "database_assignmernt" ) or die(mysqli_error()); //database connection
                    $query= "
                        select 주문시간, sum(수량) as 주문건수 , sum(가격) as 매출
                        from 주문상세 as a , 메뉴 as b
                        where a.메뉴번호 = b.메뉴번호
                        group by a.주문시간
                        order by 주문시간;
                    ";
                    $result=mysqli_query($conn, $query);
                    while($row=mysqli_fetch_array($result)){
                    ?>
                    <tr>
                        <td><?php echo $row['주문시간']?></td>
                        <td><?php echo $row['주문건수']?></td>
                        <td><?php echo $row['매출']?></td>
                    </tr>
                    <?php } ?>
                </table>
            </article>
            <?php
            mysqli_free_result($result);
            mysqli_close($conn);
            ?>
        </main>
    </body>
</html>